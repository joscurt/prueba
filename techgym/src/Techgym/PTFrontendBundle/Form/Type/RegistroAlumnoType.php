<?php

namespace Techgym\PTFrontendBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityRepository;


class RegistroAlumnoType extends AbstractType {
    
    /*private $myVar;

    public function __construct($myVar) {
        $this->myVar = $myVar;
    }*/
    

    public function buildForm(FormBuilderInterface $builder, array $options) {
        //$myModi = $this->myVar;
        
        $builder->add('nombre', 'text', array('attr' => array(
                        'placeholder' => 'Nombre',
                        'class' => 'form-control')))
                ->add('apellidos', 'text', array('attr' => array(
                        'placeholder' => 'Apellidos',
                        'class' => 'form-control')))
                ->add('username', 'text', array('attr' => array(
                        'placeholder' => 'Username',
                        'class' => 'form-control')))
                ->add('email', 'text', array('attr' => array(
                        'placeholder' => 'Email',
                        'class' => 'form-control')))
                ->add('celular', 'text', array('attr' => array(
                        'placeholder' => 'Celular',
                        'class' => 'form-control')))
                ->add('gimnasio', 'text', array('attr' => array(
                        'placeholder' => 'Gimnasio',
                        'class' => 'form-control')))
                ->add('password', 'password', array('attr' => array(
                        'placeholder' => 'Contraseña',
                        'class' => 'form-control')))
                ->add('fechanac', BirthdayType::class, array(
    'placeholder' => array(
        'year' => 'Año', 'month' => 'Mes', 'day' => 'Día',
    )))
                        
                
                
                ->add('sexo', ChoiceType::class, array('placeholder' => 'Selecciona tu Sexo',
        'choices' => array('Femenino' => 'Femenino','Masculino' => 'Masculino')))
                ->add('imagenalumno', FileType::class, array('data_class'=> null,
                    'attr' => ['class' => 'form-control']))
                
                
                ->add('alumnruti', 'entity', array(
                    'class' => 'TechgymPTFrontendBundle:Rutina',
                    /*'query_builder' =>
                    function (EntityRepository $er) use ($myModi) {
                        return $er->createQueryBuilder('u')
                                ->innerjoin('u.usuario', 'n')
                                ->where('n.id = :myModi')
                                ->andwhere('u.isActive = :a')
                                ->setParameter('myModi', '1')
                                ->setParameter('a', '1');
                    },*/
                    'choice_label' => 'getNombre',
                            'multiple' => 'true',
                           // 'expanded' => 'true',
                    'attr' => ['class' => 'form-control2'],
                    
                    'choice_attr' => array(
        'Rutina 1-1' => array('class' => 'greyed-out'),
    ),
                            
                ))
                
                
                
                /*->add('lunes', DateTimeType::class, array(
                    // render as a single text box
                    'widget' => 'single_text',
                    // do not render as type="date", to avoid HTML5 date pickers
                    'html5' => false,
                    // add a class that can be selected in JavaScript
                    'attr' => ['class' => 'js-datepicker form-control'],
                ))
               /* ->add('martes', 'datetime', array('attr' => array(
                        'placeholder' => 'Martes',
                        'class' => 'form-control')))
                ->add('miercoles', 'datetime', array('attr' => array(
                        'placeholder' => 'Miercoles',
                        'class' => 'form-control')))
                ->add('jueves', 'datetime', array('attr' => array(
                        'placeholder' => 'Jueves',
                        'class' => 'form-control')))
                ->add('viernes', 'datetime', array('attr' => array(
                        'placeholder' => 'Viernes',
                        'class' => 'form-control')))
                ->add('sabado', 'datetime', array('attr' => array(
                        'placeholder' => 'Sabado',
                        'class' => 'form-control')))
                ->add('domingo', 'datetime', array('attr' => array(
                        'placeholder' => 'Domingo',
                        'class' => 'form-control')))*/
                ->add('password_again', 'password', array('attr' => array(
                        'placeholder' => 'Repite la Contraseña',
                        'class' => 'form-control')));
    }

    public function getName() {
        return 'registroalumno';
    }

    public function getDefaultOptions(array $options) {
        return array(
            'data_class' => 'Techgym\PTFrontendBundle\Entity\Alumno',
        );
    }

}
