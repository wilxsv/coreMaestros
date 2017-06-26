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
        $builder->add('codigoNu', 'text', array('label'  => 'Codigo Naciones Unidas', 'required'  => false))
        ->add('codigoSinab', 'text', array('label'  => 'Codigo SINAB', 'required'  => false))
        ->add('listadoOficial', 'choice', array('label'  => 'Pertenece a listado oficial: ','choices'=> array('0' => 'No', '1' => 'Si'), 'required'  => false, ))
        ->add('nombreLargoInsumo', 'text', array('label'  => 'Nombre de producto', 'required'  => true))
        ->add('ctlNivelUsoid', 'entity',array('label'  => 'Nivel de uso: ', 'class' => 'MaestroModeloBundle:CtlNivelUso', 'required' => true))
        //->add('ctlFormaFarmaceutica','entity', array('label'  => 'Forma farmaceutica: ','class' => 'MaestroModeloBundle:CtlFormaFarmaceutica', 'required' => false))
        ->add('ctlPresentacionid','entity', array('label'  => 'Presentacion : ', 'class' => 'MaestroModeloBundle:CtlPresentacion', 'required' => true))
        ->add('ctlUnidadMedidaid', 'entity',array('label'  => 'Unidad de medida: ', 'class' => 'MaestroModeloBundle:CtlUnidadMedida', 'required' => true))
        //->add('ctlProductoid', 'entity',array('label'  => 'Unidad Logistica: ', 'class' => 'MaestroModeloBundle:CtlProducto', 'required' => false))
        ->add('ctlProgramaid','entity', array('label'  => 'Programa al que pertenece: ','class' => 'MaestroModeloBundle:CtlPrograma', 'required' => false))
        ->add('grupoid','entity', array('label'  => 'Grupo al que pertenece: ','class' => 'MaestroModeloBundle:CtlGrupo', 'required' => true))
        //->add('ctlConcentracionid','entity', array('label'  => 'Concentracion: ','class' => 'MaestroModeloBundle:CtlConcentracion', 'required' => false))
        //->add('ctlFormaFarmaceuticaid','entity', array('label'  => 'Unidad de dispensacion :','class' => 'MaestroModeloBundle:CtlFormaFarmaceutica', 'required' => 			false))
        ->add('detalleSchema', 'text', array('label'  => 'Observación', 'data' => ''))
        ->add('enableSchema', 'choice', array('label'  => 'Validar producto :', 'choices'=> array('0' => 'Observar y enviar mensaje','-1' => 'Denegar Insumo', '1' => 'Habilitar Insumo'), 'required'  => false, ))
   		->add('estadoSchema', 'choice', array('label'  => 'Habilitar :', 'choices'=> array('0' => 'Observar y enviar mensaje','-1' => 'Denegar Insumo', '1' => 'Validar Insumo'), 'required'  => false, ));
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
