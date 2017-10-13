<?php

namespace Minsal\SuministroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlNivelUso
 */
class CtlNivelUso
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreNivelUso;

    /**
     * @var string
     */
    private $detalleNivelUso;

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
     * Set userIpSchema
     *
     * @param string $userIpSchema
     * @return CtlNivelUso
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
}
