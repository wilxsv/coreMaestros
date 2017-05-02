<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlRol
 * @ORM\Table(name="ctl_rol")
 * @ORM\Entity
 */
class CtlRol
{
    /**
     * @var integer
     * 
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_rol_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     * 
     * @ORM\Column(name="nombre_rol", type="string", length=255, nullable=false)
     */
    private $nombreRol;


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
     * Set nombreRol
     *
     * @param string $nombreRol
     * @return CtlRol
     */
    public function setNombreRol($nombreRol)
    {
        $this->nombreRol = $nombreRol;

        return $this;
    }

    /**
     * Get nombreRol
     *
     * @return string 
     */
    public function getNombreRol()
    {
        return $this->nombreRol;
    }
    
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ctlAcceso;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ctlAcceso = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ctlAcceso
     *
     * @param \Maestro\ModeloBundle\Entity\CtlAcceso $ctlAcceso
     * @return CtlRol
     */
    public function addCtlAcceso(\Maestro\ModeloBundle\Entity\CtlAcceso $ctlAcceso)
    {
        $this->ctlAcceso[] = $ctlAcceso;

        return $this;
    }

    /**
     * Remove ctlAcceso
     *
     * @param \Maestro\ModeloBundle\Entity\CtlAcceso $ctlAcceso
     */
    public function removeCtlAcceso(\Maestro\ModeloBundle\Entity\CtlAcceso $ctlAcceso)
    {
        $this->ctlAcceso->removeElement($ctlAcceso);
    }

    /**
     * Get ctlAcceso
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCtlAcceso()
    {
        return $this->ctlAcceso;
    }
    
    public function __toString() {
		return $this->getNombreRol();
	}

}
