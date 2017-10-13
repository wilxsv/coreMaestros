<?php

namespace Minsal\SuministroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CtlSuministroType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombreSuministro')->add('detalleSuministro')->add('registroSchema')->add('detalleSchema')->add('userIdSchema')->add('userIpSchema')->add('estadoSchema')->add('enableSchema')->add('rolSolicitaSuministro')->add('rolValidaSuministro')->add('ctlSuministroid')->add('codificacionSuministro')->add('unidadMedida');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Minsal\SuministroBundle\Entity\CtlSuministro'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'minsal_suministrobundle_ctlsuministro';
    }


}
