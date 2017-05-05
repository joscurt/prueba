<?php

namespace Techgym\PTFrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Techgym\PTFrontendBundle\Form\Type\ProductoType;
use Symfony\Component\HttpFoundation\Request;
use Techgym\PTFrontendBundle\Entity\Producto;

class ProductoController extends Controller {

    public function productoAction(Request $request) {
        $request = $this->getRequest();
        $session = $request->getSession();
        $producto = new Producto();
        $em = $this->getDoctrine()->getManager();

        $myVar = $this->get('security.context')->getToken()->getUser();
        //$user = $em->getRepository('TechgymPTFrontendBundle:Agenda')->find();
        //$form = $this->createForm(new AgendaType($myVar), $agenda);

        //$usuario = new PtUsuario();
        //$em = $this->get('doctrine')->getEntityManager();
        $form = $this->createForm(ProductoType::class, $producto);
        
        
        
        
        if ($request->getMethod() == "POST") {
            $form->handleRequest($request);
            if ($form->isValid()) {


                $em->persist($producto);
                $em->flush();
                $this->get('session')->getFlashBag()->add('mensaje', 'Se ha agregado un nuevo producto!');

                 return $this->redirectToRoute('techgym_producto_ver'
                );
                
                
               /* return $this->render('TechgymPTFrontendBundle:Agenda:registro.html.twig', array('form' => $form->createView())
                );*/
            }
        }
        return $this->render('TechgymPTFrontendBundle:Producto:registraproducto.html.twig', array('form' => $form->createView())
        );
    }

    public function productoVerAction(Request $request) {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $producto = $em->getRepository('TechgymPTFrontendBundle:Producto')->findAll();

        return $this->render('TechgymPTFrontendBundle:Producto:ver.html.twig', array('producto' => $producto));
    }
    /* public function agendaCalendarioAction(Request $request) {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $agenda = $em->getRepository('TechgymPTFrontendBundle:Agenda')->findBy(array(),array('fecha' => 'ASC'));

        return $this->render('TechgymPTFrontendBundle:Agenda:calendario.html.twig', array('agenda' => $agenda));
    }*/

}

