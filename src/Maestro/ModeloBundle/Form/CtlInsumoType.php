<?php

namespace Maestro\ModeloBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CtlInsumoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('codigoNu')
        ->add('codigoSinab')
        ->add('codificacionInsumo')
        ->add('codigoSinabExt')
        ->add('listadoOficial', 'choice', array('choices'=> array('0' => 'No', '1' => 'Si'), 'required'  => true, ))
        ->add('nombreLargoInsumo')
        ->add('ctlNivelUsoid', 'entity',array('label'  => 'Nivel de uso: ', 'class' => 'MaestroModeloBundle:CtlNivelUso', 'required' => true))
        ->add('ctlFormaFarmaceutica','entity', array('class' => 'MaestroModeloBundle:CtlFormaFarmaceutica', 'required' => true))
        ->add('ctlPresentacionid','entity', array('label'  => 'Presentacion : ', 'class' => 'MaestroModeloBundle:CtlPresentacion', 'required' => true))
        ->add('ctlUnidadMedidaid', 'entity',array('label'  => 'Unidad de medida: ', 'class' => 'MaestroModeloBundle:CtlUnidadMedida', 'required' => true))
        ->add('ctlProductoid', 'entity',array('label'  => 'Unidad Logistica: ', 'class' => 'MaestroModeloBundle:CtlProducto', 'required' => true))
        ->add('ctlProgramaid','entity', array('label'  => 'Programa al que pertenece: ','class' => 'MaestroModeloBundle:CtlPrograma', 'required' => true))
        ->add('grupoid','entity', array('label'  => 'Grupo al que pertenece: ','class' => 'MaestroModeloBundle:CtlGrupo', 'required' => true))
        ->add('ctlConcentracionid','entity', array('class' => 'MaestroModeloBundle:CtlConcentracion', 'required' => true))
        ->add('ctlFormaFarmaceuticaid','entity', array('label'  => 'Unidad de dispensacion :','class' => 'MaestroModeloBundle:CtlFormaFarmaceutica', 'required' => true))
        ->add('detalleSchema', 'text', array('label'  => 'Observación', 'data' => ''))
        ->add('enableSchema', 'choice', array('label'  => 'Opciones a tomar :', 'choices'=> array('0' => 'No validar','-1' => 'Denegar Insumo', '1' => 'Habilitar Insumo'), 'required'  => false, ))
   		->add('estadoSchema', 'hidden');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Maestro\ModeloBundle\Entity\CtlInsumo'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'maestro_modelobundle_ctlinsumo';
    }


}
