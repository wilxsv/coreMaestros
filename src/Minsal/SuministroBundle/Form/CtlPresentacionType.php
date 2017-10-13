<?php

namespace Minsal\SuministroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CtlPresentacionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombrePresentacion')->add('detallePresentacion')->add('registroSchema')->add('detalleSchema')->add('userIdSchema')->add('userIpSchema')->add('estadoSchema')->add('enableSchema');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Minsal\SuministroBundle\Entity\CtlPresentacion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'minsal_suministrobundle_ctlpresentacion';
    }


}
