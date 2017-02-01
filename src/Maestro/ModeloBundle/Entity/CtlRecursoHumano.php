<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlRecursoHumano
 *
 * @ORM\Table(name="ctl_recurso_humano", uniqueConstraints={@ORM\UniqueConstraint(name="ctl_recurso_humano_nombre_recurso_humano_key", columns={"nombre_recurso_humano"})})
 * @ORM\Entity
 */
class CtlRecursoHumano
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_recurso_humano_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_recurso_humano", type="string", length=255, nullable=false)
     */
    private $nombreRecursoHumano;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_recurso_humano", type="text", nullable=true)
     */
    private $detalleRecursoHumano;

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
     * Set nombreRecursoHumano
     *
     * @param string $nombreRecursoHumano
     * @return CtlRecursoHumano
     */
    public function setNombreRecursoHumano($nombreRecursoHumano)
    {
        $this->nombreRecursoHumano = $nombreRecursoHumano;

        return $this;
    }

    /**
     * Get nombreRecursoHumano
     *
     * @return string 
     */
    public function getNombreRecursoHumano()
    {
        return $this->nombreRecursoHumano;
    }

    /**
     * Set detalleRecursoHumano
     *
     * @param string $detalleRecursoHumano
     * @return CtlRecursoHumano
     */
    public function setDetalleRecursoHumano($detalleRecursoHumano)
    {
        $this->detalleRecursoHumano = $detalleRecursoHumano;

        return $this;
    }

    /**
     * Get detalleRecursoHumano
     *
     * @return string 
     */
    public function getDetalleRecursoHumano()
    {
        return $this->detalleRecursoHumano;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return CtlRecursoHumano
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
     * @return CtlRecursoHumano
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
     * @return CtlRecursoHumano
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
     * @return CtlRecursoHumano
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
     * @return CtlRecursoHumano
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
