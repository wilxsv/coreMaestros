<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlSchema
 *
 * @ORM\Table(name="ctl_schema")
 * @ORM\Entity
 */
class CtlSchema
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_schema_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registro_schema", type="datetime", nullable=true)
     */
    private $registroSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="bigint", nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="vars_schema", type="text", nullable=false)
     */
    private $varsSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_cambio_schema", type="smallint", nullable=false)
     */
    private $tipoCambioSchema;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_schema", type="string", nullable=false)
     */
    private $ipSchema;

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
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     * @return CtlSchema
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
     * Set userId
     *
     * @param integer $userId
     * @return CtlSchema
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set varsSchema
     *
     * @param string $varsSchema
     * @return CtlSchema
     */
    public function setVarsSchema($varsSchema)
    {
        $this->varsSchema = $varsSchema;

        return $this;
    }

    /**
     * Get varsSchema
     *
     * @return string 
     */
    public function getVarsSchema()
    {
        return $this->varsSchema;
    }

    /**
     * Set tipoCambioSchema
     *
     * @param integer $tipoCambioSchema
     * @return CtlSchema
     */
    public function setTipoCambioSchema($tipoCambioSchema)
    {
        $this->tipoCambioSchema = $tipoCambioSchema;

        return $this;
    }

    /**
     * Get tipoCambioSchema
     *
     * @return integer 
     */
    public function getTipoCambioSchema()
    {
        return $this->tipoCambioSchema;
    }

    /**
     * Set ipSchema
     *
     * @param string $ipSchema
     * @return CtlSchema
     */
    public function setIpSchema($ipSchema)
    {
        $this->ipSchema = $ipSchema;

        return $this;
    }

    /**
     * Get ipSchema
     *
     * @return string 
     */
    public function getIpSchema()
    {
        return $this->ipSchema;
    }

    /**
     * Set estadoSchema
     *
     * @param integer $estadoSchema
     * @return CtlSchema
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
