<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlAcceso
 *
 * @ORM\Table(name="ctl_acceso", indexes={@ORM\Index(name="IDX_8566BFCE55258FE8", columns={"acceso_id"})})
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
     * @ORM\Column(name="nombre_acceso", type="string", length=250, nullable=false)
     */
    private $nombreAcceso;

    /**
     * @var string
     *
     * @ORM\Column(name="path_acceso", type="string", length=250, nullable=false)
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
     * @ORM\Column(name="orden_acceso", type="integer", nullable=false)
     */
    private $ordenAcceso;

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible_acceso", type="boolean", nullable=false)
     */
    private $visibleAcceso;

    /**
     * @var \CtlAcceso
     *
     * @ORM\ManyToOne(targetEntity="CtlAcceso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="acceso_id", referencedColumnName="id")
     * })
     */
    private $acceso;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CtlRol", inversedBy="CtlAcceso")
     * @ORM\JoinTable(name="ctl_permisos",
     *   joinColumns={
     *     @ORM\JoinColumn(name="acceso_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="rol_id", referencedColumnName="id")
     *   }
     * )
     */
    private $ctlRol;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ctlRol = new \Doctrine\Common\Collections\ArrayCollection();
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
    
    public function __toString(){
		return $this->getNombreAcceso();
	}

    /**
     * Add ctlRol
     *
     * @param \Maestro\ModeloBundle\Entity\CtlRol $ctlRol
     * @return CtlAcceso
     */
    public function addCtlRol(\Maestro\ModeloBundle\Entity\CtlRol $ctlRol)
    {
        $this->ctlRol[] = $ctlRol;

        return $this;
    }

    /**
     * Remove ctlRol
     *
     * @param \Maestro\ModeloBundle\Entity\CtlRol $ctlRol
     */
    public function removeCtlRol(\Maestro\ModeloBundle\Entity\CtlRol $ctlRol)
    {
        $this->ctlRol->removeElement($ctlRol);
    }

    /**
     * Get b
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCtlRol()
    {
        return $this->ctlRol;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $rol;


    /**
     * Add rol
     *
     * @param \Maestro\ModeloBundle\Entity\CtlRol $rol
     * @return CtlAcceso
     */
    public function addRol(\Maestro\ModeloBundle\Entity\CtlRol $rol)
    {
        $this->rol[] = $rol;

        return $this;
    }

    /**
     * Remove rol
     *
     * @param \Maestro\ModeloBundle\Entity\CtlRol $rol
     */
    public function removeRol(\Maestro\ModeloBundle\Entity\CtlRol $rol)
    {
        $this->rol->removeElement($rol);
    }

    /**
     * Get rol
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRol()
    {
        return $this->rol;
    }
}
