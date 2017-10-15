<?php

namespace Minsal\SuministroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SegAcceso
 */
class SegAcceso
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreAcceso;

    /**
     * @var string
     */
    private $pathAcceso;

    /**
     * @var boolean
     */
    private $publicAcceso;

    /**
     * @var integer
     */
    private $accesoId;

    /**
     * @var integer
     */
    private $ordenAcceso;

    /**
     * @var boolean
     */
    private $visibleAcceso;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CtlRol", inversedBy="SegAcceso")
     * @ORM\JoinTable(name="seg_role_acceso",
     *   joinColumns={
     *     @ORM\JoinColumn(name="acceso_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="role_id", referencedColumnName="id")
     *   }
     * )
     */
    private $role;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->role = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return SegAcceso
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
     * @return SegAcceso
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
     * @return SegAcceso
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
     * Set accesoId
     *
     * @param integer $accesoId
     * @return SegAcceso
     */
    public function setAccesoId($accesoId)
    {
        $this->accesoId = $accesoId;

        return $this;
    }

    /**
     * Get accesoId
     *
     * @return integer 
     */
    public function getAccesoId()
    {
        return $this->accesoId;
    }

    /**
     * Set ordenAcceso
     *
     * @param integer $ordenAcceso
     * @return SegAcceso
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
     * @return SegAcceso
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
     * Add role
     *
     * @param \Minsal\SuministroBundle\Entity\CtlRol $role
     * @return SegAcceso
     */
    public function addRole(\Minsal\SuministroBundle\Entity\CtlRol $role)
    {
        $this->role[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param \Minsal\SuministroBundle\Entity\CtlRol $role
     */
    public function removeRole(\Minsal\SuministroBundle\Entity\CtlRol $role)
    {
        $this->role->removeElement($role);
    }

    /**
     * Get role
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRole()
    {
        return $this->role;
    }
}
