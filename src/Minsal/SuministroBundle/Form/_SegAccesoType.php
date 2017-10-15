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
        $builder
			->add('nombreAcceso', 'text', array('label'  => 'Nombre del acceso', 'attr' => array('class' => 'form-control')))
			->add('pathAcceso', 'text', array('label'  => 'Enlace a funcionalidad', 'required'  => true, 'attr' => array('class' => 'form-control') ))
			->add('publicAcceso', 'choice', array('label'  => 'Es publico :', 'choices'=> array('0' => 'No', '1' => 'Si'), 'required'  => true, 'attr' => array('class' => 'form-control') ))
			->add('visibleAcceso', 'choice', array('label'  => 'Aparece en el menú :', 'choices'=> array('0' => 'No', '1' => 'Si'), 'required'  => true, 'attr' => array('class' => 'form-control') ))
			->add('ctlRole', 'entity', array('label'  => 'Roles permitidos','class' => 'MinsalSuministroBundle:CtlRol', 'required' => false, 'multiple' => true, 'attr' => array('class' => 'form-control')));
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
