<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlPermisos
 *
 * @ORM\Table(name="ctl_permisos", indexes={@ORM\Index(name="IDX_65B4E73555258FE8", columns={"acceso_id"})})
 * @ORM\Entity
 */
class CtlPermisos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rol_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $rolId;

    /**
     * @var \CtlAcceso
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="CtlAcceso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="acceso_id", referencedColumnName="id")
     * })
     */
    private $acceso;



    /**
     * Set rolId
     *
     * @param integer $rolId
     * @return CtlPermisos
     */
    public function setRolId($rolId)
    {
        $this->rolId = $rolId;

        return $this;
    }

    /**
     * Get rolId
     *
     * @return integer 
     */
    public function getRolId()
    {
        return $this->rolId;
    }

    /**
     * Set acceso
     *
     * @param \Maestro\ModeloBundle\Entity\CtlAcceso $acceso
     * @return CtlPermisos
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
}
