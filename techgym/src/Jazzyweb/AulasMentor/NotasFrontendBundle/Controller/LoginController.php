<?php

 namespace Jazzyweb\AulasMentor\NotasFrontendBundle\Controller;

 use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 use Symfony\Component\HttpFoundation\Request;
 use Symfony\Component\Security\Core\SecurityContext;
 use Jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Usuario;
 use Jazzyweb\AulasMentor\NotasFrontendBundle\Form\Type\RegistroType;
 
 

 class LoginController extends Controller
 {
    public function activarAction()
    {
     $request = $this->getRequest();

     $em = $this->get('doctrine')->getEntityManager();

     $usuario = $em->getRepository('JAMNotasFrontendBundle:Usuario')
             ->findOneByTokenRegistro($request->get('token'));

     if (!$usuario) {
         throw $this->createNotFoundException('Usuario no registrado');
     }

     $usuario->setIsActive(true);
     $em->persist($usuario);

     $em->flush();

     return $this
       ->render(
         'JAMNotasFrontendBundle:Login:activar_success.html.twig',
         array('usuario' => $usuario)
       );
    }
    public function registroAction() {

     $request = $this->getRequest();
     $usuario = new Usuario();

     $form = $this->createForm(new RegistroType(), $usuario);

     if ($request->getMethod() == "POST") {
         $form->bind($request);
         if ($form->isValid()) {
             $serviceRegistro = $this->get('jam_notas_frontend.registro');
             $serviceRegistro->registra($usuario, $form->get('password')->getData());

             return $this
               ->render(
                 'JAMNotasFrontendBundle:Login:registro_success.html.twig',
                  array('usuario' => $usuario)
               );
         }
     }

     return $this
       ->render(
         'JAMNotasFrontendBundle:Login:registro.html.twig',
         array('form' => $form->createView())
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
      return $this->render('JAMNotasFrontendBundle:Login:login.html.twig');*/
       
       if($request->getMethod()=="POST") {
           
           die("hola");exit;
           
       }
       
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
            'JAMNotasFrontendBundle:Login:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error'         => $error,
            )
        );
       
       
    }

}