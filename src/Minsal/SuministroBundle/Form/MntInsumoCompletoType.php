<?php

namespace Minsal\SuministroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MntInsumoCompletoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('codigoNuInsumo')->add('codigoMinsalInsumo')->add('concentracionMedicamentoInsumo')->add('codigoSinabExt')->add('listadoOficial')->add('nombreLargoInsumo')->add('registroSchema')->add('detalleSchema')->add('userIdSchema')->add('userIpSchema')->add('estadoSchema')->add('enableSchema')->add('especificacionTecnicaInsumo')->add('venInsumo')->add('precioReferenciaInsumo')->add('procesadoInsumo')->add('posologiaInsumo')->add('nombreGenericoInsumo')->add('descripcionInsumo')->add('presentacion')->add('nivelUso')->add('ctlFormaFarmaceutica')->add('tipoUso')->add('especificoGasto')->add('viaAdministracion')->add('unidadDespacho')->add('principio')->add('unidadMedidad')->add('grupo')->add('programa');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Minsal\SuministroBundle\Entity\MntInsumo'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'minsal_suministrobundle_mntinsumo';
    }


}
