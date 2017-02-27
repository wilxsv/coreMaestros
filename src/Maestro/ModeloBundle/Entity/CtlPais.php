<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlPais
 *
 * @ORM\Table(name="ctl_pais", uniqueConstraints={@ORM\UniqueConstraint(name="ctl_pais_dominio2_key", columns={"dominio2"}), @ORM\UniqueConstraint(name="ctl_pais_dominio3_key", columns={"dominio3"}), @ORM\UniqueConstraint(name="ctl_pais_isonumero_key", columns={"isonumero"})})
 * @ORM\Entity
 */
class CtlPais
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_pais_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=150, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="dominio2", type="string", length=2, nullable=true)
     */
    private $dominio2;

    /**
     * @var string
     *
     * @ORM\Column(name="dominio3", type="string", length=3, nullable=true)
     */
    private $dominio3;

    /**
     * @var integer
     *
     * @ORM\Column(name="isonumero", type="integer", nullable=false)
     */
    private $isonumero;

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
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false)
     */
    private $activo;



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
     * @return CtlPais
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
     * Set dominio2
     *
     * @param string $dominio2
     * @return CtlPais
     */
    public function setDominio2($dominio2)
    {
        $this->dominio2 = $dominio2;

        return $this;
    }

    /**
     * Get dominio2
     *
     * @return string 
     */
    public function getDominio2()
    {
        return $this->dominio2;
    }

    /**
     * Set dominio3
     *
     * @param string $dominio3
     * @return CtlPais
     */
    public function setDominio3($dominio3)
    {
        $this->dominio3 = $dominio3;

        return $this;
    }

    /**
     * Get dominio3
     *
     * @return string 
     */
    public function getDominio3()
    {
        return $this->dominio3;
    }

    /**
     * Set isonumero
     *
     * @param integer $isonumero
     * @return CtlPais
     */
    public function setIsonumero($isonumero)
    {
        $this->isonumero = $isonumero;

        return $this;
    }

    /**
     * Get isonumero
     *
     * @return integer 
     */
    public function getIsonumero()
    {
        return $this->isonumero;
    }

    /**
     * Set idUsuarioReg
     *
     * @param string $idUsuarioReg
     * @return CtlPais
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
     * @return CtlPais
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
     * @return CtlPais
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
     * @return CtlPais
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
     * Set activo
     *
     * @param boolean $activo
     * @return CtlPais
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
}
