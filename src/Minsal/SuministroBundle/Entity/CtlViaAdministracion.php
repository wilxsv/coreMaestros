<?php

namespace Minsal\SuministroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlViaAdministracion
 */
class CtlViaAdministracion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreViaAdministracion;

    /**
     * @var string
     */
    private $detalleViaAdministracion;

    /**
     * @var \DateTime
     */
    private $registroSchema;

    /**
     * @var string
     */
    private $detalleSchema;

    /**
     * @var integer
     */
    private $userIdSchema;

    /**
     * @var string
     */
    private $userIpSchema;

    /**
     * @var integer
     */
    private $estadoSchema;

    /**
     * @var integer
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
     * Set nombreViaAdministracion
     *
     * @param string $nombreViaAdministracion
     * @return CtlViaAdministracion
     */
    public function setNombreViaAdministracion($nombreViaAdministracion)
    {
        $this->nombreViaAdministracion = $nombreViaAdministracion;

        return $this;
    }

    /**
     * Get nombreViaAdministracion
     *
     * @return string 
     */
    public function getNombreViaAdministracion()
    {
        return $this->nombreViaAdministracion;
    }

    /**
     * Set detalleViaAdministracion
     *
     * @param string $detalleViaAdministracion
     * @return CtlViaAdministracion
     */
    public function setDetalleViaAdministracion($detalleViaAdministracion)
    {
        $this->detalleViaAdministracion = $detalleViaAdministracion;

        return $this;
    }

    /**
     * Get detalleViaAdministracion
     *
     * @return string 
     */
    public function getDetalleViaAdministracion()
    {
        return $this->detalleViaAdministracion;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     * @return CtlViaAdministracion
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
     * @return CtlViaAdministracion
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
     * @return CtlViaAdministracion
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
     * Set userIpSchema
     *
     * @param string $userIpSchema
     * @return CtlViaAdministracion
     */
    public function setUserIpSchema($userIpSchema)
    {
        $this->userIpSchema = $userIpSchema;

        return $this;
    }

    /**
     * Get userIpSchema
     *
     * @return string 
     */
    public function getUserIpSchema()
    {
        return $this->userIpSchema;
    }

    /**
     * Set estadoSchema
     *
     * @param integer $estadoSchema
     * @return CtlViaAdministracion
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
     * @return CtlViaAdministracion
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
}
