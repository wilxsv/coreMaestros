<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlRol
 * 
 * @ORM\Table(name="ctl_rol")
 * @ORM\Entity
 */
class CtlRol
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_rol_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     * 
     * @ORM\Column(name="nombre_rol", type="string", length=50, nullable=false)
     */
    private $nombreRol;


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
}
