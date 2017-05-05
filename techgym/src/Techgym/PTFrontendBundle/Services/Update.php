<?php

namespace Techgym\PTFrontendBundle\Services;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class Update {

    private $targetDir;

    public function __construct($targetDir, $doctrine, $mailer, $templating, $factory_encoder) {
        $this->targetDir = $targetDir;
        $this->doctrine = $doctrine;
        $this->mailer = $mailer;
        $this->templating = $templating;
        $this->factory_encoder = $factory_encoder;
    }

    public function updatea($usuario, $password) {
        //$usuario->setIsActive(true);
        //$usuario->setTokenRegistro(substr(md5(uniqid(rand(), true)), 0, 32));
        $em = $this->doctrine->getEntityManager();

        /* $grupo = $em->getRepository('TechgymPTFrontendBundle:Grupo')
          ->findOneByRol('ROLE_ALUMNO'); */

        //$usuario->addGrupo($grupo);
        /*  $file = $usuario->getImagenAlumno();
          $fileName = md5(uniqid()) . '.' . $file->getExtension();
          $file->move(
          $this->getParameter('imagenes_directorio'), $fileName
          );
          $usuario->setImagenAlumno($fileName);
         */


        $encoder = $this->factory_encoder->getEncoder($usuario);

        $salt = substr(md5(uniqid(rand(), true)), 0, 10);
        $usuario->setSalt($salt);
        $password = $encoder->encodePassword($password, $usuario->getSalt());

        $usuario->setPassword($password);



    }

    public function upload(UploadedFile $file = null) {
       

          $fileName = md5(uniqid()) . '.' . $file->guessExtension(); 
           $file->move($this->targetDir, $fileName);

        return $fileName;
    
        
       
    }

}
    