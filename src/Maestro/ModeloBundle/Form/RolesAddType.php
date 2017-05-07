<?php

namespace Maestro\ModeloBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RolesAddType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('enabled', 'choice', array('label'  => 'Accion :', 'choices'=> array(FALSE => 'Eliminar', TRUE => 'Agregar'), 'required'  => true, ))
          ->add('roles', 'entity',array('label'  => 'Roles :', 'class' => 'MaestroModeloBundle:CtlRol', 'required' => true, 'multiple' => false,));
    }
    
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'maestro_modelobundle_add_rol';
    }


}
