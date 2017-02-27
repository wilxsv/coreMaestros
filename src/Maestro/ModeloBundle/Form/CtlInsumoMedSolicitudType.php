<?php

namespace Maestro\ModeloBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CtlInsumoMedSolicitudType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('listadoOficial', 'choice', array('choices'=> array('0' => 'No', '1' => 'Si'), 'required'  => true, ))
          ->add('detalleSchema')->add('ctlNivelUsoid')->add('ctlFormaFarmaceutica')
          ->add('ctlPresentacionid')->add('ctlUnidadMedidaid')
          ->add('ctlProductoid')
          ->add('ctlSuministroid')
          ->add('ctlProgramaid')->add('grupoid')->add('ctlConcentracionid')->add('ctlFormaFarmaceuticaid');
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
