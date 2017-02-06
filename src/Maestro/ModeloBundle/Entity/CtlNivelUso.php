<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlNivelUso
 *
 * @ORM\Table(name="ctl_nivel_uso", uniqueConstraints={@ORM\UniqueConstraint(name="ctl_nivel_uso_nombre_nivel_uso_key", columns={"nombre_nivel_uso"})})
 * @ORM\Entity
 */
class CtlNivelUso
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_nivel_uso_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_nivel_uso", type="string", length=255, nullable=false)
     */
    private $nombreNivelUso;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_nivel_uso", type="string", length=255, nullable=true)
     */
    private $detalleNivelUso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registro_schema", type="datetime", nullable=false)
     */
    private $registroSchema;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_schema", type="text", nullable=false)
     */
    private $detalleSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id_schema", type="bigint", nullable=false)
     */
    private $userIdSchema;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_user_schema", type="string", nullable=false)
     */
    private $ipUserSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_schema", type="integer", nullable=false)
     */
    private $estadoSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="enable_schema", type="integer", nullable=false)
     */
    private $enableSchema;



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
     * Set nombreNivelUso
     *
     * @param string $nombreNivelUso
     * @return CtlNivelUso
     */
    public function setNombreNivelUso($nombreNivelUso)
    {
        $this->nombreNivelUso = $nombreNivelUso;

        return $this;
    }

    /**
     * Get nombreNivelUso
     *
     * @return string
     */
    public function getNombreNivelUso()
    {
        return $this->nombreNivelUso;
    }

    /**
     * Set detalleNivelUso
     *
     * @param string $detalleNivelUso
     * @return CtlNivelUso
     */
    public function setDetalleNivelUso($detalleNivelUso)
    {
        $this->detalleNivelUso = $detalleNivelUso;

        return $this;
    }

    /**
     * Get detalleNivelUso
     *
     * @return string
     */
    public function getDetalleNivelUso()
    {
        return $this->detalleNivelUso;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     * @return CtlNivelUso
     */
    public function setRegistroSchema($registroSchema)
    {
        $this->registroSchema = $registroSchema;

        return $this;
    }

    /**
     * Get registroSchema
     *
     * @return \DateTime
     */
    public function getRegistroSchema()
    {
        return $this->registroSchema;
    }

    /**
     * Set detalleSchema
     *
     * @param string $detalleSchema
     * @return CtlNivelUso
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
     * Set userIdSchema
     *
     * @param integer $userIdSchema
     * @return CtlNivelUso
     */
    public function setUserIdSchema($userIdSchema)
    {
        $this->userIdSchema = $userIdSchema;

        return $this;
    }

    /**
     * Get userIdSchema
     *
     * @return integer
     */
    public function getUserIdSchema()
    {
        return $this->userIdSchema;
    }

    /**
     * Set ipUserSchema
     *
     * @param string $ipUserSchema
     * @return CtlNivelUso
     */
    public function setIpUserSchema($ipUserSchema)
    {
        $this->ipUserSchema = $ipUserSchema;

        return $this;
    }

    /**
     * Get ipUserSchema
     *
     * @return string
     */
    public function getIpUserSchema()
    {
        return $this->ipUserSchema;
    }

    /**
     * Set estadoSchema
     *
     * @param integer $estadoSchema
     * @return CtlNivelUso
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

    /**
     * Set enableSchema
     *
     * @param integer $enableSchema
     * @return CtlNivelUso
     */
    public function setEnableSchema($enableSchema)
    {
        $this->enableSchema = $enableSchema;

        return $this;
    }

    /**
     * Get enableSchema
     *
     * @return integer
     */
    public function getEnableSchema()
    {
        return $this->enableSchema;
    }

    public function __toString(){
      return $this->nombreNivelUso;
    }
}
