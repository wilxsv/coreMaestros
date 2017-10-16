<?php

namespace Minsal\SuministroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;

class MntInsumoCompletoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('codigoNuInsumo', 'text', array('label'  => 'Codigo Naciones Unidas', 'required'  => false, 'attr' => array('class' => 'form-control')))
			->add('codigoMinsalInsumo', 'text', array('label'  => 'Codigo MINSAL', 'required'  => false, 'attr' => array('class' => 'form-control')))
			->add('especificoGasto')
			
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
			->add('estadoSchema', 'choice', array('label'  => 'Validar producto :', 'choices'=> array('0' => 'Observar y enviar mensaje','-1' => 'Denegar Insumo', '1' => 'Habilitar Insumo'), 'required'  => false, 'attr' => array('class' => 'form-control')))
			->add('enableSchema', 'choice', array('label'  => 'Habilitar :', 'choices'=> array('0' => 'Observar y enviar mensaje','-1' => 'Denegar Insumo', '1' => 'Validar Insumo'), 'required'  => false, 'attr' => array('class' => 'form-control')))
			
			->add('multiploInsumo', 'integer', array('label'  => 'Multiplo', 'required'  => true, 'attr' => array('class' => 'form-control', 'min' => 1)))
			->add('concentracionMedicamentoInsumo', 'text', array('label'  => 'Concentracion', 'required'  => true, 'attr' => array('class' => 'form-control')))
			->add('listadoOficial', 'choice', array('label'  => 'Pertenece al listado oficial :', 'choices'=> array('0' => 'No', '1' => 'Si'), 'required'  => true, 'attr' => array('class' => 'form-control')))
			->add('venInsumo', 'choice', array('label'  => 'Nivel VEN', 'choices'=> array('1' => 'Vital','2' => 'Escencial', '3' => 'No escencial'), 'required'  => true, 'attr' => array('class' => 'form-control')))
			->add('ctlFormaFarmaceutica', 'entity',array('label'  => 'Forma Farmaceutica ', 'class' => 'MinsalSuministroBundle:CtlFormaFarmaceutica', 'required' => true, 'attr' => array('class' => 'form-control')))
			->add('viaAdministracion', 'entity',array('label'  => 'Via de administración', 'class' => 'MinsalSuministroBundle:CtlViaAdministracion', 'required' => true, 'attr' => array('class' => 'form-control')))
			->add('unidadDespacho', 'entity',array('label'  => 'Unidad de despacho', 'class' => 'MinsalSuministroBundle:CtlUnidadDespacho', 'required' => true, 'attr' => array('class' => 'form-control')))
			->add('principio', 'entity',array('label'  => 'Principio Activo ', 'class' => 'MinsalSuministroBundle:CtlPrincipio', 'required' => true,  'multiple' => true))
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
