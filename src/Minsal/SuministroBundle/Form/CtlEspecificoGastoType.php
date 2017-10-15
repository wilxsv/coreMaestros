<?php

namespace Minsal\SuministroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CtlEspecificoGastoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('nombreEspecificoGasto', 'text', array('label'  => 'Nombre de ESPECIFICO GASTO', 'required'  => true, 'attr' => array('class' => 'form-control')))
			->add('detalleEspecificoGasto', 'text', array('label'  => 'Descripción', 'required'  => true, 'attr' => array('class' => 'form-control')))
			->add('tipo', 'entity',array('label'  => 'Depende de (opcional)', 'class' => 'MinsalSuministroBundle:CtlEspecificoGasto', 'required' => true, 'attr' => array('class' => 'form-control')))
			->add('enableSchema', 'choice', array('label'  => 'Habilitar :', 'choices'=> array('0' => 'No','-1' => 'Denegar', '1' => 'Si'), 'required'  => false, 'attr' => array('class' => 'form-control')));
			;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Minsal\SuministroBundle\Entity\CtlEspecificoGasto'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'minsal_suministrobundle_ctlespecificogasto';
    }


}
