<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlProyecto
 *
 * @ORM\Table(name="ctl_proyecto", indexes={@ORM\Index(name="idx_622ee6ff19f7bfd", columns={"id_financiamiento"}), @ORM\Index(name="IDX_622EE6F73F8915", columns={"id_tipo_proyecto"})})
 * @ORM\Entity
 */
class CtlProyecto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_proyecto_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=150, nullable=false)
     */
    private $nombre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="date", nullable=true)
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin", type="date", nullable=true)
     */
    private $fechaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle", type="string", length=15, nullable=true)
     */
    private $detalle;

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
     * @var string
     *
     * @ORM\Column(name="monto", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $monto;

    /**
     * @var \CtlProyectoFinanciamiento
     *
     * @ORM\ManyToOne(targetEntity="CtlProyectoFinanciamiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_financiamiento", referencedColumnName="id")
     * })
     */
    private $idFinanciamiento;

    /**
     * @var \CtlTipoProyecto
     *
     * @ORM\ManyToOne(targetEntity="CtlTipoProyecto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_proyecto", referencedColumnName="id")
     * })
     */
    private $idTipoProyecto;



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
     * @return CtlProyecto
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
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return CtlProyecto
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
     * @return CtlProyecto
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
     * Set detalle
     *
     * @param string $detalle
     * @return CtlProyecto
     */
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;

        return $this;
    }

    /**
     * Get detalle
     *
     * @return string 
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return CtlProyecto
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
     * @return CtlProyecto
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
     * @return CtlProyecto
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
     * @return CtlProyecto
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
     * @return CtlProyecto
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
     * Set monto
     *
     * @param string $monto
     * @return CtlProyecto
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return string 
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set idFinanciamiento
     *
     * @param \Maestro\ModeloBundle\Entity\CtlProyectoFinanciamiento $idFinanciamiento
     * @return CtlProyecto
     */
    public function setIdFinanciamiento(\Maestro\ModeloBundle\Entity\CtlProyectoFinanciamiento $idFinanciamiento = null)
    {
        $this->idFinanciamiento = $idFinanciamiento;

        return $this;
    }

    /**
     * Get idFinanciamiento
     *
     * @return \Maestro\ModeloBundle\Entity\CtlProyectoFinanciamiento 
     */
    public function getIdFinanciamiento()
    {
        return $this->idFinanciamiento;
    }

    /**
     * Set idTipoProyecto
     *
     * @param \Maestro\ModeloBundle\Entity\CtlTipoProyecto $idTipoProyecto
     * @return CtlProyecto
     */
    public function setIdTipoProyecto(\Maestro\ModeloBundle\Entity\CtlTipoProyecto $idTipoProyecto = null)
    {
        $this->idTipoProyecto = $idTipoProyecto;

        return $this;
    }

    /**
     * Get idTipoProyecto
     *
     * @return \Maestro\ModeloBundle\Entity\CtlTipoProyecto 
     */
    public function getIdTipoProyecto()
    {
        return $this->idTipoProyecto;
    }
}
