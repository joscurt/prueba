<?php

namespace Techgym\PTFrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Techgym\PTFrontendBundle\Form\Type\AgendaType;
use Symfony\Component\HttpFoundation\Request;
use Techgym\PTFrontendBundle\Entity\Agenda;

class AgendaController extends Controller {

    public function agendaAction(Request $request) {
        $request = $this->getRequest();
        $session = $request->getSession();
        $agenda = new Agenda();
        $em = $this->getDoctrine()->getManager();

        $myVar = $this->get('security.context')->getToken()->getUser();
        //$user = $em->getRepository('TechgymPTFrontendBundle:Agenda')->find();
        $form = $this->createForm(new AgendaType($myVar), $agenda);

        if ($request->getMethod() == "POST") {
            $form->handleRequest($request);
            if ($form->isValid()) {


                $em->persist($agenda);
                $em->flush();
                $this->get('session')->getFlashBag()->add('mensaje', 'Tus cambios han sido Realizados!');

                 return $this->redirectToRoute('techgym_pt_frontend_homepage'
                );
                
                
               /* return $this->render('TechgymPTFrontendBundle:Agenda:registro.html.twig', array('form' => $form->createView())
                );*/
            }
        }
        return $this->render('TechgymPTFrontendBundle:Agenda:registro.html.twig', array('form' => $form->createView())
        );
    }

    public function agendaVerAction(Request $request) {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $agenda = $em->getRepository('TechgymPTFrontendBundle:Agenda')->findBy(array(),array('fecha' => 'ASC'));

        return $this->render('TechgymPTFrontendBundle:Agenda:ver.html.twig', array('agenda' => $agenda));
    }
     public function agendaCalendarioAction(Request $request) {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $agenda = $em->getRepository('TechgymPTFrontendBundle:Agenda')->findBy(array(),array('fecha' => 'ASC'));

        return $this->render('TechgymPTFrontendBundle:Agenda:calendario.html.twig', array('agenda' => $agenda));
    }

}
