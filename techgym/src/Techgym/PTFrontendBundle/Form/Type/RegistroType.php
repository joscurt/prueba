<?php

namespace Techgym\PTFrontendBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RegistroType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('nombre', 'text', array('attr' => array(
        'placeholder' => 'Nombre',
        'class' => 'form-control') ))
        ->add('apellidos', 'text', array('attr' => array(
        'placeholder' => 'Apellidos',
        'class' => 'form-control') ))
        ->add('username', 'text', array('attr' => array(
        'placeholder' => 'Username',
        'class' => 'form-control') ))
        ->add('email', 'text', array('attr' => array(
        'placeholder' => 'Email',
        'class' => 'form-control') ))
        ->add('sexo', ChoiceType::class, array('placeholder' => 'Selecciona tu Sexo',
        'choices' => array('Femenino' => 'Femenino','Masculino' => 'Masculino')))
        ->add('imagenpt', FileType::class, array('data_class' => null))
                ->add('password', 'password', array('attr' => array(
                        'placeholder' => 'Contraseña',
                        'class' => 'form-control')))
                ->add('password_again', 'password', array('attr' => array(
                        'placeholder' => 'Repite la Contraseña',
                        'class' => 'form-control')));
    }

    public function getName() {
        return 'registro';
    }

    public function getDefaultOptions(array $options) {
        return array(
            'data_class' => 'Techgym\PTFrontendBundle\Entity\PtUsuario',
        );
    }

}
