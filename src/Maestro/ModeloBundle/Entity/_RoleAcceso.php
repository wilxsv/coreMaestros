<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RoleAcceso
 */
class RoleAcceso
{
    /**
     * @var integer
     */
    private $ctlRoleId;

    /**
     * @var integer
     */
    private $ctlAccesoId;


    /**
     * Set ctlRoleId
     *
     * @param integer $ctlRoleId
     * @return RoleAcceso
     */
    public function setCtlRoleId($ctlRoleId)
    {
        $this->ctlRoleId = $ctlRoleId;

        return $this;
    }

    /**
     * Get ctlRoleId
     *
     * @return integer 
     */
    public function getCtlRoleId()
    {
        return $this->ctlRoleId;
    }

    /**
     * Set ctlAccesoId
     *
     * @param integer $ctlAccesoId
     * @return RoleAcceso
     */
    public function setCtlAccesoId($ctlAccesoId)
    {
        $this->ctlAccesoId = $ctlAccesoId;

        return $this;
    }

    /**
     * Get ctlAccesoId
     *
     * @return integer 
     */
    public function getCtlAccesoId()
    {
        return $this->ctlAccesoId;
    }
}
