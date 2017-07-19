<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlRol
 *
 * @ORM\Table(name="ctl_rol", uniqueConstraints={@ORM\UniqueConstraint(name="un_nombre_rol", columns={"nombre_rol"})})
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
     * @ORM\Column(name="nombre_rol", type="string", length=50, nullable=false)
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
     *
     * @ORM\ManyToMany(targetEntity="CtlAcceso", mappedBy="CtlRol")
     * @ORM\JoinTable(name="ctl_permisos")
     *  
     */
    private $ctlAcceso;

    /**
     * Constructor
     */
    public function __construct()
    {
        //$this->ctlAcceso = new \Doctrine\Common\Collections\ArrayCollection();
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
    
    public function __toString(){
		return $this->getNombreRol();
	}
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $acceso;


    /**
     * Add acceso
     *
     * @param \Maestro\ModeloBundle\Entity\CtlAcceso $acceso
     * @return CtlRol
     */
    public function addAcceso(\Maestro\ModeloBundle\Entity\CtlAcceso $acceso)
    {
        $this->acceso[] = $acceso;

        return $this;
    }

    /**
     * Remove acceso
     *
     * @param \Maestro\ModeloBundle\Entity\CtlAcceso $acceso
     */
    public function removeAcceso(\Maestro\ModeloBundle\Entity\CtlAcceso $acceso)
    {
        $this->acceso->removeElement($acceso);
    }

    /**
     * Get acceso
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAcceso()
    {
        return $this->acceso;
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
}
