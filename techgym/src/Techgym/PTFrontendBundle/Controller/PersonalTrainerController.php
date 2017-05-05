<?php

namespace Techgym\PTFrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;
use Techgym\PTFrontendBundle\Entity\PtUsuario;
use Techgym\PTFrontendBundle\Entity\Alumno;
use Techgym\PTFrontendBundle\Form\Type\RegistroAlumnoType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormBuilderInterface;

class PersonalTrainerController extends Controller {

    public function dameAlumnosAction(Request $request) {
        $session = $this->get('session');
        $em = $this->getDoctrine()->getEntityManager();

        $usuario = $this->get('security.context')->getToken()->getUser();

        $alumnos = $em->getRepository('TechgymPTFrontendBundle:Alumno')->
                findByUsuarioOrderedById($usuario);

        $user3 = $this->getDoctrine()->getRepository('TechgymPTFrontendBundle:Evaluacion')->findByAlumno($usuario, array('id' => 'DESC'));
      
        $activeFormAjax = $this->activeCustomForm(':USER_ID', 'POST', 'techgym_pt_frontend_alumno_updated');

        //return array($alumnos);
        return $this->render('TechgymPTFrontendBundle:Alumnos:index.html.twig', array('alumnos' => $alumnos,'alumno3' => $user3,
                    'active_form_ajax' => $activeFormAjax->createView()
                        )
        );
    }

    private function activeCustomForm($id, $method, $route) {
        return $this->createFormBuilder()
                        ->setAction($this->generateURL($route, array('id' => $id)))
                        ->setMethod($method)
                        ->getForm();
    }

    public function alumInacAction(Request $request) {
        $session = $this->get('session');
        $em = $this->getDoctrine()->getManager();

        $usuario = $this->get('security.context')->getToken()->getUser();

        $alumnos = $em->getRepository('TechgymPTFrontendBundle:Alumno')->
                findByUsuarioOrderedByIdinac($usuario);

        $deleteFormAjax = $this->createCustomForm(':USER_ID', 'DELETE', 'techgym_pt_frontend_alumno_eliminar');

        $active2FormAjax = $this->createCustomForm(':USER_ID', 'POST', 'techgym_pt_frontend_alumno_updated2');


        return $this
                        ->render(
                                'TechgymPTFrontendBundle:Alumnos:alum_inac.html.twig', array('alumnos' => $alumnos,
                            'eliminar_form_ajax' => $deleteFormAjax->createView(), 'active2_form_ajax' => $active2FormAjax->createView())
        );
    }

    public function action2Action(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository('TechgymPTFrontendBundle:Alumno')->find($id);
        //$form = $this->createEliminarForm($usuario);


        $form = $this->createCustomForm($usuario->getId(), 'POST', 'techgym_pt_frontend_alumno_updated2');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if ($request->isXmlHttpRequest()) {

                $res = $this->active2User($usuario->getIsActive(), $em, $usuario);

                return new Response(
                        json_encode(array('removed' => $res['removed'], 'message' => $res['message'])), 200, array('Content-Type' => 'application/json')
                );
            }
            $res = $this->active2User($usuario->getIsActive(), $em, $usuario);
            $this->addFlash($res['alert'], $res['message']);
            return $this->redirectToRoute('techgym_pt_frontend_alumnos_inac', array('id' => $usuario->getId()));
        }
    }

    private function active2User($active, $em, $usuario) {
        if ($active == false) {
            $usuario->setIsActive(true);
            $em->persist($usuario);

            $em->flush();
            $message = $this->get('translator')->trans('El alumno está activado nuevamente.');
            $removed = 1;
            $alert = 'mensaje';
        } elseif ($active == true) {
            $message = $this->get('session')->getFlashBag()->add('notice', 'No puedes activar un alumno Activo!');
            $removed = 0;
            $alert = 'error';
        }
        return array('removed' => $removed, 'message' => $message, 'alert' => $alert);
    }

    private function createEliminarForm($alumno) {

        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('techgym_pt_frontend_alumno_eliminar', array('id' => $alumno->getId())))
                        ->setMethod('DELETE')
                        ->getForm();
    }

    public function actionAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository('TechgymPTFrontendBundle:Alumno')->find($id);
        //$form = $this->createEliminarForm($usuario);


        $form = $this->createCustomForm($usuario->getId(), 'POST', 'techgym_pt_frontend_alumno_updated');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if ($request->isXmlHttpRequest()) {

                $res = $this->activeUser($usuario->getIsActive(), $em, $usuario);

                return new Response(
                        json_encode(array('removed' => $res['removed'], 'message' => $res['message'])), 200, array('Content-Type' => 'application/json')
                );
            }
            $res = $this->activeUser($usuario->getIsActive(), $em, $usuario);
            $this->addFlash($res['alert'], $res['message']);
            return $this->redirectToRoute('techgym_pt_frontend_alumnos_inac', array('id' => $usuario->getId()));
        }
    }

    private function activeUser($active, $em, $usuario) {
        if ($active == true) {
            $usuario->setIsActive(false);
            $em->persist($usuario);

            $em->flush();
            $message = $this->get('translator')->trans('El alumno está Desactivado.');
            $removed = 1;
            $alert = 'mensaje';
        } elseif ($active == false) {
            $message = $this->get('session')->getFlashBag()->add('notice', 'No puedes eliminar un alumno Activo!');
            $removed = 0;
            $alert = 'error';
        }
        return array('removed' => $removed, 'message' => $message, 'alert' => $alert);
    }

    public function eliminarAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository('TechgymPTFrontendBundle:Alumno')->find($id);
        //$form = $this->createEliminarForm($usuario);


        $form = $this->createCustomForm($usuario->getId(), 'DELETE', 'techgym_pt_frontend_alumno_eliminar');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if ($request->isXmlHttpRequest()) {

                $res = $this->deleteUser($usuario->getIsActive(), $em, $usuario);

                return new Response(
                        json_encode(array('removed' => $res['removed'], 'message' => $res['message'])), 200, array('Content-Type' => 'application/json')
                );
            }
            $res = $this->deleteUser($usuario->getIsActive(), $em, $usuario);
            $this->addFlash($res['alert'], $res['message']);
            return $this->redirectToRoute('techgym_pt_frontend_alumnos_inac', array('id' => $usuario->getId()));
        }
    }

    private function deleteUser($active, $em, $usuario) {
        if ($active == false) {
            $em->remove($usuario);
            $em->flush();

            $message = $this->get('translator')->trans('The user has been deleted.');
            $removed = 1;
            $alert = 'mensaje';
        } elseif ($active == true) {
            $message = $this->get('session')->getFlashBag()->add('notice', 'No puedes eliminar un alumno Activo!');
            $removed = 0;
            $alert = 'error';
        }
        return array('removed' => $removed, 'message' => $message, 'alert' => $alert);
    }

    private function createCustomForm($id, $method, $route) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl($route, array('id' => $id)))
                        ->setMethod($method)
                        ->getForm();
    }

    public function VerAction(Request $request) {

        $session = $this->get('session');
        //$id=$request->get("id");
        //$alumno=$request->query->get('id');
        $em = $this->getDoctrine()->getEntityManager();
        $alumno = $em->getRepository('TechgymPTFrontendBundle:Alumno')->find($request->get('id'));
        //$alumno4 = $em->getRepository('TechgymPTFrontendBundle:Alumno')->findOneByUsuario($request->get('id'));
        $alumno2 = $em->getRepository('TechgymPTFrontendBundle:Evaluacion')->findByAlumno($request->get('id'), array('id' => 'DESC'));
        
        $alumno3 = $em->getRepository('TechgymPTFrontendBundle:Evaluacion')->findOneByAlumno($request->get('id'), array('id' => 'DESC'));
        //$pt = $em->getRepository('TechgymPTFrontendBundle:PtUsuario')->findall();   
//$alumno3 = $em->getRepository('TechgymPTFrontendBundle:Evaluacion')->findBye();
        
       /* $b = $alumno2->getPeso();
        var_dump($b);exit;*/
                
        if (!$alumno) {
            $this->get('session')->getFlashBag()->add('notice', 'Este Alumno No Existe!');
            return $this->redirectToRoute('techgym_pt_frontend_alumnos');
        }
        $myvar = $this->get('security.context')->getToken()->getUser();
        
        $a = $alumno->getUsuario()->getId();
       // $b = $this->get('session');
        $c = $session->get('id');
        //$d = $pt->get('id');
       // print_r($a);exit;
        if($c != $a){
            $this->get('session')->getFlashBag()->add('notice', 'Este Alumno No Existe!');
            return $this->redirectToRoute('techgym_pt_frontend_alumnos');
            
           // throw $this->createNotFoundException('No existe este alumno2');
        }
        $deleteForm = $this->createCustomForm($alumno->getId(), 'DELETE', 'techgym_pt_frontend_alumno_eliminar');

        return $this->render('TechgymPTFrontendBundle:Alumnos:ver.html.twig', array('alumno' => $alumno, 'alumnoe' => $alumno2, 'alumno3' => $alumno3, 'eliminar_form' => $deleteForm->createView()));
    }

    public function AgregaAlumnoAction(Request $request) {

        $request = $this->getRequest();
        $session = $request->getSession();
        $myvar = $this->get('security.context')->getToken()->getUser();


        $usuario = new Alumno();

        $form = $this->createForm(new RegistroAlumnoType(), $usuario);

        if ($request->getMethod() == "POST") {
            $form->handleRequest($request);
            if ($form->isValid()) {

                $usuario2 = $this->get('security.context')->getToken()->getUser();
                //$em = $this->getDoctrine()->getRepository('TechgymPTFrontendBundle:PtUsuario');
                $em = $this->getDoctrine()->getManager();


                $serviceRegistro = $this->get('techgym_pt_frontend.registro');
                $serviceRegistro->registraalum($usuario, $form->get('password')->getData());

                $session->set("id", $usuario2->getId());

                //obtengo la id del usuario logueado para relacionarlo con el alumno
                $usi = $session->get("id");
                // echo $usi;
                //die("hola");
                // exit;

                $idpt = $this->getDoctrine()
                        ->getRepository('TechgymPTFrontendBundle:PtUsuario')
                        ->find($usi)
                ;
                /* Agregar Imagen al Alumno */
                $file = $usuario->getImagenAlumno();

                if (!empty($file)) {

                    $filename = $this->get('techgym_pt_frontend.update')->upload($file);

                    $usuario->setImagenAlumno($filename);
                } else {
                    $fileName = "user.jpg";
                    // print_r($fileName);exit;
                    $usuario->setImagenAlumno($fileName);
                }

                $this->get('session')->getFlashBag()->add('mensaje', 'Se ha agregado un nuevo Alumno!');
                /* insercion de datos */
                $usuario->setUsuario($idpt);
                $em->persist($usuario);

                $em->flush();
                return $this->redirectToRoute('techgym_pt_frontend_alumnos');
                /* return $this->render('TechgymPTFrontendBundle:Alumnos:index.html.twig', array('usuario' => $usuario)
                  ); */
            }
        }

        return $this->render('TechgymPTFrontendBundle:Alumnos:agregaalumno.html.twig', array('form' => $form->createView())
        );
    }

    Public function editarAction($id) {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('TechgymPTFrontendBundle:Alumno')->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Usuario no Encontrado');
        }
        $form = $this->createEditForm($user);
        return $this->render('TechgymPTFrontendBundle:Alumnos:editar.html.twig', array('user' => $user, 'form' => $form->createView()));
    }

    Public function editarrutiAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('TechgymPTFrontendBundle:Alumno')->find($id);

        $alumno2 = $em->getRepository('TechgymPTFrontendBundle:Rutina')->findAll($request->get('id'));
        $rutina = $em->getRepository('TechgymPTFrontendBundle:Rutina')->findAll($request->get('id'));

        if (!$user) {
            throw $this->createNotFoundException('Usuario no Encontrado');
        }
        $form = $this->createEditForm($user);
        return $this->render('TechgymPTFrontendBundle:Alumnos:editarruti.html.twig', array('alumno3' => $alumno2, 'rutina' => $rutina, 'user' => $user, 'form' => $form->createView()));
    }

    private function recoverImagen($id) {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT u.imagenalumno from TechgymPTFrontendBundle:Alumno u where u.id = :id')
                ->setParameter('id', $id);
        $imagenactual = $query->getResult();
        return $imagenactual;
    }

    private function recoverPass($id) {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT u.password from TechgymPTFrontendBundle:Alumno u where u.id = :id')
                ->setParameter('id', $id);
        $passactual = $query->getResult();
        return $passactual;
    }

    Public function updateAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('TechgymPTFrontendBundle:Alumno')->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Usuario no Encontrado');
        }

        $form = $this->createEditForm($user);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $pass2 = $user->getPassword();
            if (!empty($pass2)) {

                $serviceUpdate = $this->get('techgym_pt_frontend.update');
                $serviceUpdate->updatea($user, $form->get('password')->getData());
            } else {
                $passactual = $this->recoverPass($id);
                $user->setPassword($passactual[0]['password']);
            }
            /* Utilizo el servicio para codificar el password */


            $file = $user->getImagenAlumno();

            if (null !== $file) {
                $filename = $this->get('techgym_pt_frontend.update')->upload($file);
                $user->setImagenAlumno($filename);
            } else {
                $imagenactual = $this->recoverImagen($id);
                $user->setImagenAlumno($imagenactual[0]['imagenalumno']);
            }


            $em->merge($user);
            $em->flush();

            $this->get('session')->getFlashBag()->add('notice', 'Tus cambios han sido Realizados!');


            return $this->redirectToRoute('techgym_pt_frontend_alumno_editar', array('id' => $user->getId()));
        }
        //die("no entro al if");exit;
        return $this->render('TechgymPTFrontendBundle:Alumnos:editar.html.twig', array('user' => $user, 'form' => $form->createView()));
    }

    Private function createEditForm(Alumno $entity) {
        $form = $this->createForm(New RegistroAlumnoType(), $entity, array('action' => $this->generateUrl
                    ('techgym_pt_frontend_alumno_update', array('id' => $entity->getId())), 'method' => 'PUT'));
        return $form;
    }

    Private function createEditForm2(Alumno $entity) {
        $form = $this->createForm(New RegistroAlumnoType(), $entity, array('action' => $this->generateUrl
                    ('techgym_pt_frontend_ver_rutina', array('id' => $entity->getId())), 'method' => 'PUT'));
        return $form;
    }

}
