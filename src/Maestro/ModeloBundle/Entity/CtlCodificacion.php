<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlCodificacion
 *
 * @ORM\Table(name="ctl_codificacion", uniqueConstraints={@ORM\UniqueConstraint(name="un_nombre_codificacion", columns={"nombre_codificacion"})})
 * @ORM\Entity
 */
class CtlCodificacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_codificacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_codificacion", type="string", length=250, nullable=false)
     */
    private $nombreCodificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="metodo_codificacion", type="text", nullable=true)
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
    
    public function __toString()
    {
		return $this->getNombreCodificacion();
    }
}
