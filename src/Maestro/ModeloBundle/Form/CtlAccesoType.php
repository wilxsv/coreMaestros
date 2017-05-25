<?php

namespace Maestro\ModeloBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CtlAccesoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombreAcceso', 'text', array('label'  => 'Nombre del acceso'))
			->add('publicAcceso', 'choice', array('label'  => 'Es publico :', 'choices'=> array('0' => 'No', '1' => 'Si'), 'required'  => true, ))
			->add('visibleAcceso', 'choice', array('label'  => 'Aparece en el menú :', 'choices'=> array('0' => 'No', '1' => 'Si'), 'required'  => true, ))
			->add('pathAcceso', 'text', array('label'  => 'Path :', 'required'  => true, ))
			->add('ordenAcceso','integer', array('label'  => 'Orden en menu :', 'attr' => array('min' => '0', 'max' => '10',)))
			//->add('rolAccesoId', 'choice', array('label'  => 'Roles :', 'choices'=> array('NULL' => 'Sin rol requerido','ROLE_AGREGA' => 'ROLE_AGREGA', 'ROLE_VERIFICA' => 'ROLE_VERIFICA', 'ROLE_HABILITA' => 'ROLE_HABILITA'), 'required'  => true, ))
			->add('acceso', 'entity', array('label'  => 'Agrupado por :','class' => 'MaestroModeloBundle:CtlAcceso', 'required' => false))->add('ctlRol');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Maestro\ModeloBundle\Entity\CtlAcceso'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'maestro_modelobundle_ctlacceso';
    }


}
