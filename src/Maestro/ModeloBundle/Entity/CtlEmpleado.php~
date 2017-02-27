<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlEmpleado
 *
 * @ORM\Table(name="ctl_empleado", indexes={@ORM\Index(name="IDX_B0295384D56B1641", columns={"id_cargo"}), @ORM\Index(name="IDX_B0295384ECE7D7A8", columns={"id_nivel_academico"}), @ORM\Index(name="IDX_B0295384A7194A90", columns={"id_sexo"})})
 * @ORM\Entity
 */
class CtlEmpleado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_empleado_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=100, nullable=true)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="correo_electronico_institucional", type="string", length=50, nullable=true)
     */
    private $correoElectronicoInstitucional;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_usuario_reg", type="smallint", nullable=true)
     */
    private $idUsuarioReg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_hora_reg", type="datetime", nullable=true)
     */
    private $fechaHoraReg;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_usuario_mod", type="smallint", nullable=true)
     */
    private $idUsuarioMod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_hora_mod", type="datetime", nullable=true)
     */
    private $fechaHoraMod;

    /**
     * @var \CtlCargoEmpleado
     *
     * @ORM\ManyToOne(targetEntity="CtlCargoEmpleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cargo", referencedColumnName="id")
     * })
     */
    private $idCargo;

    /**
     * @var \CtlCatalogoDetalle
     *
     * @ORM\ManyToOne(targetEntity="CtlCatalogoDetalle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_nivel_academico", referencedColumnName="id")
     * })
     */
    private $idNivelAcademico;

    /**
     * @var \CtlCatalogoDetalle
     *
     * @ORM\ManyToOne(targetEntity="CtlCatalogoDetalle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sexo", referencedColumnName="id")
     * })
     */
    private $idSexo;



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
     * @return CtlEmpleado
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
     * Set apellido
     *
     * @param string $apellido
     * @return CtlEmpleado
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set correoElectronicoInstitucional
     *
     * @param string $correoElectronicoInstitucional
     * @return CtlEmpleado
     */
    public function setCorreoElectronicoInstitucional($correoElectronicoInstitucional)
    {
        $this->correoElectronicoInstitucional = $correoElectronicoInstitucional;

        return $this;
    }

    /**
     * Get correoElectronicoInstitucional
     *
     * @return string 
     */
    public function getCorreoElectronicoInstitucional()
    {
        return $this->correoElectronicoInstitucional;
    }

    /**
     * Set idUsuarioReg
     *
     * @param integer $idUsuarioReg
     * @return CtlEmpleado
     */
    public function setIdUsuarioReg($idUsuarioReg)
    {
        $this->idUsuarioReg = $idUsuarioReg;

        return $this;
    }

    /**
     * Get idUsuarioReg
     *
     * @return integer 
     */
    public function getIdUsuarioReg()
    {
        return $this->idUsuarioReg;
    }

    /**
     * Set fechaHoraReg
     *
     * @param \DateTime $fechaHoraReg
     * @return CtlEmpleado
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
     * @param integer $idUsuarioMod
     * @return CtlEmpleado
     */
    public function setIdUsuarioMod($idUsuarioMod)
    {
        $this->idUsuarioMod = $idUsuarioMod;

        return $this;
    }

    /**
     * Get idUsuarioMod
     *
     * @return integer 
     */
    public function getIdUsuarioMod()
    {
        return $this->idUsuarioMod;
    }

    /**
     * Set fechaHoraMod
     *
     * @param \DateTime $fechaHoraMod
     * @return CtlEmpleado
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
     * Set idCargo
     *
     * @param \Maestro\ModeloBundle\Entity\CtlCargoEmpleado $idCargo
     * @return CtlEmpleado
     */
    public function setIdCargo(\Maestro\ModeloBundle\Entity\CtlCargoEmpleado $idCargo = null)
    {
        $this->idCargo = $idCargo;

        return $this;
    }

    /**
     * Get idCargo
     *
     * @return \Maestro\ModeloBundle\Entity\CtlCargoEmpleado 
     */
    public function getIdCargo()
    {
        return $this->idCargo;
    }

    /**
     * Set idNivelAcademico
     *
     * @param \Maestro\ModeloBundle\Entity\CtlCatalogoDetalle $idNivelAcademico
     * @return CtlEmpleado
     */
    public function setIdNivelAcademico(\Maestro\ModeloBundle\Entity\CtlCatalogoDetalle $idNivelAcademico = null)
    {
        $this->idNivelAcademico = $idNivelAcademico;

        return $this;
    }

    /**
     * Get idNivelAcademico
     *
     * @return \Maestro\ModeloBundle\Entity\CtlCatalogoDetalle 
     */
    public function getIdNivelAcademico()
    {
        return $this->idNivelAcademico;
    }

    /**
     * Set idSexo
     *
     * @param \Maestro\ModeloBundle\Entity\CtlCatalogoDetalle $idSexo
     * @return CtlEmpleado
     */
    public function setIdSexo(\Maestro\ModeloBundle\Entity\CtlCatalogoDetalle $idSexo = null)
    {
        $this->idSexo = $idSexo;

        return $this;
    }

    /**
     * Get idSexo
     *
     * @return \Maestro\ModeloBundle\Entity\CtlCatalogoDetalle 
     */
    public function getIdSexo()
    {
        return $this->idSexo;
    }
}
