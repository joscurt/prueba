<?php

namespace Techgym\PTFrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Techgym\PTFrontendBundle\Entity\PtUsuario;
use Techgym\PTFrontendBundle\Form\Type\RegistroType;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class LoginController extends Controller {

    public function indexAction(Request $request) {

        $id = $request->get("id");
        $pass = $request->get("password");

        $user = $this->getDoctrine()->getRepository('TechgymPTFrontendBundle:PtUsuario')->findOneBy(array("id" => $id, "password" => $pass));


        if ($user) {
            $session = $request->getSession();
            $session->set("id", $user->getId());
            $session->set("nombre", $user->getNombre());
            echo $session->getNombre("nombre");
            exit;
        } else {
            //return $this->render('TechgymPTFrontendBundle:Login:index.html.twig');
            //  die("hola");exit;  
        }
        /* obtengo la sessiondel usuario logueado */
        $usuario = $this->get('security.context')->getToken()->getUser();
        /* obtengo los datos que requiero dando la session obtenida */
        $user2 = $this->getDoctrine()->getRepository('TechgymPTFrontendBundle:Alumno')->findByUsuarioOrderedById($usuario);
        $user4 = $this->getDoctrine()->getRepository('TechgymPTFrontendBundle:Alumno')->findByUsuarioTotal($usuario);

        $user3 = $this->getDoctrine()->getRepository('TechgymPTFrontendBundle:Evaluacion')->findByPtusuario($usuario, array('id' => 'DESC'));
        $userene = $this->getDoctrine()->getRepository('TechgymPTFrontendBundle:Alumno')->findByMonthEne($usuario);
        $userfeb = $this->getDoctrine()->getRepository('TechgymPTFrontendBundle:Alumno')->findByMonthFeb($usuario);
        $usermar = $this->getDoctrine()->getRepository('TechgymPTFrontendBundle:Alumno')->findByMonthMar($usuario);
        $userabr = $this->getDoctrine()->getRepository('TechgymPTFrontendBundle:Alumno')->findByMonthAbr($usuario);
        $usermay = $this->getDoctrine()->getRepository('TechgymPTFrontendBundle:Alumno')->findByMonthMay($usuario);
        $userjun = $this->getDoctrine()->getRepository('TechgymPTFrontendBundle:Alumno')->findByMonthJun($usuario);
        $userjul = $this->getDoctrine()->getRepository('TechgymPTFrontendBundle:Alumno')->findByMonthJul($usuario);
        $userago = $this->getDoctrine()->getRepository('TechgymPTFrontendBundle:Alumno')->findByMonthAgo($usuario);
        $usersep = $this->getDoctrine()->getRepository('TechgymPTFrontendBundle:Alumno')->findByMonthSept($usuario);
        $useroct = $this->getDoctrine()->getRepository('TechgymPTFrontendBundle:Alumno')->findByMonthOct($usuario);
        $usernov = $this->getDoctrine()->getRepository('TechgymPTFrontendBundle:Alumno')->findByMonthNov($usuario);
        $userdic = $this->getDoctrine()->getRepository('TechgymPTFrontendBundle:Alumno')->findByMonthDic($usuario);
        $useract = $this->getDoctrine()->getRepository('TechgymPTFrontendBundle:Alumno')->findByUsuarioOrderedByIdActual($usuario);
        $useract2 = $this->getDoctrine()->getRepository('TechgymPTFrontendBundle:Alumno')->findByUsuarioOrderedByIdActual2($usuario);



        return $this->render('TechgymPTFrontendBundle:Login:index.html.twig', array(
                    'user2' => $user2, 'usertotal' => $user4,
                    'user3' => $user3,
                    'usersep' => $usersep, 'userfeb' => $userfeb, 'usermar' => $usermar, 'userabr' => $userabr, 'usermay' => $usermay,
                    'userjun' => $userjun, 'userjul' => $userjul, 'userago' => $userago, 'useroct' => $useroct, 'usernov' => $usernov,
                    'userdic' => $userdic, 'userene' => $userene, 'useract' => $useract, 'useract2' => $useract2
        ));

        /*  if ($session->has("id")) {
          return $this->render('TechgymPTFrontendBundle:Login:index.html.twig');
          } else {
          $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
          $session->remove(SecurityContext::AUTHENTICATION_ERROR);
          return $this->render(
          'TechgymPTFrontendBundle:Login:login.html.twig', array(
          // last username entered by the user
          'last_username' => $session->get(SecurityContext::LAST_USERNAME),
          'error' => $error,
          ));
          } */
    }

    public function activarAction() {
        $request = $this->getRequest();

        $em = $this->get('doctrine')->getEntityManager();

        $usuario = $em->getRepository('TechgymPTFrontendBundle:PtUsuario')
                ->findOneByTokenRegistro($request->get('token'));

        if (!$usuario) {
            throw $this->createNotFoundException('Usuario no registrado');
        }

        $usuario->setIsActive(true);
        $em->persist($usuario);

        $em->flush();

        return $this
                        ->render(
                                'TechgymPTFrontendBundle:Login:activar_success.html.twig', array('usuario' => $usuario)
        );
    }

    

    public function activaralumnoAction() {
        $request = $this->getRequest();

        $em = $this->get('doctrine')->getEntityManager();

        $usuario = $em->getRepository('TechgymPTFrontendBundle:Alumno')
                ->findOneByTokenRegistro($request->get('token'));

        if (!$usuario) {
            throw $this->createNotFoundException('Usuario no registrado');
        }

        $usuario->setIsActive(true);
        $em->persist($usuario);

        $em->flush();

        return $this
                        ->render(
                                'TechgymPTFrontendBundle:Login:activar_success.html.twig', array('usuario' => $usuario)
        );
    }

    public function registroAction(Request $request) {


        $request = $this->getRequest();
        $session = $request->getSession();
        $usuario = new PtUsuario();
        $em = $this->get('doctrine')->getEntityManager();
        $form = $this->createForm(RegistroType::class, $usuario);


        if ($request->getMethod() == "POST") {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {


                $serviceRegistro = $this->get('techgym_pt_frontend.registro');
                $serviceRegistro->registra($usuario, $form->get('password')->getData());


                $file = $usuario->getImagenpt();
                if (null !== $file) {
                    $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                    // Move the file to the directory where brochures are stored
                    $file->move($this->getParameter('imagenes_directorio'), $fileName);
                    $usuario->setImagenpt($fileName);
                } else {
                    $fileName = "user.jpg";
                    $usuario->setImagenpt($fileName);
                }
                /* insercion de datos 
                  $usuario->setUsuario($idpt); */

                $em->persist($usuario);
                $em->flush();

                return $this
                                ->render(
                                        'TechgymPTFrontendBundle:Login:registro_success.html.twig', array('usuario' => $usuario)
                );
            }
        }

        return $this
                        ->render(
                                'TechgymPTFrontendBundle:Login:registro.html.twig', array('form' => $form->createView())
        );
    }

    public function loginAction(Request $request) {

        /* if($request->getMethod()=="POST") 
          {
          $correo=$request->get("_username");
          $pass=md5($request->get("_password"));
          //echo "correo:".$correo."Pass:".$pass;exit;
          /* @var $password type
          $user = $this->getDoctrine()->getRepository('JAMNotasFrontendBundle:Usuario')->findOneBy(array("username"=>$correo,"password"=>$pass));

          if($user){
          $session =$request->getSession();
          $session->set("nombre",$user->getNombre());
          // echo $session->get("nombre");
          }
          else{
          $this->get('session')->getFlashBag()->add('mensaje','Los Datos Ingresados no son vàlidos');

          return $this->redirect($this->generateUrl('jamn_login'));
          }
          }
          return $this->render('JAMNotasFrontendBundle:Login:login.html.twig'); */

        /*   if($request->getMethod()=="POST") {

          die("hola");exit;

          } */

        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                    SecurityContext::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render(
                        'TechgymPTFrontendBundle:Login:login.html.twig', array(
                    // last username entered by the user
                    'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                    'error' => $error,
                        )
        );
    }

}
