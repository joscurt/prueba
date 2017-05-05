<?php

namespace Techgym\PTFrontendBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Techgym\PTFrontendBundle\Entity\PtUsuario;
use Techgym\PTFrontendBundle\Entity\Alumno;

class RutinaType extends AbstractType {

    private $myVar;

    public function __construct($myVar) {
        $this->myVar = $myVar;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

        /* $em = $this->get('doctrine')->getEntityManager();
          $qb = $em->getRepository('TechgymPTFrontendBundle:Alumno')->findall();
          print_r($qb);exit; */

        $myModi = $this->myVar;

        $builder
                ->add('nombre')
                ->add('tipo', ChoiceType::class, array('placeholder' => 'Selecciona el tipo de Rutina',
        'choices' => array('Aumento Masa Muscular' => 'Aumento Masa Muscular','Quemar Grasa' => 'Quemar Grasa','Resistencia Muscular' => 'Resistencia Muscular')))
                ->add('dias', ChoiceType::class, array('placeholder' => 'Selecciona los días a la Semana',
        'choices' => array('Dos' => 'Dos','Tres' => 'Tres','Cuatro' => 'Cuatro')))
          ->add('tiempo', ChoiceType::class, array('placeholder' => 'Selecciona el tiempo de Entrenamiento',
        'choices' => array('Mas de 30 min' => 'Mas de 30 min','Más de 1 Hora' => 'Más de 1 Hora')))
         ->add('equipuso', ChoiceType::class, array('placeholder' => 'Selecciona el tiempo de Entrenamiento',
        'choices' => array('Máquinas' => 'Máquinas','Peso Libre' => 'Peso Libre','Maquinas y Peso Libre' => 'Maquinas y Peso Libre')))
                
                ->add('rutial', 'entity', array(
                    'class' => 'TechgymPTFrontendBundle:Alumno',
                    'query_builder' =>
                    function (EntityRepository $er) use ($myModi) {
                        return $er->createQueryBuilder('u')
                                ->innerjoin('u.usuario', 'n')
                                ->where('n.id = :myModi')
                                ->andwhere('u.isActive = :a')
                                ->setParameter('myModi', $myModi)
                                ->setParameter('a', '1');
                    },
                    'choice_label' => 'getNombre',
                            'multiple' => 'true',
                            'expanded' => 'true'
                            
                ))
                ->add('save', 'submit', array('label' => 'Agregar Rutina'))
        ;
    }

    /**
     * @param OptionsResolver $options
     */
    public function getDefaultOptions(array $options) {
        return array(
            'data_class' => 'Techgym\PTFrontendBundle\Entity\Rutina',
        );
    }

    public function getName() {
        return 'rutina';
    }

}
