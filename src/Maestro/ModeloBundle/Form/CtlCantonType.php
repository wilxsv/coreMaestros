<?php

namespace Maestro\ModeloBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CtlCantonType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre')->add('codigoDigestyc')->add('idUsuarioReg')->add('fechaHoraReg')->add('idUsuarioMod')->add('fechaHoraMod')->add('rural')->add('digestyc2015')->add('activo')->add('idUser')->add('ipUser')->add('detalleSchema')->add('enableSchema')->add('estadoSchema')->add('idMunicipio')        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Maestro\ModeloBundle\Entity\CtlCanton'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'maestro_modelobundle_ctlcanton';
    }


}
