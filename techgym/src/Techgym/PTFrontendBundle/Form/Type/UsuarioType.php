<?php
 
 namespace Techgym\PTFrontendBundle\Form\Type;

 use Symfony\Component\Form\AbstractType;
 use Symfony\Component\Form\FormBuilder;
 use Symfony\Component\Form\FormBuilderInterface;
 use Symfony\Component\Form\Extension\Core\Type\SubmitType;

 class UsuarioType extends AbstractType
 {

     public function buildForm(FormBuilderInterface $builder, array $options)
     {
         $builder->add('nombre', 'text')
                 ->add('apellidos', 'text')
                 ->add('email', 'email')
                 ->add('isActive', 'checkbox')
                 ->add('username', 'text')
                 ->add('imagenpt', FileType::class, array('data_class'=> null))
                 ->add('password', 'password');
     }

     public function getName()
     {
         return 'usuario';
     }

     // Esto no es siempre necesario, pero para construir formularios embebidos
     // es imprescindibles, así que no cuesta nada acostumbrarse a ponerlo
     public function getDefaultOptions(array $options)
     {
         return array(
             'data_class' => 'Techgym\PTFrontendBundle\Entity\PtUsuario',
         );
     }
 }