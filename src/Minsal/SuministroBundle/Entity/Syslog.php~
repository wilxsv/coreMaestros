<?php

namespace Minsal\SuministroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Syslog
 */
class Syslog
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $registroLog;

    /**
     * @var string
     */
    private $descripcionLog;

    /**
     * @var \Minsal\SuministroBundle\Entity\MntLog
     */
    private $ctlLog;


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
     * Set registroLog
     *
     * @param \DateTime $registroLog
     * @return Syslog
     */
    public function setRegistroLog($registroLog)
    {
        $this->registroLog = $registroLog;

        return $this;
    }

    /**
     * Get registroLog
     *
     * @return \DateTime 
     */
    public function getRegistroLog()
    {
        return $this->registroLog;
    }

    /**
     * Set descripcionLog
     *
     * @param string $descripcionLog
     * @return Syslog
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

    /**
     * Set ctlLog
     *
     * @param \Minsal\SuministroBundle\Entity\MntLog $ctlLog
     * @return Syslog
     */
    public function setCtlLog(\Minsal\SuministroBundle\Entity\MntLog $ctlLog = null)
    {
        $this->ctlLog = $ctlLog;

        return $this;
    }

    /**
     * Get ctlLog
     *
     * @return \Minsal\SuministroBundle\Entity\MntLog 
     */
    public function getCtlLog()
    {
        return $this->ctlLog;
    }
}
