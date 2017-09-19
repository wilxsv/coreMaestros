<?php

namespace Maestro\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlInsumo
 */
class CtlInsumo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $codigoNu;

    /**
     * @var integer
     */
    private $ctlProgramaid;

    /**
     * @var string
     */
    private $codigoSinab;

    /**
     * @var integer
     */
    private $codificacionInsumo;

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
    private $ipUserSchema;

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
    private $detalleInsumo;

    /**
     * @var integer
     */
    private $venInsumo;

    /**
     * @var float
     */
    private $costoInsumo;

    /**
     * @var boolean
     */
    private $procesadoInsumo;

    /**
     * @var \Maestro\CoreBundle\Entity\CtlPresentacion
     */
    private $ctlPresentacionid;

    /**
     * @var \Maestro\CoreBundle\Entity\CtlGrupo
     */
    private $grupoid;

    /**
     * @var \Maestro\CoreBundle\Entity\CtlUnidadMedida
     */
    private $ctlUnidadMedidaid;

    /**
     * @var \Maestro\CoreBundle\Entity\CtlProducto
     */
    private $ctlProductoid;

    /**
     * @var \Maestro\CoreBundle\Entity\CtlNivelUso
     */
    private $ctlNivelUsoid;

    /**
     * @var \Maestro\CoreBundle\Entity\CtlFormaFarmaceutica
     */
    private $ctlFormaFarmaceutica;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ctlConcentracionid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ctlFormaFarmaceuticaid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ctlPrinicipio;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ctlConcentracionid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ctlFormaFarmaceuticaid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ctlPrinicipio = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set codigoNu
     *
     * @param string $codigoNu
     * @return CtlInsumo
     */
    public function setCodigoNu($codigoNu)
    {
        $this->codigoNu = $codigoNu;

        return $this;
    }

    /**
     * Get codigoNu
     *
     * @return string 
     */
    public function getCodigoNu()
    {
        return $this->codigoNu;
    }

    /**
     * Set ctlProgramaid
     *
     * @param integer $ctlProgramaid
     * @return CtlInsumo
     */
    public function setCtlProgramaid($ctlProgramaid)
    {
        $this->ctlProgramaid = $ctlProgramaid;

        return $this;
    }

    /**
     * Get ctlProgramaid
     *
     * @return integer 
     */
    public function getCtlProgramaid()
    {
        return $this->ctlProgramaid;
    }

    /**
     * Set codigoSinab
     *
     * @param string $codigoSinab
     * @return CtlInsumo
     */
    public function setCodigoSinab($codigoSinab)
    {
        $this->codigoSinab = $codigoSinab;

        return $this;
    }

    /**
     * Get codigoSinab
     *
     * @return string 
     */
    public function getCodigoSinab()
    {
        return $this->codigoSinab;
    }

    /**
     * Set codificacionInsumo
     *
     * @param integer $codificacionInsumo
     * @return CtlInsumo
     */
    public function setCodificacionInsumo($codificacionInsumo)
    {
        $this->codificacionInsumo = $codificacionInsumo;

        return $this;
    }

    /**
     * Get codificacionInsumo
     *
     * @return integer 
     */
    public function getCodificacionInsumo()
    {
        return $this->codificacionInsumo;
    }

    /**
     * Set codigoSinabExt
     *
     * @param integer $codigoSinabExt
     * @return CtlInsumo
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
     * @return CtlInsumo
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
     * @return CtlInsumo
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
     * @return CtlInsumo
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
     * @return CtlInsumo
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
     * @return CtlInsumo
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
     * Set ipUserSchema
     *
     * @param string $ipUserSchema
     * @return CtlInsumo
     */
    public function setIpUserSchema($ipUserSchema)
    {
        $this->ipUserSchema = $ipUserSchema;

        return $this;
    }

    /**
     * Get ipUserSchema
     *
     * @return string 
     */
    public function getIpUserSchema()
    {
        return $this->ipUserSchema;
    }

    /**
     * Set estadoSchema
     *
     * @param integer $estadoSchema
     * @return CtlInsumo
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
     * @return CtlInsumo
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
     * Set detalleInsumo
     *
     * @param string $detalleInsumo
     * @return CtlInsumo
     */
    public function setDetalleInsumo($detalleInsumo)
    {
        $this->detalleInsumo = $detalleInsumo;

        return $this;
    }

    /**
     * Get detalleInsumo
     *
     * @return string 
     */
    public function getDetalleInsumo()
    {
        return $this->detalleInsumo;
    }

    /**
     * Set venInsumo
     *
     * @param integer $venInsumo
     * @return CtlInsumo
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
     * Set costoInsumo
     *
     * @param float $costoInsumo
     * @return CtlInsumo
     */
    public function setCostoInsumo($costoInsumo)
    {
        $this->costoInsumo = $costoInsumo;

        return $this;
    }

    /**
     * Get costoInsumo
     *
     * @return float 
     */
    public function getCostoInsumo()
    {
        return $this->costoInsumo;
    }

    /**
     * Set procesadoInsumo
     *
     * @param boolean $procesadoInsumo
     * @return CtlInsumo
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
     * Set ctlPresentacionid
     *
     * @param \Maestro\CoreBundle\Entity\CtlPresentacion $ctlPresentacionid
     * @return CtlInsumo
     */
    public function setCtlPresentacionid(\Maestro\CoreBundle\Entity\CtlPresentacion $ctlPresentacionid = null)
    {
        $this->ctlPresentacionid = $ctlPresentacionid;

        return $this;
    }

    /**
     * Get ctlPresentacionid
     *
     * @return \Maestro\CoreBundle\Entity\CtlPresentacion 
     */
    public function getCtlPresentacionid()
    {
        return $this->ctlPresentacionid;
    }

    /**
     * Set grupoid
     *
     * @param \Maestro\CoreBundle\Entity\CtlGrupo $grupoid
     * @return CtlInsumo
     */
    public function setGrupoid(\Maestro\CoreBundle\Entity\CtlGrupo $grupoid = null)
    {
        $this->grupoid = $grupoid;

        return $this;
    }

    /**
     * Get grupoid
     *
     * @return \Maestro\CoreBundle\Entity\CtlGrupo 
     */
    public function getGrupoid()
    {
        return $this->grupoid;
    }

    /**
     * Set ctlUnidadMedidaid
     *
     * @param \Maestro\CoreBundle\Entity\CtlUnidadMedida $ctlUnidadMedidaid
     * @return CtlInsumo
     */
    public function setCtlUnidadMedidaid(\Maestro\CoreBundle\Entity\CtlUnidadMedida $ctlUnidadMedidaid = null)
    {
        $this->ctlUnidadMedidaid = $ctlUnidadMedidaid;

        return $this;
    }

    /**
     * Get ctlUnidadMedidaid
     *
     * @return \Maestro\CoreBundle\Entity\CtlUnidadMedida 
     */
    public function getCtlUnidadMedidaid()
    {
        return $this->ctlUnidadMedidaid;
    }

    /**
     * Set ctlProductoid
     *
     * @param \Maestro\CoreBundle\Entity\CtlProducto $ctlProductoid
     * @return CtlInsumo
     */
    public function setCtlProductoid(\Maestro\CoreBundle\Entity\CtlProducto $ctlProductoid = null)
    {
        $this->ctlProductoid = $ctlProductoid;

        return $this;
    }

    /**
     * Get ctlProductoid
     *
     * @return \Maestro\CoreBundle\Entity\CtlProducto 
     */
    public function getCtlProductoid()
    {
        return $this->ctlProductoid;
    }

    /**
     * Set ctlNivelUsoid
     *
     * @param \Maestro\CoreBundle\Entity\CtlNivelUso $ctlNivelUsoid
     * @return CtlInsumo
     */
    public function setCtlNivelUsoid(\Maestro\CoreBundle\Entity\CtlNivelUso $ctlNivelUsoid = null)
    {
        $this->ctlNivelUsoid = $ctlNivelUsoid;

        return $this;
    }

    /**
     * Get ctlNivelUsoid
     *
     * @return \Maestro\CoreBundle\Entity\CtlNivelUso 
     */
    public function getCtlNivelUsoid()
    {
        return $this->ctlNivelUsoid;
    }

    /**
     * Set ctlFormaFarmaceutica
     *
     * @param \Maestro\CoreBundle\Entity\CtlFormaFarmaceutica $ctlFormaFarmaceutica
     * @return CtlInsumo
     */
    public function setCtlFormaFarmaceutica(\Maestro\CoreBundle\Entity\CtlFormaFarmaceutica $ctlFormaFarmaceutica = null)
    {
        $this->ctlFormaFarmaceutica = $ctlFormaFarmaceutica;

        return $this;
    }

    /**
     * Get ctlFormaFarmaceutica
     *
     * @return \Maestro\CoreBundle\Entity\CtlFormaFarmaceutica 
     */
    public function getCtlFormaFarmaceutica()
    {
        return $this->ctlFormaFarmaceutica;
    }

    /**
     * Add ctlConcentracionid
     *
     * @param \Maestro\CoreBundle\Entity\CtlConcentracion $ctlConcentracionid
     * @return CtlInsumo
     */
    public function addCtlConcentracionid(\Maestro\CoreBundle\Entity\CtlConcentracion $ctlConcentracionid)
    {
        $this->ctlConcentracionid[] = $ctlConcentracionid;

        return $this;
    }

    /**
     * Remove ctlConcentracionid
     *
     * @param \Maestro\CoreBundle\Entity\CtlConcentracion $ctlConcentracionid
     */
    public function removeCtlConcentracionid(\Maestro\CoreBundle\Entity\CtlConcentracion $ctlConcentracionid)
    {
        $this->ctlConcentracionid->removeElement($ctlConcentracionid);
    }

    /**
     * Get ctlConcentracionid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCtlConcentracionid()
    {
        return $this->ctlConcentracionid;
    }

    /**
     * Add ctlFormaFarmaceuticaid
     *
     * @param \Maestro\CoreBundle\Entity\CtlFormaFarmaceutica $ctlFormaFarmaceuticaid
     * @return CtlInsumo
     */
    public function addCtlFormaFarmaceuticaid(\Maestro\CoreBundle\Entity\CtlFormaFarmaceutica $ctlFormaFarmaceuticaid)
    {
        $this->ctlFormaFarmaceuticaid[] = $ctlFormaFarmaceuticaid;

        return $this;
    }

    /**
     * Remove ctlFormaFarmaceuticaid
     *
     * @param \Maestro\CoreBundle\Entity\CtlFormaFarmaceutica $ctlFormaFarmaceuticaid
     */
    public function removeCtlFormaFarmaceuticaid(\Maestro\CoreBundle\Entity\CtlFormaFarmaceutica $ctlFormaFarmaceuticaid)
    {
        $this->ctlFormaFarmaceuticaid->removeElement($ctlFormaFarmaceuticaid);
    }

    /**
     * Get ctlFormaFarmaceuticaid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCtlFormaFarmaceuticaid()
    {
        return $this->ctlFormaFarmaceuticaid;
    }

    /**
     * Add ctlPrinicipio
     *
     * @param \Maestro\CoreBundle\Entity\CtlPrincipio $ctlPrinicipio
     * @return CtlInsumo
     */
    public function addCtlPrinicipio(\Maestro\CoreBundle\Entity\CtlPrincipio $ctlPrinicipio)
    {
        $this->ctlPrinicipio[] = $ctlPrinicipio;

        return $this;
    }

    /**
     * Remove ctlPrinicipio
     *
     * @param \Maestro\CoreBundle\Entity\CtlPrincipio $ctlPrinicipio
     */
    public function removeCtlPrinicipio(\Maestro\CoreBundle\Entity\CtlPrincipio $ctlPrinicipio)
    {
        $this->ctlPrinicipio->removeElement($ctlPrinicipio);
    }

    /**
     * Get ctlPrinicipio
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCtlPrinicipio()
    {
        return $this->ctlPrinicipio;
    }
}
