<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Syslog
 *
 * @ORM\Table(name="syslog", indexes={@ORM\Index(name="IDX_C142E2D77D699553", columns={"ctl_log_id"})})
 * @ORM\Entity
 */
class Syslog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="syslog_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registro_log", type="datetime", nullable=false)
     */
    private $registroLog;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_log", type="text", nullable=true)
     */
    private $descripcionLog;

    /**
     * @var \CtlLog
     *
     * @ORM\ManyToOne(targetEntity="CtlLog")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ctl_log_id", referencedColumnName="id")
     * })
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
     * @param \Maestro\ModeloBundle\Entity\CtlLog $ctlLog
     * @return Syslog
     */
    public function setCtlLog(\Maestro\ModeloBundle\Entity\CtlLog $ctlLog = null)
    {
        $this->ctlLog = $ctlLog;

        return $this;
    }

    /**
     * Get ctlLog
     *
     * @return \Maestro\ModeloBundle\Entity\CtlLog 
     */
    public function getCtlLog()
    {
        return $this->ctlLog;
    }
}
