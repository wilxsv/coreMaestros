<?php

namespace Maestro\ModeloBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CtlGrupoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //$builder->add('nombreGrupo')->add('detalleGrupo')->add('registroSchema')->add('detalleSchema')->add('userIdSchema')->add('ipUserSchema')->add('estadoSchema')->add('enableSchema')->add('codigoGrupo')->add('suministro')->add('grupo')->add('unidad')        ;
        $builder
			->add('nombreGrupo')
			->add('detalleGrupo')
			->add('grupoId','entity', array('label'  => 'Grupo Superior','class' => 'MaestroModeloBundle:CtlGrupo', 'required' => true))
			->add('codigoGrupo')
			->add('suministro')
			->add('unidad','entity', array('label'  => 'Unidad de medida','class' => 'MaestroModeloBundle:CtlUnidadMedida', 'required' => true, 'multiple' => true))
			;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Maestro\ModeloBundle\Entity\CtlGrupo'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'maestro_modelobundle_ctlgrupo';
    }


}
