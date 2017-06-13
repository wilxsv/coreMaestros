<?php

namespace Maestro\ModeloBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CtlEstablecimientoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre', 'textarea', array('label'  => 'Nombre del establecimiento', 'attr' => array('size' => '20000000')))
        ->add('direccion', 'text', array('label'  => 'Dirección'))
        ->add('telefono', 'text', array('label'  => 'Telefono', 'attr' => array('min' => '20000000', 'max' => '79999999', 'maxlength' => '8', 'onkeypress' => 'return (event.charCode >= 48 && event.charCode <= 57) || (event.keyCode === 8) || (event.keyCode === 46) || (event.keyCode === 37) || (event.keyCode === 39) && document.maestro_modelobundle_ctlestablecimiento.maestro_modelobundle_ctlestablecimiento_telefono.value.length<=8', 'placeholder' => 'Ingrese el numero' )))
        ->add('fax', 'integer', array('label'  => 'Fax', 'attr' => array('min' => '20000000', 'max' => '79999999', 'maxlength' => '8', 'onkeypress' => 'return (event.charCode >= 48 && event.charCode <= 57) || (event.keyCode === 8) || (event.keyCode === 46) || (event.keyCode === 37) || (event.keyCode === 39) && document.maestro_modelobundle_ctlestablecimiento.maestro_modelobundle_ctlestablecimiento_fax.value.length<=8')))
        ->add('anioApertura', 'integer', array('label'  => 'Año de apertura #### :','attr'=>  array('maxlength' => '4', 'max' => '2017', 'min' => '1990', 'placeholder' => '2017', 'value' => '2017', )))
        ->add('cabezaMicrored', 'choice', array('label'  => 'Es cabeza de micro red :', 'choices'=> array('0' => 'No', '1' => 'Si'), 'required'  => true ))
        ->add('hospitalizacion', 'choice', array('label'  => 'Posee hospitalización :', 'choices'=> array('0' => 'No', '1' => 'Si'), 'required'  => true, ))
        ->add('poblacionAsignana', 'integer', array('label'  => 'Población asignada', 'attr' => array('min' => '10', 'max' => '79999999')))
        ->add('cantidadFamilia', 'integer', array('label'  => 'Cantidad de familias asignadas: ', 'attr' => array('min' => '10', 'max' => '79999999')))
        ->add('idmicrored', 'entity',array('label'  => 'Micro red a la que pertenece: ', 'class' => 'MaestroModeloBundle:CtlMicrored', 'required' => true))
        //->add('idEstablecimientoPadre', 'entity',array('label'  => 'Seleccione el establecimiento al que pertenece su administración: ', 'class' => 'MaestroModeloBundle:CtlEstablecimiento', 'required' => false))
        ->add('idTipoEstablecimiento', 'entity',array('label'  => 'Tipo de establecimiento: ', 'class' => 'MaestroModeloBundle:CtlTipoEstablecimiento', 'required' => true, 'attr' => array('onChange' => 'disableRed(this)')))
        ->add('idMunicipio', 'entity',array('label'  => 'Municipio: ', 'class' => 'MaestroModeloBundle:CtlMunicipio', 'required' => true))
        ->add('idSituacionLegal', 'entity',array('label'  => 'Situación legal del inmueble: ', 'class' => 'MaestroModeloBundle:CtlSituacionLegal', 'required' => true))
        ->add('ctlPrestacionid', 'entity',array('label'  => 'Prestaciones: ', 'class' => 'MaestroModeloBundle:CtlPrestacion', 'required' => false, 'multiple' => true))
        ->add('ctlRecursoHumanoid', 'entity',array('label'  => 'Recurso humano asignado: ', 'class' => 'MaestroModeloBundle:CtlRecursoHumano', 'required' => false, 'multiple' => true))
        ->add('ctlServicioid', 'entity',array('label'  => 'Servicios que presta:', 'class' => 'MaestroModeloBundle:CtlServicio', 'required' => false, 'multiple' => true))
//        ->add('ctlSibasi', EntityType::class, array('label'  => 'SIBASI al que pertenece:', 'class' => 'MaestroModeloBundle:CtlEstablecimiento', 'query_builder' => function (EntityRepository $er) { return $er->createQueryBuilder('e')->where('e.id BETWEEN 6 AND 21')->orderBy('e.nombre', 'ASC');},'choice_label' => 'nombre', 'required' => true, 'multiple' => false))
        ->add('idEstablecimientoPadre', EntityType::class, array('label'  => 'SIBASI al que pertenece:', 'class' => 'MaestroModeloBundle:CtlEstablecimiento', 'query_builder' => function (EntityRepository $er) { return $er->createQueryBuilder('e')->where('e.id BETWEEN 6 AND 21')->orderBy('e.nombre', 'ASC');},'choice_label' => 'nombre', 'required' => true, 'multiple' => false))
        ->add('detalleSchema', 'text', array('label'  => 'Observación', 'data' => ''))
        ->add('estadoSchema', 'choice', array('label'  => 'Opciones a tomar :', 'choices'=> array('0' => 'Observar y enviar mensaje a quien solicito el establecimiento','-1' => 'Denegar establecimiento', '1' => 'Validar establecimiento'), 'required'  => true, ))
        ->add('enableSchema', 'choice', array('label'  => 'Opciones a tomar :', 'choices'=> array('0' => 'No habilitar','-1' => 'Denegar establecimiento', '1' => 'Habilitar establecimiento'), 'required'  => true, ))
        ->add('userIdSchema', 'hidden')//->add('enableSchema', 'hidden')   		->add('', 'hidden', array('data' => 0))
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
