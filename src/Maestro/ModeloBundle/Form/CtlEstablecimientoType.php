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
        ->add('telefono', 'integer', array('label'  => 'Telefono', 'attr' => array('min' => '20000000', 'max' => '79999999', 'maxlength' => '8' )))
        ->add('fax', 'integer', array('label'  => 'Fax', 'attr' => array('min' => '20000000', 'max' => '79999999', 'maxlength' => '8' )))
        ->add('anioApertura', 'integer', array('label'  => 'Año de apertura #### :','attr'=>  array('maxlength' => '4', 'max' => '2017', 'min' => '1990', 'placeholder' => '2017', 'value' => '2017')))
        ->add('cabezaMicrored', 'choice', array('label'  => 'Es cabeza de micro red :', 'choices'=> array('0' => 'No', '1' => 'Si'), 'required'  => true, ))
        ->add('hospitalizacion', 'choice', array('label'  => 'Posee hospitalización :', 'choices'=> array('0' => 'No', '1' => 'Si'), 'required'  => true, ))
        ->add('poblacionAsignana', 'integer', array('label'  => 'Población asignada', 'attr' => array('min' => '10', 'max' => '79999999')))
        ->add('cantidadFamilia', 'integer', array('label'  => 'Cantidad de familias asignadas: ', 'attr' => array('min' => '10', 'max' => '79999999')))
        ->add('idmicrored', 'entity',array('label'  => 'Micro red a la que pertenece: ', 'class' => 'MaestroModeloBundle:CtlMicrored', 'required' => true))
        ->add('idEstablecimientoPadre', 'entity',array('label'  => 'Seleccione el establecimiento al que pertenece su administración: ', 'class' => 'MaestroModeloBundle:CtlEstablecimiento', 'required' => false))
        ->add('idTipoEstablecimiento', 'entity',array('label'  => 'Tipo de establecimiento: ', 'class' => 'MaestroModeloBundle:CtlTipoEstablecimiento', 'required' => true))
        ->add('idMunicipio', 'entity',array('label'  => 'Municipio: ', 'class' => 'MaestroModeloBundle:CtlMunicipio', 'required' => true))
        ->add('idSituacionLegal', 'entity',array('label'  => 'Situación legal del inmueble: ', 'class' => 'MaestroModeloBundle:CtlSituacionLegal', 'required' => true))
        ->add('ctlPrestacionid', 'entity',array('label'  => 'Prestaciones: ', 'class' => 'MaestroModeloBundle:CtlPrestacion', 'required' => false, 'multiple' => true))
        ->add('ctlRecursoHumanoid', 'entity',array('label'  => 'Recurso humano asignado: ', 'class' => 'MaestroModeloBundle:CtlRecursoHumano', 'required' => false, 'multiple' => true))
        ->add('ctlServicioid', 'entity',array('label'  => 'Servicios que presta', 'class' => 'MaestroModeloBundle:CtlServicio', 'required' => false, 'multiple' => true))
        ->add('detalleSchema', 'text', array('label'  => 'Observación', 'data' => ''))
        ->add('estadoSchema', 'choice', array('label'  => 'Opciones a tomar :', 'choices'=> array('0' => 'No validar','-1' => 'Denegar establecimiento', '1' => 'Validar establecimiento'), 'required'  => true, ))
        ->add('enableSchema', 'choice', array('label'  => 'Opciones a tomar :', 'choices'=> array('0' => 'No habilitar','-1' => 'Denegar establecimiento', '1' => 'Habilitar establecimiento'), 'required'  => true, ))
        //->add('enableSchema', 'hidden')   		->add('', 'hidden', array('data' => 0))
        ;//, array('data' => 0)
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
