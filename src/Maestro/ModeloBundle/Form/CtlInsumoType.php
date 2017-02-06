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
        $builder->add('codigoNu')->add('codigoSinab')->add('codificacionInsumo')->add('codigoSinabExt')->add('listadoOficial')->add('nombreLargoInsumo')->add('registroSchema')->add('detalleSchema')->add('userIdSchema')->add('ipUserSchema')->add('estadoSchema')->add('enableSchema')->add('ctlNivelUsoid')->add('ctlFormaFarmaceutica')
                ->add('ctlPresentacionid')->add('ctlUnidadMedidaid')->add('ctlProductoid')->add('ctlSuministroid')->add('ctlProgramaid')->add('grupoid')->add('ctlConcentracionid')->add('ctlFormaFarmaceuticaid')->add('ctlPrincipioActivoid')        ;
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
