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
        $builder->add('codigoNu')->add('codigoSinab')->add('codigoEcri')->add('codigoAtc')->add('listadoOficial')
		->add('nombreLargo')->add('registro')->add('idUsuario')->add('ctlSuministroid')->add('ctlProductoid')
		->add('ctlNivelUsoid')->add('ctlFormaFarmaceutica')->add('ctlPresentacionid')
		->add('ctlProgramaid')->add('ctlUnidadMedidaid')->add('grupoid')->add('ctlPrincipioActivoid')
		->add('ctlConcentracionid')->add('ctlFormaFarmaceuticaid')        ;
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