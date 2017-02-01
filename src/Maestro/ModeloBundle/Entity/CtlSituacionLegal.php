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
     * @var integer
     *
     * @ORM\Column(name="id_user", type="bigint", nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_user", type="string", nullable=false)
     */
    private $ipUser;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_schema", type="text", nullable=false)
     */
    private $detalleSchema;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enable_schema", type="boolean", nullable=false)
     */
    private $enableSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_schema", type="integer", nullable=false)
     */
    private $estadoSchema;



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

    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return CtlSituacionLegal
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set ipUser
     *
     * @param string $ipUser
     * @return CtlSituacionLegal
     */
    public function setIpUser($ipUser)
    {
        $this->ipUser = $ipUser;

        return $this;
    }

    /**
     * Get ipUser
     *
     * @return string 
     */
    public function getIpUser()
    {
        return $this->ipUser;
    }

    /**
     * Set detalleSchema
     *
     * @param string $detalleSchema
     * @return CtlSituacionLegal
     */
    public function setDetalleSchema($detalleSchema)
    {
        $this->detalleSchema = $detalleSchema;

        return $this;
    }

    /**
     * Get detalleSchema
     *
     * @return string 
     */
    public function getDetalleSchema()
    {
        return $this->detalleSchema;
    }

    /**
     * Set enableSchema
     *
     * @param boolean $enableSchema
     * @return CtlSituacionLegal
     */
    public function setEnableSchema($enableSchema)
    {
        $this->enableSchema = $enableSchema;

        return $this;
    }

    /**
     * Get enableSchema
     *
     * @return boolean 
     */
    public function getEnableSchema()
    {
        return $this->enableSchema;
    }

    /**
     * Set estadoSchema
     *
     * @param integer $estadoSchema
     * @return CtlSituacionLegal
     */
    public function setEstadoSchema($estadoSchema)
    {
        $this->estadoSchema = $estadoSchema;

        return $this;
    }

    /**
     * Get estadoSchema
     *
     * @return integer 
     */
    public function getEstadoSchema()
    {
        return $this->estadoSchema;
    }
}
