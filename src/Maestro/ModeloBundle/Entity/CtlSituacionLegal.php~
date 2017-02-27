<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlSituacionLegal
 *
 * @ORM\Table(name="ctl_situacion_legal")
 * @ORM\Entity
 */
class CtlSituacionLegal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_situacion_legal_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_situacion", type="string", length=255, nullable=false)
     */
    private $tipoSituacion;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_situacion", type="text", nullable=true)
     */
    private $descripcionSituacion;



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
     * Set tipoSituacion
     *
     * @param string $tipoSituacion
     * @return CtlSituacionLegal
     */
    public function setTipoSituacion($tipoSituacion)
    {
        $this->tipoSituacion = $tipoSituacion;

        return $this;
    }

    /**
     * Get tipoSituacion
     *
     * @return string
     */
    public function getTipoSituacion()
    {
        return $this->tipoSituacion;
    }

    /**
     * Set descripcionSituacion
     *
     * @param string $descripcionSituacion
     * @return CtlSituacionLegal
     */
    public function setDescripcionSituacion($descripcionSituacion)
    {
        $this->descripcionSituacion = $descripcionSituacion;

        return $this;
    }

    /**
     * Get descripcionSituacion
     *
     * @return string
     */
    public function getDescripcionSituacion()
    {
        return $this->descripcionSituacion;
    }

    public function __toString() {
      return $this->getTipoSituacion();
    }
}
