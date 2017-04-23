<?php

namespace Maestro\ModeloBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CtlEstablecimientoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre', 'text', array('label'  => 'Nombre del establecimiento'))
        ->add('direccion', 'text', array('label'  => 'Dirección'))
        ->add('telefono', 'text', array('label'  => 'Telefono'))
        ->add('fax', 'text', array('label'  => 'Fax'))
        ->add('anioApertura', 'integer', array('label'  => 'Año de apertura #### :','attr'=>  array('maxlength' => '4', 'max' => '2017', 'min' => '1980', 'placeholder' => '2017')))
        ->add('cabezaMicrored', 'choice', array('label'  => 'Es cabeza de micro red :', 'choices'=> array('0' => 'No', '1' => 'Si'), 'required'  => true, ))
        ->add('hospitalizacion', 'choice', array('label'  => 'Posee hospitalización :', 'choices'=> array('0' => 'No', '1' => 'Si'), 'required'  => true, ))
        ->add('poblacionAsignana', 'integer', array('label'  => 'Población asignada'))
        ->add('cantidadFamilia', 'integer', array('label'  => 'Cantidad de familias asignadas: '))
        ->add('idmicrored', 'entity',array('label'  => 'Micro red a la que pertenece: ', 'class' => 'MaestroModeloBundle:CtlMicrored', 'required' => true))
        ->add('idEstablecimientoPadre', 'entity',array('label'  => 'si es un eco selecciones al establecimiento que pertenece: ', 'class' => 'MaestroModeloBundle:CtlEstablecimiento', 'required' => false))
        ->add('idTipoEstablecimiento', 'entity',array('label'  => 'Tipo de establecimiento: ', 'class' => 'MaestroModeloBundle:CtlTipoEstablecimiento', 'required' => true))
        ->add('idMunicipio', 'entity',array('label'  => 'Municipio: ', 'class' => 'MaestroModeloBundle:CtlMunicipio', 'required' => true))
        ->add('idSituacionLegal', 'entity',array('label'  => 'Situación legal del inmueble: ', 'class' => 'MaestroModeloBundle:CtlSituacionLegal', 'required' => true))
        ->add('ctlPrestacionid', 'entity',array('label'  => 'Prestaciones: ', 'class' => 'MaestroModeloBundle:CtlPrestacion', 'required' => false, 'multiple' => true))
        ->add('ctlRecursoHumanoid', 'entity',array('label'  => 'Recurso humano asignado: ', 'class' => 'MaestroModeloBundle:CtlRecursoHumano', 'required' => false, 'multiple' => true))
        ->add('ctlServicioid', 'entity',array('label'  => 'Servicios que presta', 'class' => 'MaestroModeloBundle:CtlServicio', 'required' => false, 'multiple' => true))
        ->add('detalleSchema', 'text', array('label'  => 'Observación', 'data' => ''))
        ->add('enableSchema', 'hidden')
   		->add('estadoSchema', 'hidden');//, array('data' => 0)
    }
/*

->add('idCatNivelMinsal')
->add('codUcsf')
->add('cvcd4')
->add('latitud')
->add('longitud')
->add('registroSchema')->add('detalleSchema')->add('userIdSchema')->add('ipUserSchema')->add('estadoSchema')->add('enableSchema')

*/
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Maestro\ModeloBundle\Entity\CtlEstablecimiento'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'maestro_modelobundle_ctlestablecimiento';
    }


}
