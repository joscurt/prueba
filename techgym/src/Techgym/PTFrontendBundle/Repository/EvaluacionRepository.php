<?php

namespace Techgym\PTFrontendBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * EvaluacionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EvaluacionRepository extends EntityRepository
{
    public function findByUsuarioOrderedById($alumno)
      {
         $query = $this->getEntityManager()->createQuery(
                         "SELECT n FROM TechgymPTFrontendBundle:Evaluacion n
                          JOIN n.alumno u
                          WHERE  u.username=:username And u.isActive = 1 ORDER BY n.id DESC")
                 ->setParameters(array('username' => $usuario->getUsername()));

         return $query->getResult();
     }
      public function findBye($usuario)
      {
         $query = $this->getEntityManager()->createQuery(
                         "SELECT n FROM TechgymPTFrontendBundle:Evaluacion n
                          JOIN n.alumno u
                          WHERE  u.username=:username ORDER BY n.id ASC LIMIT 1")
                 ->setParameters(array('username' => $usuario->getUsername()));

         return $query->getSingleResult();
     }
     public function findByMonth($alumno){
         
         $query = $this-getEntity-manager()->createQuery(
         "SELECT n FROM TechgymPTFrontendBundle:Alumno n"
         . "JOIN n.usuario u"
                 . "WHERE u.username=:u.username And u.isActive = 1 and fecha_creacion = MONTH(1)")
                 ->setParameters(array('username' => $usuario->getUsername()));
         return $query->getResult();
         
     }
}