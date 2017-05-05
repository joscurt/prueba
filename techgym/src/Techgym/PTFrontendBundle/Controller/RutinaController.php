<?php

namespace Techgym\PTFrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Techgym\PTFrontendBundle\Entity\PtUsuario;
use Techgym\PTFrontendBundle\Entity\Alumno;
use Techgym\PTFrontendBundle\Entity\Rutina;
use Techgym\PTFrontendBundle\Form\Type\RutinaType;

class RutinaController extends Controller {

    public function indexAction($id, Request $request) {

        $em = $this->getDoctrine()->getEntityManager();

        //$alumno = $em->getRepository('TechgymPTFrontendBundle:Evaluacion')->findByAlumno($request->get('id'));
//$usuario = $this->get('security.context')->getToken()->getUser();
        $alumno2 = $em->getRepository('TechgymPTFrontendBundle:Alumno')->findAll($request->get('id'));
        $alumno = $em->getRepository('TechgymPTFrontendBundle:Alumno')->find($request->get('id'));
        $rutina = $em->getRepository('TechgymPTFrontendBundle:Rutina')->findByRutin($request->get('id'));
        $ejercicio = $em->getRepository('TechgymPTFrontendBundle:Ejercicio')->findByEjeRutin($request->get('id'));
        
        
       //$alumno3 = $ejercicio->getNombre();
        //print_r($alumno3 );exit;

        return $this->render('TechgymPTFrontendBundle:Rutina:index.html.twig', array('rutinas' => $rutina, 'alumnos' => $alumno, 'alumno3' => $alumno2, 'ejercicios' => $ejercicio)
        );
    }

    public function automaticaAction($id, Request $request) {

        $em = $this->getDoctrine()->getEntityManager();

        $alumno = $em->getRepository('TechgymPTFrontendBundle:Evaluacion')->findOneByAlumno($request->get('id'));
//$usuario = $this->get('security.context')->getToken()->getUser();
        $alumno2 = $em->getRepository('TechgymPTFrontendBundle:Alumno')->find($request->get('id'));
        $rutina = $em->getRepository('TechgymPTFrontendBundle:Ejercicio')->findByRutinEje($request->get('id'));
        //$alumno3 = $alumno2->getNombre();
        //print_r($alumno2);exit;

        return $this->render('TechgymPTFrontendBundle:Rutina:rutinaauto.html.twig', array('alumnos' => $alumno, 'alumno3' => $rutina)
        );
    }

    public function imagenesAction($id, Request $request) {

        $em = $this->getDoctrine()->getEntityManager();

        // $alumno = $em->getRepository('TechgymPTFrontendBundle:Evaluacion')->findByAlumno($request->get('id'));
        $alumno = $em->getRepository('TechgymPTFrontendBundle:Alumno')->find($request->get('id'));
        $alumno2 = $em->getRepository('TechgymPTFrontendBundle:Evaluacion')->findByAlumno($request->get('id'), array('id' => 'DESC'));
        $alumno3 = $em->getRepository('TechgymPTFrontendBundle:Evaluacion')->findOneByAlumno($request->get('id'), array('id' => 'DESC'));



//$usuario = $this->get('security.context')->getToken()->getUser();
        //$alumno2 = $em->getRepository('TechgymPTFrontendBundle:Alumno')->findById($request->get('id'));
        //$alumno3 = $alumno2->getNombre();
        //print_r($alumno2);exit;

        return $this->render('TechgymPTFrontendBundle:Rutina:galeria.html.twig', array('alumno' => $alumno, 'alumnoe' => $alumno2, 'alumno3' => $alumno3));
    }

    public function verAction($id, Request $request) {

        $em = $this->getDoctrine()->getEntityManager();

        $alumno = $em->getRepository('TechgymPTFrontendBundle:Evaluacion')->findOneByAlumno($request->get('id'));
//$usuario = $this->get('security.context')->getToken()->getUser();
        $alumno2 = $em->getRepository('TechgymPTFrontendBundle:Rutina')->findOneById($request->get('id'));
        $rutina = $em->getRepository('TechgymPTFrontendBundle:Ejercicio')->findByRutinEje($request->get('id'));
        //$alumno3 = $alumno2->getNombre();
        //print_r($alumno2);exit;

        return $this->render('TechgymPTFrontendBundle:Rutina:verrutina.html.twig', array('alumnos' => $alumno, 'alumno3' => $alumno2, 'rutina' => $rutina)
        );
    }

    public function addAction(Request $request) {
        $myVar = $this->get('security.context')->getToken()->getUser();
        $rutina = new Rutina();
        $em = $this->getDoctrine()->getEntityManager();
        //$myVar = $em->getRepository('TechgymPTFrontendBundle:Alumno')->findOneByAlumno($request->get('id'));
        //$rutina->set    


        $form = $this->createForm(new RutinaType($myVar), $rutina, array(
            'action' => $this->generateUrl('techgym_pt_frontend_ver_rutina_add'),
            'method' => 'POST'
        ));
       $form->handleRequest($request);
       if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            //$grupo = $em->getRepository('TechgymPTFrontendBundle:Alumno')
            //->findOneById();

            //$usuario->addRutial($grupo);
            
            $em->persist($rutina);
            $em->flush();

            $this->addFlash('mensaje', 'La Rutina ha sido Creada');
            return $this->redirectToRoute('techgym_pt_frontend_ver_rutina_add');
        } 
       
       
        //$form->handleRequest($request);    
        //$form = $this->createCreateForm($rutina);

        return $this->render('TechgymPTFrontendBundle:Rutina:agregar.html.twig', array('form' => $form->createView()));
    }

   /* public function createAction(Request $request) {
        $rutina = new Rutina();
        $myVar = $this->get('security.context')->getToken()->getUser();
        $form = $this->createForm(new RutinaType($myVar), $rutina, array(
            'action' => $this->generateUrl('techgym_pt_frontend_ver_rutina_add'),
            'method' => 'POST'
        ));
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rutina);
            $em->flush();

            $this->addFlash('mensaje', 'La Rutina ha sido Creada');
            return $this->redirectToRoute('techgym_pt_frontend_ver_rutina');
        }
        return $this - redirect('TechgymPTFrontendBundle:Rutina:agregar.html.twig', array('form' => $form->createView()));
    }*/

    /* private function createCreateForm(Rutina $entity) {

      return $form;
      } */
}
