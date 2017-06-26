<?php

namespace Maestro\ModeloBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CtlSuministroType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('nombreSuministro', 'textarea', array('label'  => 'Nombre del Suministro', 'required'  => true))
			->add('detalleSchema', 'textarea', array('label'  => 'Observacion', 'required'  => true))
			->add('rolSolicitaSuministro','entity', array('label'  => 'Quien puede solicitar este suministro','class' => 'MaestroModeloBundle:CtlRol', 'required' => true))
			->add('rolValidaSuministro','entity', array('label'  => 'Quien valida la informacion de este suministro','class' => 'MaestroModeloBundle:CtlRol', 'required' => true))
			->add('codificacionSuministro','entity', array('label'  => 'Que codificacion posee este suministro','class' => 'MaestroModeloBundle:CtlCodificacion', 'required' => true));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Maestro\ModeloBundle\Entity\CtlSuministro'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'maestro_modelobundle_ctlsuministro';
    }


}
