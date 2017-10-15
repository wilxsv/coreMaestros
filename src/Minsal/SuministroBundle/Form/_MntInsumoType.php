<?php

namespace Minsal\SuministroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;

class MntInsumoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('codigoNuInsumo', 'text', array('label'  => 'Codigo Naciones Unidas', 'required'  => true, 'attr' => array('class' => 'form-control')))
			->add('codigoMinsalInsumo', 'text', array('label'  => 'Codigo MINSAL', 'required'  => true, 'attr' => array('class' => 'form-control')))
			->add('nombreGenericoInsumo', 'text', array('label'  => 'Nombre generico del producto', 'required'  => true, 'attr' => array('class' => 'form-control')))
			->add('descripcionInsumo', 'text', array('label'  => 'Descripcion del producto', 'required'  => true, 'attr' => array('class' => 'form-control')))
			
			->add('unidadMedidad', 'entity',array('label'  => 'Unidad de medida ', 'class' => 'MinsalSuministroBundle:CtlUnidadMedida', 'required' => true, 'attr' => array('class' => 'form-control')))
			->add('nivelUso', 'entity',array('label'  => 'Nivel de uso ', 'class' => 'MinsalSuministroBundle:CtlNivelUso', 'required' => true, 'attr' => array('class' => 'form-control')))
			->add('tipoUso', 'entity',array('label'  => 'Tipo de uso', 'class' => 'MinsalSuministroBundle:CtlTipoUso', 'required' => true, 'attr' => array('class' => 'form-control')))
			->add('grupo', 'entity',array('label'  => 'Grupo', 'class' => 'MinsalSuministroBundle:CtlGrupo', 'required' => true, 'attr' => array('class' => 'form-control')))
			->add('presentacion', 'entity',array('label'  => 'Presentación', 'class' => 'MinsalSuministroBundle:CtlPresentacion', 'required' => true, 'attr' => array('class' => 'form-control')))
			
			->add('precioReferenciaInsumo', MoneyType::class, array('label'  => 'Precio de referencia', 'required'  => true, 'attr' => array('class' => 'form-control')))
			->add('especificacionTecnicaInsumo', 'textarea', array('label'  => 'Especificaciñon técnica', 'required'  => true, 'attr' => array('class' => 'form-control')))
			
			//->add('detalleSchema', 'textarea', array('label'  => 'Observación', 'data' => '', 'attr' => array('class' => 'form-control')))
			//->add('estadoSchema', 'choice', array('label'  => 'Validar producto :', 'choices'=> array('0' => 'Observar y enviar mensaje','-1' => 'Denegar Insumo', '1' => 'Habilitar Insumo'), 'required'  => false, 'attr' => array('class' => 'form-control')))
			//->add('enableSchema', 'choice', array('label'  => 'Habilitar :', 'choices'=> array('0' => 'Observar y enviar mensaje','-1' => 'Denegar Insumo', '1' => 'Validar Insumo'), 'required'  => false, 'attr' => array('class' => 'form-control')))
			;
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
