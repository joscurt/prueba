<?php

namespace Techgym\PTFrontendBundle\Services;

class Registro {

    public function __construct($doctrine, $mailer, $templating,
     $factory_encoder) {
       $this->doctrine = $doctrine;
       $this->mailer = $mailer;
       $this->templating = $templating;
       $this->factory_encoder = $factory_encoder;
   }

   public function registra($usuario, $password) {
     $usuario->setIsActive(false);
     $usuario->setTokenRegistro(substr(md5(uniqid(rand(), true)), 0, 32));

     $em = $this->doctrine->getEntityManager();

     $grupo = $em->getRepository('TechgymPTFrontendBundle:Grupo')
            ->findOneByRol('ROLE_PROFESOR');

     $usuario->addGrupo($grupo);

     $encoder = $this->factory_encoder->getEncoder($usuario);

     $salt = substr(md5(uniqid(rand(), true)), 0, 10);
     $usuario->setSalt($salt);
     $password = $encoder->encodePassword($password, $usuario->getSalt());

     $usuario->setPassword($password);



     $message = \Swift_Message::newInstance()
             ->setSubject('Techgym')
             ->setFrom('noreplay@mentornotas.com')
             ->setTo($usuario->getEmail())
             ->setBody($this
               ->templating
               ->render(
                 'TechgymPTFrontendBundle:Login:email_registro.html.twig',
                 array('usuario' => $usuario)
                 )
               )
     ;
     $this->mailer->send($message);
   }
    public function registraalum($usuario, $password) {
     $usuario->setIsActive(true);
     $usuario->setTokenRegistro(substr(md5(uniqid(rand(), true)), 0, 32));

     $em = $this->doctrine->getEntityManager();

     $grupo = $em->getRepository('TechgymPTFrontendBundle:Grupo')
            ->findOneByRol('ROLE_ALUMNO');

     $usuario->addGrupo($grupo);

     $encoder = $this->factory_encoder->getEncoder($usuario);

     $salt = substr(md5(uniqid(rand(), true)), 0, 10);
     $usuario->setSalt($salt);
     $password = $encoder->encodePassword($password, $usuario->getSalt());

     $usuario->setPassword($password);

   }
}