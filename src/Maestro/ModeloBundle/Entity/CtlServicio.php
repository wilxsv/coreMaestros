<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlServicio
 *
 * @ORM\Table(name="ctl_servicio", uniqueConstraints={@ORM\UniqueConstraint(name="ctl_servicio_nombre_servicio_key", columns={"nombre_servicio"})})
 * @ORM\Entity
 */
class CtlServicio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_servicio_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_servicio", type="string", length=255, nullable=false)
     */
    private $nombreServicio;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_servicio", type="text", nullable=true)
     */
    private $detalleServicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctl_servicioid", type="integer", nullable=false)
     */
    private $ctlServicioid;

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
     * Set nombreServicio
     *
     * @param string $nombreServicio
     * @return CtlServicio
     */
    public function setNombreServicio($nombreServicio)
    {
        $this->nombreServicio = $nombreServicio;

        return $this;
    }

    /**
     * Get nombreServicio
     *
     * @return string 
     */
    public function getNombreServicio()
    {
        return $this->nombreServicio;
    }

    /**
     * Set detalleServicio
     *
     * @param string $detalleServicio
     * @return CtlServicio
     */
    public function setDetalleServicio($detalleServicio)
    {
        $this->detalleServicio = $detalleServicio;

        return $this;
    }

    /**
     * Get detalleServicio
     *
     * @return string 
     */
    public function getDetalleServicio()
    {
        return $this->detalleServicio;
    }

    /**
     * Set ctlServicioid
     *
     * @param integer $ctlServicioid
     * @return CtlServicio
     */
    public function setCtlServicioid($ctlServicioid)
    {
        $this->ctlServicioid = $ctlServicioid;

        return $this;
    }

    /**
     * Get ctlServicioid
     *
     * @return integer 
     */
    public function getCtlServicioid()
    {
        return $this->ctlServicioid;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return CtlServicio
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
     * @return CtlServicio
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
     * @return CtlServicio
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
     * @return CtlServicio
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
     * @return CtlServicio
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
