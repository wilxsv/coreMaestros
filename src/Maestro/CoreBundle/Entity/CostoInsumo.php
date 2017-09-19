<?php

namespace Maestro\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CostoInsumo
 */
class CostoInsumo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaCostoInsumo;

    /**
     * @var float
     */
    private $costoInsumo;

    /**
     * @var \Maestro\CoreBundle\Entity\CtlInsumo
     */
    private $insumo;


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
     * Set fechaCostoInsumo
     *
     * @param \DateTime $fechaCostoInsumo
     * @return CostoInsumo
     */
    public function setFechaCostoInsumo($fechaCostoInsumo)
    {
        $this->fechaCostoInsumo = $fechaCostoInsumo;

        return $this;
    }

    /**
     * Get fechaCostoInsumo
     *
     * @return \DateTime 
     */
    public function getFechaCostoInsumo()
    {
        return $this->fechaCostoInsumo;
    }

    /**
     * Set costoInsumo
     *
     * @param float $costoInsumo
     * @return CostoInsumo
     */
    public function setCostoInsumo($costoInsumo)
    {
        $this->costoInsumo = $costoInsumo;

        return $this;
    }

    /**
     * Get costoInsumo
     *
     * @return float 
     */
    public function getCostoInsumo()
    {
        return $this->costoInsumo;
    }

    /**
     * Set insumo
     *
     * @param \Maestro\CoreBundle\Entity\CtlInsumo $insumo
     * @return CostoInsumo
     */
    public function setInsumo(\Maestro\CoreBundle\Entity\CtlInsumo $insumo = null)
    {
        $this->insumo = $insumo;

        return $this;
    }

    /**
     * Get insumo
     *
     * @return \Maestro\CoreBundle\Entity\CtlInsumo 
     */
    public function getInsumo()
    {
        return $this->insumo;
    }
}
