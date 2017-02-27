<?php

namespace Maestro\ModeloBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CtlInsumoGralType extends AbstractType
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
        ->add('nombreLargoInsumo', 'text')
        ->add('detalleSchema')
        ->add('ctlNivelUsoid')
        ->add('ctlPresentacionid')
        ->add('ctlUnidadMedidaid')
        ->add('ctlProductoid')
        ->add('ctlSuministroid','entity', array('class' => 'MaestroModeloBundle:CtlSuministro', 'required' => true, 'multiple' => false))

        ->add('listadoOficial', 'choice', array('choices'=> array('0' => 'No', '1' => 'Si'), 'required'  => true, ))
        ->add('ctlFormaFarmaceutica','entity', array('class' => 'MaestroModeloBundle:CtlFormaFarmaceutica', 'required' => true))
        ->add('ctlProgramaid','entity', array('class' => 'MaestroModeloBundle:CtlPrograma', 'required' => true))
        ->add('grupoid','entity', array('class' => 'MaestroModeloBundle:CtlGrupo', 'required' => true))
        ->add('ctlConcentracionid','entity', array('class' => 'MaestroModeloBundle:CtlConcentracion', 'required' => true))
        ->add('ctlFormaFarmaceuticaid','entity', array('class' => 'MaestroModeloBundle:CtlFormaFarmaceutica', 'required' => true))
        ->add('estadoSchema')->add('enableSchema');
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
