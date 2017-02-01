<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlDependenciaEstablecimiento
 *
 * @ORM\Table(name="ctl_dependencia_establecimiento", indexes={@ORM\Index(name="idx_bc5984327dfa12f6", columns={"id_establecimiento"}), @ORM\Index(name="idx_bc5984322bf76b46", columns={"id_dependencia_padre"}), @ORM\Index(name="idx_bc598432ca22cd3f", columns={"id_dependencia_tipo"})})
 * @ORM\Entity
 */
class CtlDependenciaEstablecimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_dependencia_establecimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="date", nullable=false)
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin", type="date", nullable=true)
     */
    private $fechaFin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="habilitado", type="boolean", nullable=true)
     */
    private $habilitado;

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
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento", referencedColumnName="id")
     * })
     */
    private $idEstablecimiento;

    /**
     * @var \CtlDependenciaEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlDependenciaEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_dependencia_padre", referencedColumnName="id")
     * })
     */
    private $idDependenciaPadre;

    /**
     * @var \CtlDependenciaTipoDependencia
     *
     * @ORM\ManyToOne(targetEntity="CtlDependenciaTipoDependencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_dependencia_tipo", referencedColumnName="id")
     * })
     */
    private $idDependenciaTipo;



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
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return CtlDependenciaEstablecimiento
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return CtlDependenciaEstablecimiento
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime 
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set habilitado
     *
     * @param boolean $habilitado
     * @return CtlDependenciaEstablecimiento
     */
    public function setHabilitado($habilitado)
    {
        $this->habilitado = $habilitado;

        return $this;
    }

    /**
     * Get habilitado
     *
     * @return boolean 
     */
    public function getHabilitado()
    {
        return $this->habilitado;
    }

    /**
     * Set idUsuarioReg
     *
     * @param string $idUsuarioReg
     * @return CtlDependenciaEstablecimiento
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
     * @return CtlDependenciaEstablecimiento
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
     * @return CtlDependenciaEstablecimiento
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
     * @return CtlDependenciaEstablecimiento
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
     * Set idUser
     *
     * @param integer $idUser
     * @return CtlDependenciaEstablecimiento
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
     * @return CtlDependenciaEstablecimiento
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
     * @return CtlDependenciaEstablecimiento
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
     * @return CtlDependenciaEstablecimiento
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
     * @return CtlDependenciaEstablecimiento
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
     * Set idEstablecimiento
     *
     * @param \Maestro\ModeloBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return CtlDependenciaEstablecimiento
     */
    public function setIdEstablecimiento(\Maestro\ModeloBundle\Entity\CtlEstablecimiento $idEstablecimiento = null)
    {
        $this->idEstablecimiento = $idEstablecimiento;

        return $this;
    }

    /**
     * Get idEstablecimiento
     *
     * @return \Maestro\ModeloBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimiento()
    {
        return $this->idEstablecimiento;
    }

    /**
     * Set idDependenciaPadre
     *
     * @param \Maestro\ModeloBundle\Entity\CtlDependenciaEstablecimiento $idDependenciaPadre
     * @return CtlDependenciaEstablecimiento
     */
    public function setIdDependenciaPadre(\Maestro\ModeloBundle\Entity\CtlDependenciaEstablecimiento $idDependenciaPadre = null)
    {
        $this->idDependenciaPadre = $idDependenciaPadre;

        return $this;
    }

    /**
     * Get idDependenciaPadre
     *
     * @return \Maestro\ModeloBundle\Entity\CtlDependenciaEstablecimiento 
     */
    public function getIdDependenciaPadre()
    {
        return $this->idDependenciaPadre;
    }

    /**
     * Set idDependenciaTipo
     *
     * @param \Maestro\ModeloBundle\Entity\CtlDependenciaTipoDependencia $idDependenciaTipo
     * @return CtlDependenciaEstablecimiento
     */
    public function setIdDependenciaTipo(\Maestro\ModeloBundle\Entity\CtlDependenciaTipoDependencia $idDependenciaTipo = null)
    {
        $this->idDependenciaTipo = $idDependenciaTipo;

        return $this;
    }

    /**
     * Get idDependenciaTipo
     *
     * @return \Maestro\ModeloBundle\Entity\CtlDependenciaTipoDependencia 
     */
    public function getIdDependenciaTipo()
    {
        return $this->idDependenciaTipo;
    }
}
