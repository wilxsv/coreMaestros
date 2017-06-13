<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlLog
 *
 * @ORM\Table(name="ctl_log")
 * @ORM\Entity
 */
class CtlLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_log_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_log", type="string", length=255, nullable=false)
     */
    private $nombreLog;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_log", type="text", nullable=true)
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
