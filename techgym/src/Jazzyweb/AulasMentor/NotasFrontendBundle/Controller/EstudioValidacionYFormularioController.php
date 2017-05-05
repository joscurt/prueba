<?php

 namespace Jazzyweb\AulasMentor\NotasFrontendBundle\Controller;

 use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 use Jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Usuario;
 use Jazzyweb\AulasMentor\NotasFrontendBundle\Form\Type\UsuarioType;

 class EstudioValidacionYFormularioController extends Controller
 {
     
     public function formUsuarioAction()
     {
         $request = $this->getRequest();
         $usuario = new Usuario();
         
         $form = $this->createForm(new UsuarioType(), $usuario);
         
        if($request->getMethod() == 'POST')
         {
             $form->bindRequest($request);
             if ($form->isValid())
             {
                 // Se procesa el formulario

                 $this
                     ->get('session')
                     ->setFlash('mensaje','El formulario era válido');

                 return
                     $this
                      ->redirect($this->generateUrl('jamn_EVF_form_usuario'));
             }
         }

         return $this->render(
          'JAMNotasFrontendBundle:EstudioValidacionYFormulario:formUsuario.html.twig',
           array('form' => $form->createView())
         );
     }

 }