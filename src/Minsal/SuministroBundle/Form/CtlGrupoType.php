<?php

namespace Minsal\SuministroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CtlGrupoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombreGrupo')->add('detalleGrupo')->add('registroSchema')->add('detalleSchema')->add('userIdSchema')->add('userIpSchema')->add('estadoSchema')->add('enableSchema')->add('codigoGrupo')->add('suministro')->add('grupo')->add('unidad');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Minsal\SuministroBundle\Entity\CtlGrupo'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'minsal_suministrobundle_ctlgrupo';
    }


}
