<?php

namespace Minsal\SuministroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntSchema
 */
class MntSchema
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tablaSchema;

    /**
     * @var integer
     */
    private $indexTablaSchema;

    /**
     * @var string
     */
    private $varsSchema;

    /**
     * @var integer
     */
    private $tipoCambioSchema;

    /**
     * @var string
     */
    private $detalleSchema;

    /**
     * @var \DateTime
     */
    private $timeschema;


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
     * @return MntSchema
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
     * @return MntSchema
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
     * @return MntSchema
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
     * @return MntSchema
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
     * @return MntSchema
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
     * Set timeschema
     *
     * @param \DateTime $timeschema
     * @return MntSchema
     */
    public function setTimeschema($timeschema)
    {
        $this->timeschema = $timeschema;

        return $this;
    }

    /**
     * Get timeschema
     *
     * @return \DateTime 
     */
    public function getTimeschema()
    {
        return $this->timeschema;
    }
}
