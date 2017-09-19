<?php

namespace Maestro\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlLog
 */
class CtlLog
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreLog;

    /**
     * @var string
     */
    private $descripcionLog;


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
     * Set nombreLog
     *
     * @param string $nombreLog
     * @return CtlLog
     */
    public function setNombreLog($nombreLog)
    {
        $this->nombreLog = $nombreLog;

        return $this;
    }

    /**
     * Get nombreLog
     *
     * @return string 
     */
    public function getNombreLog()
    {
        return $this->nombreLog;
    }

    /**
     * Set descripcionLog
     *
     * @param string $descripcionLog
     * @return CtlLog
     */
    public function setDescripcionLog($descripcionLog)
    {
        $this->descripcionLog = $descripcionLog;

        return $this;
    }

    /**
     * Get descripcionLog
     *
     * @return string 
     */
    public function getDescripcionLog()
    {
        return $this->descripcionLog;
    }
}
