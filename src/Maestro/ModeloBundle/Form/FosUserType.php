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
        $builder->add('enabled', 'choice', array('label'  => 'Habilitado :', 'choices'=> array(FALSE => 'No', TRUE => 'Si'), 'required'  => true, ))
               ->add('roles', 'choice', array('choices' => $this->getRolesNames(), 'label' => 'Roles','multiple' => true,));
        //->add('username')->add('usernameCanonical')->add('email')->add('emailCanonical')->add('salt')->add('password')->add('lastLogin')->add('confirmationToken')->add('passwordRequestedAt')->add('roles')->add('group')        ;
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
