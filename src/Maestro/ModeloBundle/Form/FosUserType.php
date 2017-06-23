<?php

namespace Maestro\ModeloBundle\Form;

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
		  ->add('enabled', 'choice', array('label'  => 'Habilitado :', 'choices'=> array(FALSE => 'No', TRUE => 'Si'), 'required'  => true, ))
          ->add('email', 'email', array('label' => 'Correo de usuaria', 'required'  => true,   ))
          ->add('username', 'text', array('label' => 'Nombre de usuaria', 'required'  => true,   ))
          ->add('fullname', 'text', array('label' => 'Nombre completo', 'required'  => true ))
          ->add('password', 'password', array('label' => 'Nombre completo', 'required'  => true ))
          ->add('roles', 'entity',array('label'  => 'Roles :', 'class' => 'MaestroModeloBundle:CtlRol', 'choice_label' => 'nombreRol',  'required' => false, 'multiple' => false,))
          ->add('establecimiento', 'entity',array('label'  => 'Establecimiento :', 'class' => 'MaestroModeloBundle:CtlEstablecimiento', 'required' => true, 'multiple' => false))
             
       ;
    }
    
    public function getRolesNames(){
		return array(
			"ROLE_AGREGA" => "ROLE_AGREGA",
			"ROLE_VALIDA" => "ROLE_VALIDA",
			"ROLE_HABILITA" => "ROLE_HABILITA",               
		);
	}
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Maestro\ModeloBundle\Entity\FosUser'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'maestro_modelobundle_fosuser';
    }


}
