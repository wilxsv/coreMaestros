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
        $builder->add('nombreSuministro', 'text', array('label'  => 'Nombre de Suministro') )
        ->add('codificacionSuministro', 'choice', array('choices'=> array('sinab' => 'SINAB', 'ATC' => 'ATC o Sistema de Clasificación Anatómica, Terapéutica, Química', 'ecri' => 'Sistema Universal de Nomenclatura de Dispositivos Médicos'), 'required'  => true, ))
        ->add('rolSolicitaSuministro', 'choice', array('label'  => 'Rol que solicita :', 'choices'=> array('NULL' => 'Sin rol requerido','ROLE_AGREGA' => 'ROLE_AGREGA', 'ROLE_VERIFICA' => 'ROLE_VERIFICA', 'ROLE_HABILITA' => 'ROLE_HABILITA'), 'required'  => true, ))
		->add('rolValidaSuministro', 'choice', array('label'  => 'Rol que valida y codifica :', 'choices'=> array('NULL' => 'Sin rol requerido','ROLE_AGREGA' => 'ROLE_AGREGA', 'ROLE_VERIFICA' => 'ROLE_VERIFICA', 'ROLE_HABILITA' => 'ROLE_HABILITA'), 'required'  => true, ))
		->add('ctlSuministroid','entity', array('label'  => 'Suministro superior','class' => 'MaestroModeloBundle:CtlSuministro', 'required' => true));
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
