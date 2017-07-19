<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlInsumo
 *
 * @ORM\Table(name="ctl_insumo", indexes={@ORM\Index(name="IDX_9DB3222BD744E62", columns={"ctl_presentacionid"}), @ORM\Index(name="IDX_9DB322272F1374E", columns={"grupoid"}), @ORM\Index(name="IDX_9DB3222D2D8661B", columns={"ctl_unidad_medidaid"}), @ORM\Index(name="IDX_9DB32221F3126F0", columns={"ctl_productoid"}), @ORM\Index(name="IDX_9DB3222DD0A3533", columns={"ctl_nivel_usoid"}), @ORM\Index(name="IDX_9DB32227A93ADB3", columns={"ctl_forma_farmaceutica_id"})})
 * @ORM\Entity
 */
class CtlInsumo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_insumo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_nu", type="string", length=255, nullable=true)
     */
    private $codigoNu;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctl_programaid", type="integer", nullable=true)
     */
    private $ctlProgramaid;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_sinab", type="string", length=10, nullable=false)
     */
    private $codigoSinab;

    /**
     * @var integer
     *
     * @ORM\Column(name="codificacion_insumo", type="bigint", nullable=false)
     */
    private $codificacionInsumo;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo_sinab_ext", type="bigint", nullable=false)
     */
    private $codigoSinabExt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="listado_oficial", type="boolean", nullable=false)
     */
    private $listadoOficial;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_largo_insumo", type="text", nullable=false)
     */
    private $nombreLargoInsumo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registro_schema", type="datetime", nullable=true)
     */
    private $registroSchema;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_schema", type="text", nullable=true)
     */
    private $detalleSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id_schema", type="bigint", nullable=true)
     */
    private $userIdSchema;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_user_schema", type="string", nullable=true)
     */
    private $ipUserSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_schema", type="integer", nullable=true)
     */
    private $estadoSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="enable_schema", type="integer", nullable=true)
     */
    private $enableSchema;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_insumo", type="text", nullable=true)
     */
    private $detalleInsumo;

    /**
     * @var \CtlPresentacion
     *
     * @ORM\ManyToOne(targetEntity="CtlPresentacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ctl_presentacionid", referencedColumnName="id")
     * })
     */
    private $ctlPresentacionid;

    /**
     * @var \CtlGrupo
     *
     * @ORM\ManyToOne(targetEntity="CtlGrupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grupoid", referencedColumnName="id")
     * })
     */
    private $grupoid;

    /**
     * @var \CtlUnidadMedida
     *
     * @ORM\ManyToOne(targetEntity="CtlUnidadMedida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ctl_unidad_medidaid", referencedColumnName="id")
     * })
     */
    private $ctlUnidadMedidaid;

    /**
     * @var \CtlProducto
     *
     * @ORM\ManyToOne(targetEntity="CtlProducto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ctl_productoid", referencedColumnName="id")
     * })
     */
    private $ctlProductoid;

    /**
     * @var \CtlNivelUso
     *
     * @ORM\ManyToOne(targetEntity="CtlNivelUso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ctl_nivel_usoid", referencedColumnName="id")
     * })
     */
    private $ctlNivelUsoid;

    /**
     * @var \CtlFormaFarmaceutica
     *
     * @ORM\ManyToOne(targetEntity="CtlFormaFarmaceutica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ctl_forma_farmaceutica_id", referencedColumnName="id")
     * })
     */
    private $ctlFormaFarmaceutica;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CtlConcentracion", inversedBy="ctlInsumoid")
     * @ORM\JoinTable(name="insumo_concentracion",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ctl_insumoid", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ctl_concentracionid", referencedColumnName="id")
     *   }
     * )
     */
    private $ctlConcentracionid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CtlFormaFarmaceutica", mappedBy="ctlInsumoid")
     */
    private $ctlFormaFarmaceuticaid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CtlPrincipio", inversedBy="ctlInsumo")
     * @ORM\JoinTable(name="insumo_principio",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ctl_insumo", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ctl_prinicipio", referencedColumnName="id")
     *   }
     * )
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
     * Set ctlPresentacionid
     *
     * @param \Maestro\ModeloBundle\Entity\CtlPresentacion $ctlPresentacionid
     * @return CtlInsumo
     */
    public function setCtlPresentacionid(\Maestro\ModeloBundle\Entity\CtlPresentacion $ctlPresentacionid = null)
    {
        $this->ctlPresentacionid = $ctlPresentacionid;

        return $this;
    }

    /**
     * Get ctlPresentacionid
     *
     * @return \Maestro\ModeloBundle\Entity\CtlPresentacion 
     */
    public function getCtlPresentacionid()
    {
        return $this->ctlPresentacionid;
    }

    /**
     * Set grupoid
     *
     * @param \Maestro\ModeloBundle\Entity\CtlGrupo $grupoid
     * @return CtlInsumo
     */
    public function setGrupoid(\Maestro\ModeloBundle\Entity\CtlGrupo $grupoid = null)
    {
        $this->grupoid = $grupoid;

        return $this;
    }

    /**
     * Get grupoid
     *
     * @return \Maestro\ModeloBundle\Entity\CtlGrupo 
     */
    public function getGrupoid()
    {
        return $this->grupoid;
    }

    /**
     * Set ctlUnidadMedidaid
     *
     * @param \Maestro\ModeloBundle\Entity\CtlUnidadMedida $ctlUnidadMedidaid
     * @return CtlInsumo
     */
    public function setCtlUnidadMedidaid(\Maestro\ModeloBundle\Entity\CtlUnidadMedida $ctlUnidadMedidaid = null)
    {
        $this->ctlUnidadMedidaid = $ctlUnidadMedidaid;

        return $this;
    }

    /**
     * Get ctlUnidadMedidaid
     *
     * @return \Maestro\ModeloBundle\Entity\CtlUnidadMedida 
     */
    public function getCtlUnidadMedidaid()
    {
        return $this->ctlUnidadMedidaid;
    }

    /**
     * Set ctlProductoid
     *
     * @param \Maestro\ModeloBundle\Entity\CtlProducto $ctlProductoid
     * @return CtlInsumo
     */
    public function setCtlProductoid(\Maestro\ModeloBundle\Entity\CtlProducto $ctlProductoid = null)
    {
        $this->ctlProductoid = $ctlProductoid;

        return $this;
    }

    /**
     * Get ctlProductoid
     *
     * @return \Maestro\ModeloBundle\Entity\CtlProducto 
     */
    public function getCtlProductoid()
    {
        return $this->ctlProductoid;
    }

    /**
     * Set ctlNivelUsoid
     *
     * @param \Maestro\ModeloBundle\Entity\CtlNivelUso $ctlNivelUsoid
     * @return CtlInsumo
     */
    public function setCtlNivelUsoid(\Maestro\ModeloBundle\Entity\CtlNivelUso $ctlNivelUsoid = null)
    {
        $this->ctlNivelUsoid = $ctlNivelUsoid;

        return $this;
    }

    /**
     * Get ctlNivelUsoid
     *
     * @return \Maestro\ModeloBundle\Entity\CtlNivelUso 
     */
    public function getCtlNivelUsoid()
    {
        return $this->ctlNivelUsoid;
    }

    /**
     * Set ctlFormaFarmaceutica
     *
     * @param \Maestro\ModeloBundle\Entity\CtlFormaFarmaceutica $ctlFormaFarmaceutica
     * @return CtlInsumo
     */
    public function setCtlFormaFarmaceutica(\Maestro\ModeloBundle\Entity\CtlFormaFarmaceutica $ctlFormaFarmaceutica = null)
    {
        $this->ctlFormaFarmaceutica = $ctlFormaFarmaceutica;

        return $this;
    }

    /**
     * Get ctlFormaFarmaceutica
     *
     * @return \Maestro\ModeloBundle\Entity\CtlFormaFarmaceutica 
     */
    public function getCtlFormaFarmaceutica()
    {
        return $this->ctlFormaFarmaceutica;
    }

    /**
     * Add ctlConcentracionid
     *
     * @param \Maestro\ModeloBundle\Entity\CtlConcentracion $ctlConcentracionid
     * @return CtlInsumo
     */
    public function addCtlConcentracionid(\Maestro\ModeloBundle\Entity\CtlConcentracion $ctlConcentracionid)
    {
        $this->ctlConcentracionid[] = $ctlConcentracionid;

        return $this;
    }

    /**
     * Remove ctlConcentracionid
     *
     * @param \Maestro\ModeloBundle\Entity\CtlConcentracion $ctlConcentracionid
     */
    public function removeCtlConcentracionid(\Maestro\ModeloBundle\Entity\CtlConcentracion $ctlConcentracionid)
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
     * @param \Maestro\ModeloBundle\Entity\CtlFormaFarmaceutica $ctlFormaFarmaceuticaid
     * @return CtlInsumo
     */
    public function addCtlFormaFarmaceuticaid(\Maestro\ModeloBundle\Entity\CtlFormaFarmaceutica $ctlFormaFarmaceuticaid)
    {
        $this->ctlFormaFarmaceuticaid[] = $ctlFormaFarmaceuticaid;

        return $this;
    }

    /**
     * Remove ctlFormaFarmaceuticaid
     *
     * @param \Maestro\ModeloBundle\Entity\CtlFormaFarmaceutica $ctlFormaFarmaceuticaid
     */
    public function removeCtlFormaFarmaceuticaid(\Maestro\ModeloBundle\Entity\CtlFormaFarmaceutica $ctlFormaFarmaceuticaid)
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
     * @param \Maestro\ModeloBundle\Entity\CtlPrincipio $ctlPrinicipio
     * @return CtlInsumo
     */
    public function addCtlPrinicipio(\Maestro\ModeloBundle\Entity\CtlPrincipio $ctlPrinicipio)
    {
        $this->ctlPrinicipio[] = $ctlPrinicipio;

        return $this;
    }

    /**
     * Remove ctlPrinicipio
     *
     * @param \Maestro\ModeloBundle\Entity\CtlPrincipio $ctlPrinicipio
     */
    public function removeCtlPrinicipio(\Maestro\ModeloBundle\Entity\CtlPrincipio $ctlPrinicipio)
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
    
        public function __toString(){
		return $this->getNombreLargoInsumo();
	}
    /**
     * @var integer
     */
    private $venInsumo;

    /**
     * @var float
     */
    private $costoInsumo;


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
}
