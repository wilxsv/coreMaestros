<?php

namespace Minsal\SuministroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntInsumo
 */
class MntInsumo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $codigoNuInsumo;

    /**
     * @var string
     */
    private $codigoMinsalInsumo;

    /**
     * @var string
     */
    private $concentracionMedicamentoInsumo;

    /**
     * @var integer
     */
    private $codigoSinabExt;

    /**
     * @var boolean
     */
    private $listadoOficial;

    /**
     * @var string
     */
    private $nombreLargoInsumo;

    /**
     * @var \DateTime
     */
    private $registroSchema;

    /**
     * @var string
     */
    private $detalleSchema;

    /**
     * @var integer
     */
    private $userIdSchema;

    /**
     * @var string
     */
    private $userIpSchema;

    /**
     * @var integer
     */
    private $estadoSchema;

    /**
     * @var integer
     */
    private $enableSchema;

    /**
     * @var string
     */
    private $especificacionTecnicaInsumo;

    /**
     * @var integer
     */
    private $venInsumo;

    /**
     * @var float
     */
    private $precioReferenciaInsumo;

    /**
     * @var boolean
     */
    private $procesadoInsumo;

    /**
     * @var string
     */
    private $posologiaInsumo;

    /**
     * @var string
     */
    private $nombreGenericoInsumo;

    /**
     * @var string
     */
    private $descripcionInsumo;

    /**
     * @var \Minsal\SuministroBundle\Entity\CtlPresentacion
     */
    private $presentacion;

    /**
     * @var \Minsal\SuministroBundle\Entity\CtlNivelUso
     */
    private $nivelUso;

    /**
     * @var \Minsal\SuministroBundle\Entity\CtlFormaFarmaceutica
     */
    private $ctlFormaFarmaceutica;

    /**
     * @var \Minsal\SuministroBundle\Entity\CtlTipoUso
     */
    private $tipoUso;

    /**
     * @var \Minsal\SuministroBundle\Entity\CtlEspecificoGasto
     */
    private $especificoGasto;

    /**
     * @var \Minsal\SuministroBundle\Entity\CtlViaAdministracion
     */
    private $viaAdministracion;

    /**
     * @var \Minsal\SuministroBundle\Entity\CtlUnidadDespacho
     */
    private $unidadDespacho;

    /**
     * @var \Minsal\SuministroBundle\Entity\CtlPrincipio
     */
    private $principio;

    /**
     * @var \Minsal\SuministroBundle\Entity\CtlUnidadMedida
     */
    private $unidadMedidad;

    /**
     * @var \Minsal\SuministroBundle\Entity\CtlGrupo
     */
    private $grupo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $programa;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->programa = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codigoNuInsumo
     *
     * @param string $codigoNuInsumo
     * @return MntInsumo
     */
    public function setCodigoNuInsumo($codigoNuInsumo)
    {
        $this->codigoNuInsumo = $codigoNuInsumo;

        return $this;
    }

    /**
     * Get codigoNuInsumo
     *
     * @return string 
     */
    public function getCodigoNuInsumo()
    {
        return $this->codigoNuInsumo;
    }

    /**
     * Set codigoMinsalInsumo
     *
     * @param string $codigoMinsalInsumo
     * @return MntInsumo
     */
    public function setCodigoMinsalInsumo($codigoMinsalInsumo)
    {
        $this->codigoMinsalInsumo = $codigoMinsalInsumo;

        return $this;
    }

    /**
     * Get codigoMinsalInsumo
     *
     * @return string 
     */
    public function getCodigoMinsalInsumo()
    {
        return $this->codigoMinsalInsumo;
    }

    /**
     * Set concentracionMedicamentoInsumo
     *
     * @param string $concentracionMedicamentoInsumo
     * @return MntInsumo
     */
    public function setConcentracionMedicamentoInsumo($concentracionMedicamentoInsumo)
    {
        $this->concentracionMedicamentoInsumo = $concentracionMedicamentoInsumo;

        return $this;
    }

    /**
     * Get concentracionMedicamentoInsumo
     *
     * @return string 
     */
    public function getConcentracionMedicamentoInsumo()
    {
        return $this->concentracionMedicamentoInsumo;
    }

    /**
     * Set codigoSinabExt
     *
     * @param integer $codigoSinabExt
     * @return MntInsumo
     */
    public function setCodigoSinabExt($codigoSinabExt)
    {
        $this->codigoSinabExt = $codigoSinabExt;

        return $this;
    }

    /**
     * Get codigoSinabExt
     *
     * @return integer 
     */
    public function getCodigoSinabExt()
    {
        return $this->codigoSinabExt;
    }

    /**
     * Set listadoOficial
     *
     * @param boolean $listadoOficial
     * @return MntInsumo
     */
    public function setListadoOficial($listadoOficial)
    {
        $this->listadoOficial = $listadoOficial;

        return $this;
    }

    /**
     * Get listadoOficial
     *
     * @return boolean 
     */
    public function getListadoOficial()
    {
        return $this->listadoOficial;
    }

    /**
     * Set nombreLargoInsumo
     *
     * @param string $nombreLargoInsumo
     * @return MntInsumo
     */
    public function setNombreLargoInsumo($nombreLargoInsumo)
    {
        $this->nombreLargoInsumo = $nombreLargoInsumo;

        return $this;
    }

    /**
     * Get nombreLargoInsumo
     *
     * @return string 
     */
    public function getNombreLargoInsumo()
    {
        return $this->nombreLargoInsumo;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     * @return MntInsumo
     */
    public function setRegistroSchema($registroSchema)
    {
        $this->registroSchema = $registroSchema;

        return $this;
    }

    /**
     * Get registroSchema
     *
     * @return \DateTime 
     */
    public function getRegistroSchema()
    {
        return $this->registroSchema;
    }

    /**
     * Set detalleSchema
     *
     * @param string $detalleSchema
     * @return MntInsumo
     */
    public function setDetalleSchema($detalleSchema)
    {
        $this->detalleSchema = $detalleSchema;

        return $this;
    }

    /**
     * Get detalleSchema
     *
     * @return string 
     */
    public function getDetalleSchema()
    {
        return $this->detalleSchema;
    }

    /**
     * Set userIdSchema
     *
     * @param integer $userIdSchema
     * @return MntInsumo
     */
    public function setUserIdSchema($userIdSchema)
    {
        $this->userIdSchema = $userIdSchema;

        return $this;
    }

    /**
     * Get userIdSchema
     *
     * @return integer 
     */
    public function getUserIdSchema()
    {
        return $this->userIdSchema;
    }

    /**
     * Set userIpSchema
     *
     * @param string $userIpSchema
     * @return MntInsumo
     */
    public function setUserIpSchema($userIpSchema)
    {
        $this->userIpSchema = $userIpSchema;

        return $this;
    }

    /**
     * Get userIpSchema
     *
     * @return string 
     */
    public function getUserIpSchema()
    {
        return $this->userIpSchema;
    }

    /**
     * Set estadoSchema
     *
     * @param integer $estadoSchema
     * @return MntInsumo
     */
    public function setEstadoSchema($estadoSchema)
    {
        $this->estadoSchema = $estadoSchema;

        return $this;
    }

    /**
     * Get estadoSchema
     *
     * @return integer 
     */
    public function getEstadoSchema()
    {
        return $this->estadoSchema;
    }

    /**
     * Set enableSchema
     *
     * @param integer $enableSchema
     * @return MntInsumo
     */
    public function setEnableSchema($enableSchema)
    {
        $this->enableSchema = $enableSchema;

        return $this;
    }

    /**
     * Get enableSchema
     *
     * @return integer 
     */
    public function getEnableSchema()
    {
        return $this->enableSchema;
    }

    /**
     * Set especificacionTecnicaInsumo
     *
     * @param string $especificacionTecnicaInsumo
     * @return MntInsumo
     */
    public function setEspecificacionTecnicaInsumo($especificacionTecnicaInsumo)
    {
        $this->especificacionTecnicaInsumo = $especificacionTecnicaInsumo;

        return $this;
    }

    /**
     * Get especificacionTecnicaInsumo
     *
     * @return string 
     */
    public function getEspecificacionTecnicaInsumo()
    {
        return $this->especificacionTecnicaInsumo;
    }

    /**
     * Set venInsumo
     *
     * @param integer $venInsumo
     * @return MntInsumo
     */
    public function setVenInsumo($venInsumo)
    {
        $this->venInsumo = $venInsumo;

        return $this;
    }

    /**
     * Get venInsumo
     *
     * @return integer 
     */
    public function getVenInsumo()
    {
        return $this->venInsumo;
    }

    /**
     * Set precioReferenciaInsumo
     *
     * @param float $precioReferenciaInsumo
     * @return MntInsumo
     */
    public function setPrecioReferenciaInsumo($precioReferenciaInsumo)
    {
        $this->precioReferenciaInsumo = $precioReferenciaInsumo;

        return $this;
    }

    /**
     * Get precioReferenciaInsumo
     *
     * @return float 
     */
    public function getPrecioReferenciaInsumo()
    {
        return $this->precioReferenciaInsumo;
    }

    /**
     * Set procesadoInsumo
     *
     * @param boolean $procesadoInsumo
     * @return MntInsumo
     */
    public function setProcesadoInsumo($procesadoInsumo)
    {
        $this->procesadoInsumo = $procesadoInsumo;

        return $this;
    }

    /**
     * Get procesadoInsumo
     *
     * @return boolean 
     */
    public function getProcesadoInsumo()
    {
        return $this->procesadoInsumo;
    }

    /**
     * Set posologiaInsumo
     *
     * @param string $posologiaInsumo
     * @return MntInsumo
     */
    public function setPosologiaInsumo($posologiaInsumo)
    {
        $this->posologiaInsumo = $posologiaInsumo;

        return $this;
    }

    /**
     * Get posologiaInsumo
     *
     * @return string 
     */
    public function getPosologiaInsumo()
    {
        return $this->posologiaInsumo;
    }

    /**
     * Set nombreGenericoInsumo
     *
     * @param string $nombreGenericoInsumo
     * @return MntInsumo
     */
    public function setNombreGenericoInsumo($nombreGenericoInsumo)
    {
        $this->nombreGenericoInsumo = $nombreGenericoInsumo;

        return $this;
    }

    /**
     * Get nombreGenericoInsumo
     *
     * @return string 
     */
    public function getNombreGenericoInsumo()
    {
        return $this->nombreGenericoInsumo;
    }

    /**
     * Set descripcionInsumo
     *
     * @param string $descripcionInsumo
     * @return MntInsumo
     */
    public function setDescripcionInsumo($descripcionInsumo)
    {
        $this->descripcionInsumo = $descripcionInsumo;

        return $this;
    }

    /**
     * Get descripcionInsumo
     *
     * @return string 
     */
    public function getDescripcionInsumo()
    {
        return $this->descripcionInsumo;
    }

    /**
     * Set presentacion
     *
     * @param \Minsal\SuministroBundle\Entity\CtlPresentacion $presentacion
     * @return MntInsumo
     */
    public function setPresentacion(\Minsal\SuministroBundle\Entity\CtlPresentacion $presentacion = null)
    {
        $this->presentacion = $presentacion;

        return $this;
    }

    /**
     * Get presentacion
     *
     * @return \Minsal\SuministroBundle\Entity\CtlPresentacion 
     */
    public function getPresentacion()
    {
        return $this->presentacion;
    }

    /**
     * Set nivelUso
     *
     * @param \Minsal\SuministroBundle\Entity\CtlNivelUso $nivelUso
     * @return MntInsumo
     */
    public function setNivelUso(\Minsal\SuministroBundle\Entity\CtlNivelUso $nivelUso = null)
    {
        $this->nivelUso = $nivelUso;

        return $this;
    }

    /**
     * Get nivelUso
     *
     * @return \Minsal\SuministroBundle\Entity\CtlNivelUso 
     */
    public function getNivelUso()
    {
        return $this->nivelUso;
    }

    /**
     * Set ctlFormaFarmaceutica
     *
     * @param \Minsal\SuministroBundle\Entity\CtlFormaFarmaceutica $ctlFormaFarmaceutica
     * @return MntInsumo
     */
    public function setCtlFormaFarmaceutica(\Minsal\SuministroBundle\Entity\CtlFormaFarmaceutica $ctlFormaFarmaceutica = null)
    {
        $this->ctlFormaFarmaceutica = $ctlFormaFarmaceutica;

        return $this;
    }

    /**
     * Get ctlFormaFarmaceutica
     *
     * @return \Minsal\SuministroBundle\Entity\CtlFormaFarmaceutica 
     */
    public function getCtlFormaFarmaceutica()
    {
        return $this->ctlFormaFarmaceutica;
    }

    /**
     * Set tipoUso
     *
     * @param \Minsal\SuministroBundle\Entity\CtlTipoUso $tipoUso
     * @return MntInsumo
     */
    public function setTipoUso(\Minsal\SuministroBundle\Entity\CtlTipoUso $tipoUso = null)
    {
        $this->tipoUso = $tipoUso;

        return $this;
    }

    /**
     * Get tipoUso
     *
     * @return \Minsal\SuministroBundle\Entity\CtlTipoUso 
     */
    public function getTipoUso()
    {
        return $this->tipoUso;
    }

    /**
     * Set especificoGasto
     *
     * @param \Minsal\SuministroBundle\Entity\CtlEspecificoGasto $especificoGasto
     * @return MntInsumo
     */
    public function setEspecificoGasto(\Minsal\SuministroBundle\Entity\CtlEspecificoGasto $especificoGasto = null)
    {
        $this->especificoGasto = $especificoGasto;

        return $this;
    }

    /**
     * Get especificoGasto
     *
     * @return \Minsal\SuministroBundle\Entity\CtlEspecificoGasto 
     */
    public function getEspecificoGasto()
    {
        return $this->especificoGasto;
    }

    /**
     * Set viaAdministracion
     *
     * @param \Minsal\SuministroBundle\Entity\CtlViaAdministracion $viaAdministracion
     * @return MntInsumo
     */
    public function setViaAdministracion(\Minsal\SuministroBundle\Entity\CtlViaAdministracion $viaAdministracion = null)
    {
        $this->viaAdministracion = $viaAdministracion;

        return $this;
    }

    /**
     * Get viaAdministracion
     *
     * @return \Minsal\SuministroBundle\Entity\CtlViaAdministracion 
     */
    public function getViaAdministracion()
    {
        return $this->viaAdministracion;
    }

    /**
     * Set unidadDespacho
     *
     * @param \Minsal\SuministroBundle\Entity\CtlUnidadDespacho $unidadDespacho
     * @return MntInsumo
     */
    public function setUnidadDespacho(\Minsal\SuministroBundle\Entity\CtlUnidadDespacho $unidadDespacho = null)
    {
        $this->unidadDespacho = $unidadDespacho;

        return $this;
    }

    /**
     * Get unidadDespacho
     *
     * @return \Minsal\SuministroBundle\Entity\CtlUnidadDespacho 
     */
    public function getUnidadDespacho()
    {
        return $this->unidadDespacho;
    }

    /**
     * Set principio
     *
     * @param \Minsal\SuministroBundle\Entity\CtlPrincipio $principio
     * @return MntInsumo
     */
    public function setPrincipio(\Minsal\SuministroBundle\Entity\CtlPrincipio $principio = null)
    {
        $this->principio = $principio;

        return $this;
    }

    /**
     * Get principio
     *
     * @return \Minsal\SuministroBundle\Entity\CtlPrincipio 
     */
    public function getPrincipio()
    {
        return $this->principio;
    }

    /**
     * Set unidadMedidad
     *
     * @param \Minsal\SuministroBundle\Entity\CtlUnidadMedida $unidadMedidad
     * @return MntInsumo
     */
    public function setUnidadMedidad(\Minsal\SuministroBundle\Entity\CtlUnidadMedida $unidadMedidad = null)
    {
        $this->unidadMedidad = $unidadMedidad;

        return $this;
    }

    /**
     * Get unidadMedidad
     *
     * @return \Minsal\SuministroBundle\Entity\CtlUnidadMedida 
     */
    public function getUnidadMedidad()
    {
        return $this->unidadMedidad;
    }

    /**
     * Set grupo
     *
     * @param \Minsal\SuministroBundle\Entity\CtlGrupo $grupo
     * @return MntInsumo
     */
    public function setGrupo(\Minsal\SuministroBundle\Entity\CtlGrupo $grupo = null)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return \Minsal\SuministroBundle\Entity\CtlGrupo 
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Add programa
     *
     * @param \Minsal\SuministroBundle\Entity\CtlPrograma $programa
     * @return MntInsumo
     */
    public function addPrograma(\Minsal\SuministroBundle\Entity\CtlPrograma $programa)
    {
        $this->programa[] = $programa;

        return $this;
    }

    /**
     * Remove programa
     *
     * @param \Minsal\SuministroBundle\Entity\CtlPrograma $programa
     */
    public function removePrograma(\Minsal\SuministroBundle\Entity\CtlPrograma $programa)
    {
        $this->programa->removeElement($programa);
    }

    /**
     * Get programa
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPrograma()
    {
        return $this->programa;
    }
}
