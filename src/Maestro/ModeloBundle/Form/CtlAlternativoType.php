<?php

namespace Maestro\ModeloBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CtlAlternativoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('ctlInsumo','entity', array('label'  => 'Medicamento Original','class' => 'MaestroModeloBundle:CtlInsumo', 'required' => true))
        ->add('ctlInsumoAlternativo','entity', array('label'  => 'Medicamento Alternativo','class' => 'MaestroModeloBundle:CtlInsumo', 'required' => true))
        ->add('multiploAlternativo');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Maestro\ModeloBundle\Entity\CtlAlternativo'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'maestro_modelobundle_ctlalternativo';
    }


}
