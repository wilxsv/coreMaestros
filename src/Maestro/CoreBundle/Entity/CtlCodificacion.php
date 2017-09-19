<?php

namespace Maestro\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlCodificacion
 */
class CtlCodificacion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreCodificacion;

    /**
     * @var string
     */
    private $metodoCodificacion;


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
     * Set nombreCodificacion
     *
     * @param string $nombreCodificacion
     * @return CtlCodificacion
     */
    public function setNombreCodificacion($nombreCodificacion)
    {
        $this->nombreCodificacion = $nombreCodificacion;

        return $this;
    }

    /**
     * Get nombreCodificacion
     *
     * @return string 
     */
    public function getNombreCodificacion()
    {
        return $this->nombreCodificacion;
    }

    /**
     * Set metodoCodificacion
     *
     * @param string $metodoCodificacion
     * @return CtlCodificacion
     */
    public function setMetodoCodificacion($metodoCodificacion)
    {
        $this->metodoCodificacion = $metodoCodificacion;

        return $this;
    }

    /**
     * Get metodoCodificacion
     *
     * @return string 
     */
    public function getMetodoCodificacion()
    {
        return $this->metodoCodificacion;
    }
}
