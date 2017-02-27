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
        $builder->add('nombre')
        ->add('direccion')
        ->add('telefono')
        ->add('fax')
        ->add('anioApertura')
        ->add('cabezaMicrored')
        ->add('hospitalizacion')
        ->add('poblacionAsignana')
        ->add('cantidadFamilia')
        ->add('idmicrored')
        ->add('idEstablecimientoPadre')
        ->add('idTipoEstablecimiento')
        ->add('idMunicipio')
        ->add('idInstitucion')
        ->add('idSituacionLegal')
        ->add('ctlPrestacionid')
        ->add('ctlRecursoHumanoid')
        ->add('ctlServicioid');
    }
/*

->add('idCatNivelMinsal')
->add('codUcsf')
->add('cvcd4')
->add('latitud')
->add('longitud')
->add('registroSchema')->add('detalleSchema')->add('userIdSchema')->add('ipUserSchema')->add('estadoSchema')->add('enableSchema')

*/
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
