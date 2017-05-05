<?php

namespace Techgym\PTFrontendBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class RegistroEvaluacionType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('edad', 'text', array('attr' => array(
                       // 'placeholder' => 'Edad(años)',
                        'readonly' => true,
                        'class' => 'form-control')))
                ->add('estatura', 'text', array('attr' => array(
                        'placeholder' => 'Estatura(cm)',
                        'class' => 'form-control')))
                ->add('peso', 'text', array('attr' => array(
                        'placeholder' => 'Peso(kg)',
                        'class' => 'form-control')))
               /* ->add('p_grasa', 'text', array('attr' => array(
                        'placeholder' => 'Email',
                        'class' => 'form-control')))*/
                ->add('pliegue_triceps', 'text', array('attr' => array(
                        'placeholder' => 'Pliegue Triceps',
                        'class' => 'form-control')))
                ->add('pliegue_biceps', 'text', array('attr' => array(
                        'placeholder' => 'Pliegue Bicep',
                        'class' => 'form-control')))
                ->add('pliegue_subescapular', 'text', array('attr' => array(
                        'placeholder' => 'Pliegue Subescapular',
                        'class' => 'form-control')))
                ->add('pliegue_suprailiaco', 'text', array('attr' => array(
                        'placeholder' => 'Pliegue Suprailiaco',
                        'class' => 'form-control')))
        ->add('imageneva', FileType::class, array('data_class'=> null,
                    'attr' => ['class' => 'form-control']));
                /*->add('peso_grasa', 'text', array('attr' => array(
                        'placeholder' => 'Peso Grasa',
                        'class' => 'form-control')))
                ->add('peso_magro', 'text', array('attr' => array(
                        'placeholder' => 'Contraseña',
                        'class' => 'form-control')))
                ->add('imc', 'text', array('attr' => array(
                        'placeholder' => 'Contraseña',
                        'class' => 'form-control')));*/
           
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

    }

    public function getName() {
        return 'registroevaluacion';
    }

    public function getDefaultOptions(array $options) {
        return array(
            'data_class' => 'Techgym\PTFrontendBundle\Entity\Evaluacion',
        );
    }

}
