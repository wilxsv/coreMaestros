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
        $builder
			->add('nombreGrupo', 'text', array('label'  => 'Nombre del grupo', 'required'  => true, 'attr' => array('class' => 'form-control')))
			->add('detalleGrupo', 'text', array('label'  => 'Descripción', 'required'  => true, 'attr' => array('class' => 'form-control')))
			->add('enableSchema', 'choice', array('label'  => 'Habilitar :', 'choices'=> array('0' => 'No','-1' => 'Denegar', '1' => 'Si'), 'required'  => true, 'attr' => array('class' => 'form-control')))
			->add('codigoGrupo', 'text', array('label'  => 'Codigo grupo', 'attr' => array('min' => '0', 'max' => '99', 'maxlength' => '2', 'class' => 'form-control', 'onkeypress' => 'return (event.charCode >= 48 && event.charCode <= 57) || (event.keyCode === 8) || (event.keyCode === 46) || (event.keyCode === 37) || (event.keyCode === 39)')))
			->add('suministro', 'entity',array('label'  => 'Suministro al que esta asociado ', 'class' => 'MinsalSuministroBundle:CtlSuministro', 'required' => true, 'attr' => array('class' => 'form-control')))
			->add('grupo', 'entity',array('label'  => 'Depende de (opcional, si es sub grupo)', 'class' => 'MinsalSuministroBundle:CtlGrupo', 'required' => false))
			->add('roles', 'entity',array('label'  => 'Quienes solicitan este grupo ', 'class' => 'MinsalSuministroBundle:CtlRol', 'multiple' => true, 'required' => true))
			->add('unidad', 'entity',array('label'  => 'Unidades de medida ', 'class' => 'MinsalSuministroBundle:CtlUnidadMedida', 'multiple' => true, 'required' => true))
			;
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
