<?php

namespace Techgym\PTFrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
public function indexAction() {
        
          $request = $this->getRequest();

        $em = $this->get('doctrine')->getEntityManager();

        $usuario = $em->getRepository('TechgymPTFrontendBundle:PtUsuario')
                ->findAll();
        

        return $this->render('TechgymPTFrontendBundle:Default:index.html.twig', array('usuario' => $usuario)
        );
    }
}
