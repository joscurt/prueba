<?php

namespace Techgym\PTFrontendBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTime;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityRepository;

class AgendaType extends AbstractType
{
    private $myVar;

    public function __construct($myVar) {
        $this->myVar = $myVar;
    }
    
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $myModi = $this->myVar;
        
        $builder
            ->add('fecha', 'datetime', array('widget' => "single_text", 'html5'   => false))
            ->add('alumno', 'entity', array(
                'class' =>'TechgymPTFrontendBundle:Alumno',
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
            ))
            ->add('descripcion')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Techgym\PTFrontendBundle\Entity\Agenda'
        ));
    }
}
