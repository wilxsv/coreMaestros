<?php

namespace Minsal\SuministroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FosUserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('username', 'text', array('label' => 'Login de usuaria', 'required'  => true, 'attr' => array('class' => 'form-control')))
			->add('email', 'email', array('label' => 'Correo de usuaria', 'required'  => true, 'attr' => array('class' => 'form-control')))
          ->add('password', 'password', array('label' => 'Clave', 'required'  => true, 'attr' => array('class' => 'form-control') ))
          ->add('username', 'text', array('label' => 'Nombre de usuaria', 'required'  => true, 'attr' => array('class' => 'form-control')))
          ->add('fullname', 'text', array('label' => 'Nombre completo de la persona', 'required'  => true, 'attr' => array('class' => 'form-control') ))
          ->add('roles', 'entity',array('label'  => 'Roles :', 'class' => 'MinsalSuministroBundle:CtlRol', 'choice_label' => 'nombreRol',  'required' => false, 'multiple' => false, 'attr' => array('class' => 'form-control')))
          //->add('ctlEstablecimiento', 'entity',array('label'  => 'Establecimiento :', 'class' => 'MinsalSuministroBundle:CtlEstablecimiento', 'choice_label' => 'nombre',  'required' => false, 'multiple' => false, 'attr' => array('class' => 'form-control')))
          ;//->add('group');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Minsal\SuministroBundle\Entity\FosUser'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'minsal_suministrobundle_fosuser';
    }


}
