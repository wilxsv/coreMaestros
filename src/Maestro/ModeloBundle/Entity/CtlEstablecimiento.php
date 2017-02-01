<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlEstablecimiento
 *
 * @ORM\Table(name="ctl_establecimiento", indexes={@ORM\Index(name="idx_332bd42c7ead49c7", columns={"id_municipio"}), @ORM\Index(name="IDX_332BD42CF12084AB", columns={"idmicrored"}), @ORM\Index(name="IDX_332BD42C3544B551", columns={"id_establecimiento_padre"}), @ORM\Index(name="IDX_332BD42C4E0E50FD", columns={"id_tipo_establecimiento"}), @ORM\Index(name="IDX_332BD42C8F14B160", columns={"id_cat_tipo_consumo"}), @ORM\Index(name="IDX_332BD42C952E1FD4", columns={"id_cat_tipo_farmacia"}), @ORM\Index(name="IDX_332BD42C9E67D4BE", columns={"id_cat_tipo_expediente"}), @ORM\Index(name="IDX_332BD42CCC3EE19E", columns={"id_cat_pruebas"}), @ORM\Index(name="IDX_332BD42CEF433A34", columns={"id_institucion"}), @ORM\Index(name="IDX_332BD42CF92045C1", columns={"id_cat_nivel_minsal"})})
 * @ORM\Entity
 */
class CtlEstablecimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_establecimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=150, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=300, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=15, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=15, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="latitud", type="decimal", precision=13, scale=8, nullable=true)
     */
    private $latitud;

    /**
     * @var string
     *
     * @ORM\Column(name="longitud", type="decimal", precision=13, scale=8, nullable=true)
     */
    private $longitud;

    /**
     * @var integer
     *
     * @ORM\Column(name="anio_apertura", type="integer", nullable=true)
     */
    private $anioApertura;

    /**
     * @var string
     *
     * @ORM\Column(name="codestab_consumos", type="string", length=18, nullable=true)
     */
    private $codestabConsumos;

    /**
     * @var string
     *
     * @ORM\Column(name="codestab_siaf", type="string", length=4, nullable=true)
     */
    private $codestabSiaf;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_ucsf", type="integer", nullable=true)
     */
    private $codUcsf;

    /**
     * @var integer
     *
     * @ORM\Column(name="inst_mortalidad", type="integer", nullable=true)
     */
    private $instMortalidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="digita_mortalidad", type="integer", nullable=true)
     */
    private $digitaMortalidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="cvcd4", type="integer", nullable=true)
     */
    private $cvcd4;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var string
     *
     * @ORM\Column(name="id_usuario_reg", type="string", length=50, nullable=true)
     */
    private $idUsuarioReg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_hora_reg", type="datetime", nullable=true)
     */
    private $fechaHoraReg;

    /**
     * @var string
     *
     * @ORM\Column(name="id_usuario_mod", type="string", length=50, nullable=true)
     */
    private $idUsuarioMod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_hora_mod", type="datetime", nullable=true)
     */
    private $fechaHoraMod;

    /**
     * @var integer
     *
     * @ORM\Column(name="idestablesimow", type="integer", nullable=true)
     */
    private $idestablesimow;

    /**
     * @var integer
     *
     * @ORM\Column(name="idestablevigepes", type="integer", nullable=true)
     */
    private $idestablevigepes;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_vigepes", type="integer", nullable=true)
     */
    private $estadoVigepes;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_vacunas", type="integer", nullable=true)
     */
    private $estadoVacunas;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_seps", type="integer", nullable=true)
     */
    private $estadoSeps;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_simow", type="integer", nullable=true)
     */
    private $estadoSimow;

    /**
     * @var integer
     *
     * @ORM\Column(name="idestablesumeve", type="integer", nullable=true)
     */
    private $idestablesumeve;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_sumeve", type="integer", nullable=true)
     */
    private $estadoSumeve;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cabeza_microred", type="boolean", nullable=true)
     */
    private $cabezaMicrored;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hospitalizacion", type="boolean", nullable=true)
     */
    private $hospitalizacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="bigint", nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_user", type="string", nullable=false)
     */
    private $ipUser;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_schema", type="text", nullable=false)
     */
    private $detalleSchema;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enable_schema", type="boolean", nullable=false)
     */
    private $enableSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_schema", type="integer", nullable=false)
     */
    private $estadoSchema;

    /**
     * @var \CtlMicrored
     *
     * @ORM\ManyToOne(targetEntity="CtlMicrored")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idmicrored", referencedColumnName="id")
     * })
     */
    private $idmicrored;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento_padre", referencedColumnName="id")
     * })
     */
    private $idEstablecimientoPadre;

    /**
     * @var \CtlTipoEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlTipoEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_establecimiento", referencedColumnName="id")
     * })
     */
    private $idTipoEstablecimiento;

    /**
     * @var \CtlMunicipio
     *
     * @ORM\ManyToOne(targetEntity="CtlMunicipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_municipio", referencedColumnName="id")
     * })
     */
    private $idMunicipio;

    /**
     * @var \CtlCatalogoDetalle
     *
     * @ORM\ManyToOne(targetEntity="CtlCatalogoDetalle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cat_tipo_consumo", referencedColumnName="id")
     * })
     */
    private $idCatTipoConsumo;

    /**
     * @var \CtlCatalogoDetalle
     *
     * @ORM\ManyToOne(targetEntity="CtlCatalogoDetalle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cat_tipo_farmacia", referencedColumnName="id")
     * })
     */
    private $idCatTipoFarmacia;

    /**
     * @var \CtlCatalogoDetalle
     *
     * @ORM\ManyToOne(targetEntity="CtlCatalogoDetalle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cat_tipo_expediente", referencedColumnName="id")
     * })
     */
    private $idCatTipoExpediente;

    /**
     * @var \CtlCatalogoDetalle
     *
     * @ORM\ManyToOne(targetEntity="CtlCatalogoDetalle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cat_pruebas", referencedColumnName="id")
     * })
     */
    private $idCatPruebas;

    /**
     * @var \CtlInstitucion
     *
     * @ORM\ManyToOne(targetEntity="CtlInstitucion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_institucion", referencedColumnName="id")
     * })
     */
    private $idInstitucion;

    /**
     * @var \CtlCatalogoDetalle
     *
     * @ORM\ManyToOne(targetEntity="CtlCatalogoDetalle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cat_nivel_minsal", referencedColumnName="id")
     * })
     */
    private $idCatNivelMinsal;



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
     * Set nombre
     *
     * @param string $nombre
     * @return CtlEstablecimiento
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return CtlEstablecimiento
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return CtlEstablecimiento
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return CtlEstablecimiento
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set latitud
     *
     * @param string $latitud
     * @return CtlEstablecimiento
     */
    public function setLatitud($latitud)
    {
        $this->latitud = $latitud;

        return $this;
    }

    /**
     * Get latitud
     *
     * @return string 
     */
    public function getLatitud()
    {
        return $this->latitud;
    }

    /**
     * Set longitud
     *
     * @param string $longitud
     * @return CtlEstablecimiento
     */
    public function setLongitud($longitud)
    {
        $this->longitud = $longitud;

        return $this;
    }

    /**
     * Get longitud
     *
     * @return string 
     */
    public function getLongitud()
    {
        return $this->longitud;
    }

    /**
     * Set anioApertura
     *
     * @param integer $anioApertura
     * @return CtlEstablecimiento
     */
    public function setAnioApertura($anioApertura)
    {
        $this->anioApertura = $anioApertura;

        return $this;
    }

    /**
     * Get anioApertura
     *
     * @return integer 
     */
    public function getAnioApertura()
    {
        return $this->anioApertura;
    }

    /**
     * Set codestabConsumos
     *
     * @param string $codestabConsumos
     * @return CtlEstablecimiento
     */
    public function setCodestabConsumos($codestabConsumos)
    {
        $this->codestabConsumos = $codestabConsumos;

        return $this;
    }

    /**
     * Get codestabConsumos
     *
     * @return string 
     */
    public function getCodestabConsumos()
    {
        return $this->codestabConsumos;
    }

    /**
     * Set codestabSiaf
     *
     * @param string $codestabSiaf
     * @return CtlEstablecimiento
     */
    public function setCodestabSiaf($codestabSiaf)
    {
        $this->codestabSiaf = $codestabSiaf;

        return $this;
    }

    /**
     * Get codestabSiaf
     *
     * @return string 
     */
    public function getCodestabSiaf()
    {
        return $this->codestabSiaf;
    }

    /**
     * Set codUcsf
     *
     * @param integer $codUcsf
     * @return CtlEstablecimiento
     */
    public function setCodUcsf($codUcsf)
    {
        $this->codUcsf = $codUcsf;

        return $this;
    }

    /**
     * Get codUcsf
     *
     * @return integer 
     */
    public function getCodUcsf()
    {
        return $this->codUcsf;
    }

    /**
     * Set instMortalidad
     *
     * @param integer $instMortalidad
     * @return CtlEstablecimiento
     */
    public function setInstMortalidad($instMortalidad)
    {
        $this->instMortalidad = $instMortalidad;

        return $this;
    }

    /**
     * Get instMortalidad
     *
     * @return integer 
     */
    public function getInstMortalidad()
    {
        return $this->instMortalidad;
    }

    /**
     * Set digitaMortalidad
     *
     * @param integer $digitaMortalidad
     * @return CtlEstablecimiento
     */
    public function setDigitaMortalidad($digitaMortalidad)
    {
        $this->digitaMortalidad = $digitaMortalidad;

        return $this;
    }

    /**
     * Get digitaMortalidad
     *
     * @return integer 
     */
    public function getDigitaMortalidad()
    {
        return $this->digitaMortalidad;
    }

    /**
     * Set cvcd4
     *
     * @param integer $cvcd4
     * @return CtlEstablecimiento
     */
    public function setCvcd4($cvcd4)
    {
        $this->cvcd4 = $cvcd4;

        return $this;
    }

    /**
     * Get cvcd4
     *
     * @return integer 
     */
    public function getCvcd4()
    {
        return $this->cvcd4;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return CtlEstablecimiento
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set idUsuarioReg
     *
     * @param string $idUsuarioReg
     * @return CtlEstablecimiento
     */
    public function setIdUsuarioReg($idUsuarioReg)
    {
        $this->idUsuarioReg = $idUsuarioReg;

        return $this;
    }

    /**
     * Get idUsuarioReg
     *
     * @return string 
     */
    public function getIdUsuarioReg()
    {
        return $this->idUsuarioReg;
    }

    /**
     * Set fechaHoraReg
     *
     * @param \DateTime $fechaHoraReg
     * @return CtlEstablecimiento
     */
    public function setFechaHoraReg($fechaHoraReg)
    {
        $this->fechaHoraReg = $fechaHoraReg;

        return $this;
    }

    /**
     * Get fechaHoraReg
     *
     * @return \DateTime 
     */
    public function getFechaHoraReg()
    {
        return $this->fechaHoraReg;
    }

    /**
     * Set idUsuarioMod
     *
     * @param string $idUsuarioMod
     * @return CtlEstablecimiento
     */
    public function setIdUsuarioMod($idUsuarioMod)
    {
        $this->idUsuarioMod = $idUsuarioMod;

        return $this;
    }

    /**
     * Get idUsuarioMod
     *
     * @return string 
     */
    public function getIdUsuarioMod()
    {
        return $this->idUsuarioMod;
    }

    /**
     * Set fechaHoraMod
     *
     * @param \DateTime $fechaHoraMod
     * @return CtlEstablecimiento
     */
    public function setFechaHoraMod($fechaHoraMod)
    {
        $this->fechaHoraMod = $fechaHoraMod;

        return $this;
    }

    /**
     * Get fechaHoraMod
     *
     * @return \DateTime 
     */
    public function getFechaHoraMod()
    {
        return $this->fechaHoraMod;
    }

    /**
     * Set idestablesimow
     *
     * @param integer $idestablesimow
     * @return CtlEstablecimiento
     */
    public function setIdestablesimow($idestablesimow)
    {
        $this->idestablesimow = $idestablesimow;

        return $this;
    }

    /**
     * Get idestablesimow
     *
     * @return integer 
     */
    public function getIdestablesimow()
    {
        return $this->idestablesimow;
    }

    /**
     * Set idestablevigepes
     *
     * @param integer $idestablevigepes
     * @return CtlEstablecimiento
     */
    public function setIdestablevigepes($idestablevigepes)
    {
        $this->idestablevigepes = $idestablevigepes;

        return $this;
    }

    /**
     * Get idestablevigepes
     *
     * @return integer 
     */
    public function getIdestablevigepes()
    {
        return $this->idestablevigepes;
    }

    /**
     * Set estadoVigepes
     *
     * @param integer $estadoVigepes
     * @return CtlEstablecimiento
     */
    public function setEstadoVigepes($estadoVigepes)
    {
        $this->estadoVigepes = $estadoVigepes;

        return $this;
    }

    /**
     * Get estadoVigepes
     *
     * @return integer 
     */
    public function getEstadoVigepes()
    {
        return $this->estadoVigepes;
    }

    /**
     * Set estadoVacunas
     *
     * @param integer $estadoVacunas
     * @return CtlEstablecimiento
     */
    public function setEstadoVacunas($estadoVacunas)
    {
        $this->estadoVacunas = $estadoVacunas;

        return $this;
    }

    /**
     * Get estadoVacunas
     *
     * @return integer 
     */
    public function getEstadoVacunas()
    {
        return $this->estadoVacunas;
    }

    /**
     * Set estadoSeps
     *
     * @param integer $estadoSeps
     * @return CtlEstablecimiento
     */
    public function setEstadoSeps($estadoSeps)
    {
        $this->estadoSeps = $estadoSeps;

        return $this;
    }

    /**
     * Get estadoSeps
     *
     * @return integer 
     */
    public function getEstadoSeps()
    {
        return $this->estadoSeps;
    }

    /**
     * Set estadoSimow
     *
     * @param integer $estadoSimow
     * @return CtlEstablecimiento
     */
    public function setEstadoSimow($estadoSimow)
    {
        $this->estadoSimow = $estadoSimow;

        return $this;
    }

    /**
     * Get estadoSimow
     *
     * @return integer 
     */
    public function getEstadoSimow()
    {
        return $this->estadoSimow;
    }

    /**
     * Set idestablesumeve
     *
     * @param integer $idestablesumeve
     * @return CtlEstablecimiento
     */
    public function setIdestablesumeve($idestablesumeve)
    {
        $this->idestablesumeve = $idestablesumeve;

        return $this;
    }

    /**
     * Get idestablesumeve
     *
     * @return integer 
     */
    public function getIdestablesumeve()
    {
        return $this->idestablesumeve;
    }

    /**
     * Set estadoSumeve
     *
     * @param integer $estadoSumeve
     * @return CtlEstablecimiento
     */
    public function setEstadoSumeve($estadoSumeve)
    {
        $this->estadoSumeve = $estadoSumeve;

        return $this;
    }

    /**
     * Get estadoSumeve
     *
     * @return integer 
     */
    public function getEstadoSumeve()
    {
        return $this->estadoSumeve;
    }

    /**
     * Set cabezaMicrored
     *
     * @param boolean $cabezaMicrored
     * @return CtlEstablecimiento
     */
    public function setCabezaMicrored($cabezaMicrored)
    {
        $this->cabezaMicrored = $cabezaMicrored;

        return $this;
    }

    /**
     * Get cabezaMicrored
     *
     * @return boolean 
     */
    public function getCabezaMicrored()
    {
        return $this->cabezaMicrored;
    }

    /**
     * Set hospitalizacion
     *
     * @param boolean $hospitalizacion
     * @return CtlEstablecimiento
     */
    public function setHospitalizacion($hospitalizacion)
    {
        $this->hospitalizacion = $hospitalizacion;

        return $this;
    }

    /**
     * Get hospitalizacion
     *
     * @return boolean 
     */
    public function getHospitalizacion()
    {
        return $this->hospitalizacion;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return CtlEstablecimiento
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set ipUser
     *
     * @param string $ipUser
     * @return CtlEstablecimiento
     */
    public function setIpUser($ipUser)
    {
        $this->ipUser = $ipUser;

        return $this;
    }

    /**
     * Get ipUser
     *
     * @return string 
     */
    public function getIpUser()
    {
        return $this->ipUser;
    }

    /**
     * Set detalleSchema
     *
     * @param string $detalleSchema
     * @return CtlEstablecimiento
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
     * Set enableSchema
     *
     * @param boolean $enableSchema
     * @return CtlEstablecimiento
     */
    public function setEnableSchema($enableSchema)
    {
        $this->enableSchema = $enableSchema;

        return $this;
    }

    /**
     * Get enableSchema
     *
     * @return boolean 
     */
    public function getEnableSchema()
    {
        return $this->enableSchema;
    }

    /**
     * Set estadoSchema
     *
     * @param integer $estadoSchema
     * @return CtlEstablecimiento
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
     * Set idmicrored
     *
     * @param \Maestro\ModeloBundle\Entity\CtlMicrored $idmicrored
     * @return CtlEstablecimiento
     */
    public function setIdmicrored(\Maestro\ModeloBundle\Entity\CtlMicrored $idmicrored = null)
    {
        $this->idmicrored = $idmicrored;

        return $this;
    }

    /**
     * Get idmicrored
     *
     * @return \Maestro\ModeloBundle\Entity\CtlMicrored 
     */
    public function getIdmicrored()
    {
        return $this->idmicrored;
    }

    /**
     * Set idEstablecimientoPadre
     *
     * @param \Maestro\ModeloBundle\Entity\CtlEstablecimiento $idEstablecimientoPadre
     * @return CtlEstablecimiento
     */
    public function setIdEstablecimientoPadre(\Maestro\ModeloBundle\Entity\CtlEstablecimiento $idEstablecimientoPadre = null)
    {
        $this->idEstablecimientoPadre = $idEstablecimientoPadre;

        return $this;
    }

    /**
     * Get idEstablecimientoPadre
     *
     * @return \Maestro\ModeloBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimientoPadre()
    {
        return $this->idEstablecimientoPadre;
    }

    /**
     * Set idTipoEstablecimiento
     *
     * @param \Maestro\ModeloBundle\Entity\CtlTipoEstablecimiento $idTipoEstablecimiento
     * @return CtlEstablecimiento
     */
    public function setIdTipoEstablecimiento(\Maestro\ModeloBundle\Entity\CtlTipoEstablecimiento $idTipoEstablecimiento = null)
    {
        $this->idTipoEstablecimiento = $idTipoEstablecimiento;

        return $this;
    }

    /**
     * Get idTipoEstablecimiento
     *
     * @return \Maestro\ModeloBundle\Entity\CtlTipoEstablecimiento 
     */
    public function getIdTipoEstablecimiento()
    {
        return $this->idTipoEstablecimiento;
    }

    /**
     * Set idMunicipio
     *
     * @param \Maestro\ModeloBundle\Entity\CtlMunicipio $idMunicipio
     * @return CtlEstablecimiento
     */
    public function setIdMunicipio(\Maestro\ModeloBundle\Entity\CtlMunicipio $idMunicipio = null)
    {
        $this->idMunicipio = $idMunicipio;

        return $this;
    }

    /**
     * Get idMunicipio
     *
     * @return \Maestro\ModeloBundle\Entity\CtlMunicipio 
     */
    public function getIdMunicipio()
    {
        return $this->idMunicipio;
    }

    /**
     * Set idCatTipoConsumo
     *
     * @param \Maestro\ModeloBundle\Entity\CtlCatalogoDetalle $idCatTipoConsumo
     * @return CtlEstablecimiento
     */
    public function setIdCatTipoConsumo(\Maestro\ModeloBundle\Entity\CtlCatalogoDetalle $idCatTipoConsumo = null)
    {
        $this->idCatTipoConsumo = $idCatTipoConsumo;

        return $this;
    }

    /**
     * Get idCatTipoConsumo
     *
     * @return \Maestro\ModeloBundle\Entity\CtlCatalogoDetalle 
     */
    public function getIdCatTipoConsumo()
    {
        return $this->idCatTipoConsumo;
    }

    /**
     * Set idCatTipoFarmacia
     *
     * @param \Maestro\ModeloBundle\Entity\CtlCatalogoDetalle $idCatTipoFarmacia
     * @return CtlEstablecimiento
     */
    public function setIdCatTipoFarmacia(\Maestro\ModeloBundle\Entity\CtlCatalogoDetalle $idCatTipoFarmacia = null)
    {
        $this->idCatTipoFarmacia = $idCatTipoFarmacia;

        return $this;
    }

    /**
     * Get idCatTipoFarmacia
     *
     * @return \Maestro\ModeloBundle\Entity\CtlCatalogoDetalle 
     */
    public function getIdCatTipoFarmacia()
    {
        return $this->idCatTipoFarmacia;
    }

    /**
     * Set idCatTipoExpediente
     *
     * @param \Maestro\ModeloBundle\Entity\CtlCatalogoDetalle $idCatTipoExpediente
     * @return CtlEstablecimiento
     */
    public function setIdCatTipoExpediente(\Maestro\ModeloBundle\Entity\CtlCatalogoDetalle $idCatTipoExpediente = null)
    {
        $this->idCatTipoExpediente = $idCatTipoExpediente;

        return $this;
    }

    /**
     * Get idCatTipoExpediente
     *
     * @return \Maestro\ModeloBundle\Entity\CtlCatalogoDetalle 
     */
    public function getIdCatTipoExpediente()
    {
        return $this->idCatTipoExpediente;
    }

    /**
     * Set idCatPruebas
     *
     * @param \Maestro\ModeloBundle\Entity\CtlCatalogoDetalle $idCatPruebas
     * @return CtlEstablecimiento
     */
    public function setIdCatPruebas(\Maestro\ModeloBundle\Entity\CtlCatalogoDetalle $idCatPruebas = null)
    {
        $this->idCatPruebas = $idCatPruebas;

        return $this;
    }

    /**
     * Get idCatPruebas
     *
     * @return \Maestro\ModeloBundle\Entity\CtlCatalogoDetalle 
     */
    public function getIdCatPruebas()
    {
        return $this->idCatPruebas;
    }

    /**
     * Set idInstitucion
     *
     * @param \Maestro\ModeloBundle\Entity\CtlInstitucion $idInstitucion
     * @return CtlEstablecimiento
     */
    public function setIdInstitucion(\Maestro\ModeloBundle\Entity\CtlInstitucion $idInstitucion = null)
    {
        $this->idInstitucion = $idInstitucion;

        return $this;
    }

    /**
     * Get idInstitucion
     *
     * @return \Maestro\ModeloBundle\Entity\CtlInstitucion 
     */
    public function getIdInstitucion()
    {
        return $this->idInstitucion;
    }

    /**
     * Set idCatNivelMinsal
     *
     * @param \Maestro\ModeloBundle\Entity\CtlCatalogoDetalle $idCatNivelMinsal
     * @return CtlEstablecimiento
     */
    public function setIdCatNivelMinsal(\Maestro\ModeloBundle\Entity\CtlCatalogoDetalle $idCatNivelMinsal = null)
    {
        $this->idCatNivelMinsal = $idCatNivelMinsal;

        return $this;
    }

    /**
     * Get idCatNivelMinsal
     *
     * @return \Maestro\ModeloBundle\Entity\CtlCatalogoDetalle 
     */
    public function getIdCatNivelMinsal()
    {
        return $this->idCatNivelMinsal;
    }
}
