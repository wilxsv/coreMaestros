<?php

namespace Maestro\ModeloBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CtlEstablecimientoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre')->add('direccion')->add('telefono')->add('fax')->add('latitud')->add('longitud')->add('anioApertura')->add('activo')->add('cabezaMicrored')->add('hospitalizacion')->add('detalleSchema')->add('idmicrored')->add('idEstablecimientoPadre')->add('idTipoEstablecimiento')->add('idMunicipio')->add('idCatTipoConsumo')->add('idCatTipoFarmacia')->add('idCatTipoExpediente')->add('idCatPruebas')->add('idInstitucion')->add('idCatNivelMinsal')        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Maestro\ModeloBundle\Entity\CtlEstablecimiento'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'maestro_modelobundle_ctlestablecimiento';
    }


}
