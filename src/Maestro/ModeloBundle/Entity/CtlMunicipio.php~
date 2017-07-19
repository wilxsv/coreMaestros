<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlMunicipio
 * 
 * @ORM\Table(name="ctl_municipio")
 * @ORM\Entity
 */
class CtlMunicipio
{
    /**
     * @var integer
     * 
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_municipio_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $codigoCnr;

    /**
     * @var string
     */
    private $abreviatura;

    /**
     * @var string
     */
    private $idUsuarioReg;

    /**
     * @var \DateTime
     */
    private $fechaHoraReg;

    /**
     * @var string
     */
    private $idUsuarioMod;

    /**
     * @var \DateTime
     */
    private $fechaHoraMod;

    /**
     * @var boolean
     */
    private $cabecera;

    /**
     * @var \Maestro\ModeloBundle\Entity\CtlDepartamento
     */
    private $idDepartamento;


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
     * @return CtlMunicipio
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
     * Set codigoCnr
     *
     * @param string $codigoCnr
     * @return CtlMunicipio
     */
    public function setCodigoCnr($codigoCnr)
    {
        $this->codigoCnr = $codigoCnr;

        return $this;
    }

    /**
     * Get codigoCnr
     *
     * @return string 
     */
    public function getCodigoCnr()
    {
        return $this->codigoCnr;
    }

    /**
     * Set abreviatura
     *
     * @param string $abreviatura
     * @return CtlMunicipio
     */
    public function setAbreviatura($abreviatura)
    {
        $this->abreviatura = $abreviatura;

        return $this;
    }

    /**
     * Get abreviatura
     *
     * @return string 
     */
    public function getAbreviatura()
    {
        return $this->abreviatura;
    }

    /**
     * Set idUsuarioReg
     *
     * @param string $idUsuarioReg
     * @return CtlMunicipio
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
     * @return CtlMunicipio
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
     * @return CtlMunicipio
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
     * @return CtlMunicipio
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
     * Set cabecera
     *
     * @param boolean $cabecera
     * @return CtlMunicipio
     */
    public function setCabecera($cabecera)
    {
        $this->cabecera = $cabecera;

        return $this;
    }

    /**
     * Get cabecera
     *
     * @return boolean 
     */
    public function getCabecera()
    {
        return $this->cabecera;
    }

    /**
     * Set idDepartamento
     *
     * @param \Maestro\ModeloBundle\Entity\CtlDepartamento $idDepartamento
     * @return CtlMunicipio
     */
    public function setIdDepartamento(\Maestro\ModeloBundle\Entity\CtlDepartamento $idDepartamento = null)
    {
        $this->idDepartamento = $idDepartamento;

        return $this;
    }

    /**
     * Get idDepartamento
     *
     * @return \Maestro\ModeloBundle\Entity\CtlDepartamento 
     */
    public function getIdDepartamento()
    {
        return $this->idDepartamento;
    }
}
