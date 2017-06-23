<?php

namespace Maestro\ModeloBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CtlEquipoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('nombreEquipo', 'text', array('label'  => 'Nombre del ECO'))
			->add('tipoEquipo', 'choice', array('label'  => 'Tipo de ECO :', 'choices'=> array('0' => 'ECO Basico', '1' => 'ECO Especializado'), 'required'  => true, ))
			->add('recurso', 'entity',array('label'  => 'Recurso humano asignado al ECO: ', 'class' => 'MaestroModeloBundle:CtlRecursoHumano', 'required' => TRUE, 'multiple' => true));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Maestro\ModeloBundle\Entity\CtlEquipo'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'maestro_modelobundle_ctlequipo';
    }


}
