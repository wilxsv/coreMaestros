<?php

namespace Minsal\SuministroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SegAccesoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombreAcceso')->add('pathAcceso')->add('publicAcceso')->add('accesoId')->add('ordenAcceso')->add('visibleAcceso')->add('rol')->add('ctlRole');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Minsal\SuministroBundle\Entity\SegAcceso'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'minsal_suministrobundle_segacceso';
    }


}
