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
        $builder
			->add('nombreSuministro', 'text', array('label'  => 'Nombre de tipo de suministro', 'required'  => true, 'attr' => array('class' => 'form-control')))
			->add('detalleSuministro', 'text', array('label'  => 'Descripcion de suministro', 'required'  => true, 'attr' => array('class' => 'form-control')))
			->add('codigoSuministro', 'text', array('label'  => 'Codigo de suministro', 'required'  => true, 'attr' => array('class' => 'form-control')))
			->add('codificacionSuministro', 'entity',array('label'  => 'Metodo de codificacion', 'class' => 'MinsalSuministroBundle:CtlCodificacion', 'required' => true, 'attr' => array('class' => 'form-control')))
			->add('rolValidaSuministro', 'entity',array('label'  => 'Rol que valida', 'class' => 'MinsalSuministroBundle:CtlRol', 'required' => true, 'attr' => array('class' => 'form-control')))
			->add('ctlSuministroid')
			->add('detalleSchema', 'text', array('label'  => 'Justificación', 'required'  => true, 'attr' => array('class' => 'form-control')))
			->add('estadoSchema', 'choice', array('label'  => 'Validar :', 'choices'=> array('0' => 'No','-1' => 'Denegar', '1' => 'Si'), 'required'  => false, 'attr' => array('class' => 'form-control')))
			->add('enableSchema', 'choice', array('label'  => 'Habilitar :', 'choices'=> array('0' => 'No','-1' => 'Denegar', '1' => 'Si'), 'required'  => false, 'attr' => array('class' => 'form-control')));
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
