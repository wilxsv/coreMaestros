<?php

namespace Maestro\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlRol
 */
class CtlRol
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreRol;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $acceso;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ctlAcceso;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->acceso = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ctlAcceso = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add acceso
     *
     * @param \Maestro\CoreBundle\Entity\CtlAcceso $acceso
     * @return CtlRol
     */
    public function addAcceso(\Maestro\CoreBundle\Entity\CtlAcceso $acceso)
    {
        $this->acceso[] = $acceso;

        return $this;
    }

    /**
     * Remove acceso
     *
     * @param \Maestro\CoreBundle\Entity\CtlAcceso $acceso
     */
    public function removeAcceso(\Maestro\CoreBundle\Entity\CtlAcceso $acceso)
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
     * @param \Maestro\CoreBundle\Entity\CtlAcceso $ctlAcceso
     * @return CtlRol
     */
    public function addCtlAcceso(\Maestro\CoreBundle\Entity\CtlAcceso $ctlAcceso)
    {
        $this->ctlAcceso[] = $ctlAcceso;

        return $this;
    }

    /**
     * Remove ctlAcceso
     *
     * @param \Maestro\CoreBundle\Entity\CtlAcceso $ctlAcceso
     */
    public function removeCtlAcceso(\Maestro\CoreBundle\Entity\CtlAcceso $ctlAcceso)
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
}
