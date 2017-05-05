<?php

namespace Techgym\PTFrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Techgym\PTFrontendBundle\Entity\PtUsuario;
use Techgym\PTFrontendBundle\Entity\Alumno;
use Techgym\PTFrontendBundle\Entity\Evaluacion;
use Techgym\PTFrontendBundle\Form\Type\RegistroEvaluacionType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class EvaluacionController extends Controller {

    public function indexAction($id, Request $request) {


        $em = $this->getDoctrine()->getEntityManager();

        $alumno = $em->getRepository('TechgymPTFrontendBundle:Evaluacion')->findByAlumno($request->get('id'), array('id' => 'DESC'));
//$usuario = $this->get('security.context')->getToken()->getUser();
        $alumno2 = $em->getRepository('TechgymPTFrontendBundle:Alumno')->findById($request->get('id'));

        //$alumno3 = $alumno2->getNombre();
        //print_r($alumno2);exit;

        return $this->render('TechgymPTFrontendBundle:Evaluacion:index.html.twig', array('alumno' => $alumno, 'alumno3' => $alumno2)
        );
    }

    
        public function index2Action(Request $request) {

        $usuario = $this->get('security.context')->getToken()->getUser();        
        $em = $this->getDoctrine()->getEntityManager();

        $alumno = $em->getRepository('TechgymPTFrontendBundle:Evaluacion')->findByPtusuario($usuario, array('id' => 'DESC'));
        //$usuario = $this->get('security.context')->getToken()->getUser();
        $alumno2 = $em->getRepository('TechgymPTFrontendBundle:Alumno')->findById($request->get('id'));

        //$alumno3 = $alumno2->getNombre();
        //print_r($alumno2);exit;

        return $this->render('TechgymPTFrontendBundle:Evaluacion:index2.html.twig', array('alumno' => $alumno, 'alumno3' => $alumno2)
        );
    }
    
    
    public function agregaEvaluacionAction($id, Request $request) {

        $request = $this->getRequest();
        $session = $request->getSession();
        $evaluacion = new Evaluacion();
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('TechgymPTFrontendBundle:Alumno')->find($id);
        $form = $this->createForm(new RegistroEvaluacionType(), $evaluacion);

        if ($request->getMethod() == "POST") {
            $form->handleRequest($request);
            if ($form->isValid()) {

                $usuario = $this->get('security.context')->getToken()->getUser();

                $file = $evaluacion->getImagenEva();


                if (!empty($file)) {

                    $filename = $this->get('techgym_pt_frontend.update')->upload($file);

                    $evaluacion->setImagenEva($filename);
                } else {
                    $a = $user->getSexo();
                    //print_r($a);exit;

                    if ($a == "Masculino") {
                        $fileName = "Hombre.jpg";
                        // print_r($fileName);exit;
                        $evaluacion->setImagenEva($fileName);
                    }
                    if ($a == "Femenino") {
                        $fileName = "Mujer.jpg";
                        // print_r($fileName);exit;
                        $evaluacion->setImagenEva($fileName);
                    }
                }
                $evaluacion->setAlumno($user);
                $evaluacion->setPtusuario($usuario);
                $em->persist($evaluacion);
                $em->flush();
                $this->get('session')->getFlashBag()->add('notice', 'Tu cambios han sido Realizados!');



                return $this->redirectToRoute('techgym_pt_frontend_ver_evaluacion', array('id' => $user->getId())
                );
            }
        }

        return $this->render('TechgymPTFrontendBundle:Evaluacion:agregaevaluacion.html.twig', array('user' => $user, 'form' => $form->createView())
        );
    }

    Public function editarAction($id) {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('TechgymPTFrontendBundle:Alumno')->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Usuario no Encontrado');
        }
        $form = $this->createEditForm($user);
        return $this->render('TechgymPTFrontendBundle:Evaluacion:agregaevaluacion.html.twig', array('user' => $user, 'form' => $form->createView()));
    }

    private function recoverImagen($id) {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT u.imagenalumno from TechgymPTFrontendBundle:Alumno u where u.id = :id')
                ->setParameter('id', $id);
        $imagenactual = $query->getResult();
        return $imagenactual;
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

            /* Utilizo el servicio para codificar el password */
            $serviceUpdate = $this->get('techgym_pt_frontend.update');
            $serviceUpdate->updatea($user, $form->get('password')->getData());

            $file = $user->getImagenAlumno();
            $filename = $this->get('techgym_pt_frontend.update')->upload($file);
            $user->setImagenAlumno($filename);

            $em->flush();

            $this->get('session')->getFlashBag()->add('notice', 'Tu cambios han sido Realizados!');


            return $this->redirectToRoute('techgym_pt_frontend_alumno_editar', array('id' => $user->getId()));
        }

        return $this->render('TechgymPTFrontendBundle:Alumnos:editar.html.twig', array('user' => $user, 'form' => $form->createView()));
    }

    Private function createEditForm(Alumno $entity) {
        $form = $this->createForm(New RegistroAlumnoType(), $entity, array(
            'action' => $this->generateUrl
                    ('techgym_pt_frontend_alumno_update', array('id' => $entity->getId())),
            'method' => 'PUT'));
        return $form;
    }

}
