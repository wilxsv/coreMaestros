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
     * @var string
     *
     * @ORM\Column(name="tabla_schema", type="text", nullable=false)
     */
    private $tablaSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="index_tabla_schema", type="bigint", nullable=false)
     */
    private $indexTablaSchema;

    /**
     * @var string
     *
     * @ORM\Column(name="vars_schema", type="text", nullable=false)
     */
    private $varsSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_cambio_schema", type="integer", nullable=false)
     */
    private $tipoCambioSchema;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_schema", type="text", nullable=true)
     */
    private $detalleSchema;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_schema", type="datetime", nullable=true)
     */
    private $timeSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="bigint", nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_schema", type="string", nullable=false)
     */
    private $ipSchema;



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
     * Set tablaSchema
     *
     * @param string $tablaSchema
     * @return CtlSchema
     */
    public function setTablaSchema($tablaSchema)
    {
        $this->tablaSchema = $tablaSchema;

        return $this;
    }

    /**
     * Get tablaSchema
     *
     * @return string 
     */
    public function getTablaSchema()
    {
        return $this->tablaSchema;
    }

    /**
     * Set indexTablaSchema
     *
     * @param integer $indexTablaSchema
     * @return CtlSchema
     */
    public function setIndexTablaSchema($indexTablaSchema)
    {
        $this->indexTablaSchema = $indexTablaSchema;

        return $this;
    }

    /**
     * Get indexTablaSchema
     *
     * @return integer 
     */
    public function getIndexTablaSchema()
    {
        return $this->indexTablaSchema;
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
     * Set detalleSchema
     *
     * @param string $detalleSchema
     * @return CtlSchema
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
     * Set timeSchema
     *
     * @param \DateTime $timeSchema
     * @return CtlSchema
     */
    public function setTimeSchema($timeSchema)
    {
        $this->timeSchema = $timeSchema;

        return $this;
    }

    /**
     * Get timeSchema
     *
     * @return \DateTime 
     */
    public function getTimeSchema()
    {
        return $this->timeSchema;
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
}
