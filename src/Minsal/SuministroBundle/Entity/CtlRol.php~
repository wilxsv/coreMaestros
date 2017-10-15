<?php

namespace Minsal\SuministroBundle\Entity;

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
     * @param \Minsal\SuministroBundle\Entity\SegAcceso $acceso
     * @return CtlRol
     */
    public function addAcceso(\Minsal\SuministroBundle\Entity\SegAcceso $acceso)
    {
        $this->acceso[] = $acceso;

        return $this;
    }

    /**
     * Remove acceso
     *
     * @param \Minsal\SuministroBundle\Entity\SegAcceso $acceso
     */
    public function removeAcceso(\Minsal\SuministroBundle\Entity\SegAcceso $acceso)
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
     * @param \Minsal\SuministroBundle\Entity\SegAcceso $ctlAcceso
     * @return CtlRol
     */
    public function addCtlAcceso(\Minsal\SuministroBundle\Entity\SegAcceso $ctlAcceso)
    {
        $this->ctlAcceso[] = $ctlAcceso;

        return $this;
    }

    /**
     * Remove ctlAcceso
     *
     * @param \Minsal\SuministroBundle\Entity\SegAcceso $ctlAcceso
     */
    public function removeCtlAcceso(\Minsal\SuministroBundle\Entity\SegAcceso $ctlAcceso)
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
    
    public function __toString()
    {
        return $this->getNombreRol();
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $grupos;


    /**
     * Add grupos
     *
     * @param \Minsal\SuministroBundle\Entity\CtlGrupo $grupos
     * @return CtlRol
     */
    public function addGrupo(\Minsal\SuministroBundle\Entity\CtlGrupo $grupos)
    {
        $this->grupos[] = $grupos;

        return $this;
    }

    /**
     * Remove grupos
     *
     * @param \Minsal\SuministroBundle\Entity\CtlGrupo $grupos
     */
    public function removeGrupo(\Minsal\SuministroBundle\Entity\CtlGrupo $grupos)
    {
        $this->grupos->removeElement($grupos);
    }

    /**
     * Get grupos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGrupos()
    {
        return $this->grupos;
    }
}
