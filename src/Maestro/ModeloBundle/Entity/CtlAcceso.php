<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlAcceso
 *
 * @ORM\Table(name="ctl_acceso")
 * @ORM\Entity
 */ 
class CtlAcceso
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_acceso_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     * 
     * @ORM\Column(name="nombre_acceso", type="string", length=150, nullable=false)
     */
    private $nombreAcceso;

    /**
     * @var string
     * 
     * @ORM\Column(name="path_acceso", type="string", length=150, nullable=false)
     */
    private $pathAcceso;

    /**
     * @var boolean
     * 
     * @ORM\Column(name="public_acceso", type="boolean", nullable=false)
     */
    private $publicAcceso;

    /**
     * @var integer
     * 
     * @ORM\Column(name="orden_acceso", type="bigint", nullable=false)
     */
    private $ordenAcceso;

    /**
     * @var string
     * 
     * @ORM\Column(name="rol_acceso_id", type="string", length=250, nullable=false)
     */
    private $rolAccesoId;

    /**
     * @var boolean
     *  
     * @ORM\Column(name="visible_acceso", type="boolean", nullable=false)
     */
    private $visibleAcceso;

    /**
     * @var \Maestro\ModeloBundle\Entity\CtlAcceso
     */
    private $acceso;


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
     * Set nombreAcceso
     *
     * @param string $nombreAcceso
     * @return CtlAcceso
     */
    public function setNombreAcceso($nombreAcceso)
    {
        $this->nombreAcceso = $nombreAcceso;

        return $this;
    }

    /**
     * Get nombreAcceso
     *
     * @return string 
     */
    public function getNombreAcceso()
    {
        return $this->nombreAcceso;
    }

    /**
     * Set pathAcceso
     *
     * @param string $pathAcceso
     * @return CtlAcceso
     */
    public function setPathAcceso($pathAcceso)
    {
        $this->pathAcceso = $pathAcceso;

        return $this;
    }

    /**
     * Get pathAcceso
     *
     * @return string 
     */
    public function getPathAcceso()
    {
        return $this->pathAcceso;
    }

    /**
     * Set publicAcceso
     *
     * @param boolean $publicAcceso
     * @return CtlAcceso
     */
    public function setPublicAcceso($publicAcceso)
    {
        $this->publicAcceso = $publicAcceso;

        return $this;
    }

    /**
     * Get publicAcceso
     *
     * @return boolean 
     */
    public function getPublicAcceso()
    {
        return $this->publicAcceso;
    }

    /**
     * Set ordenAcceso
     *
     * @param integer $ordenAcceso
     * @return CtlAcceso
     */
    public function setOrdenAcceso($ordenAcceso)
    {
        $this->ordenAcceso = $ordenAcceso;

        return $this;
    }

    /**
     * Get ordenAcceso
     *
     * @return integer 
     */
    public function getOrdenAcceso()
    {
        return $this->ordenAcceso;
    }

    /**
     * Set rolAccesoId
     *
     * @param string $rolAccesoId
     * @return CtlAcceso
     */
    public function setRolAccesoId($rolAccesoId)
    {
        $this->rolAccesoId = $rolAccesoId;

        return $this;
    }

    /**
     * Get rolAccesoId
     *
     * @return string 
     */
    public function getRolAccesoId()
    {
        return $this->rolAccesoId;
    }

    /**
     * Set visibleAcceso
     *
     * @param boolean $visibleAcceso
     * @return CtlAcceso
     */
    public function setVisibleAcceso($visibleAcceso)
    {
        $this->visibleAcceso = $visibleAcceso;

        return $this;
    }

    /**
     * Get visibleAcceso
     *
     * @return boolean 
     */
    public function getVisibleAcceso()
    {
        return $this->visibleAcceso;
    }

    /**
     * Set acceso
     *
     * @param \Maestro\ModeloBundle\Entity\CtlAcceso $acceso
     * @return CtlAcceso
     */
    public function setAcceso(\Maestro\ModeloBundle\Entity\CtlAcceso $acceso = null)
    {
        $this->acceso = $acceso;

        return $this;
    }

    /**
     * Get acceso
     *
     * @return \Maestro\ModeloBundle\Entity\CtlAcceso 
     */
    public function getAcceso()
    {
        return $this->acceso;
    }
    
    public function __toString() {
      return $this->nombreAcceso;
    }
}
