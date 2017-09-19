<?php

namespace Maestro\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlPrograma
 */
class CtlPrograma
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombrePrograma;

    /**
     * @var string
     */
    private $detallePrograma;

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
    private $ipUserSchema;

    /**
     * @var integer
     */
    private $estadoSchema;

    /**
     * @var integer
     */
    private $enableSchema;

    /**
     * @var \Maestro\CoreBundle\Entity\CtlPrograma
     */
    private $programa;


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
     * Set nombrePrograma
     *
     * @param string $nombrePrograma
     * @return CtlPrograma
     */
    public function setNombrePrograma($nombrePrograma)
    {
        $this->nombrePrograma = $nombrePrograma;

        return $this;
    }

    /**
     * Get nombrePrograma
     *
     * @return string 
     */
    public function getNombrePrograma()
    {
        return $this->nombrePrograma;
    }

    /**
     * Set detallePrograma
     *
     * @param string $detallePrograma
     * @return CtlPrograma
     */
    public function setDetallePrograma($detallePrograma)
    {
        $this->detallePrograma = $detallePrograma;

        return $this;
    }

    /**
     * Get detallePrograma
     *
     * @return string 
     */
    public function getDetallePrograma()
    {
        return $this->detallePrograma;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     * @return CtlPrograma
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
     * @return CtlPrograma
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
     * @return CtlPrograma
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
     * @return CtlPrograma
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
     * @return CtlPrograma
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
     * @return CtlPrograma
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

    /**
     * Set programa
     *
     * @param \Maestro\CoreBundle\Entity\CtlPrograma $programa
     * @return CtlPrograma
     */
    public function setPrograma(\Maestro\CoreBundle\Entity\CtlPrograma $programa = null)
    {
        $this->programa = $programa;

        return $this;
    }

    /**
     * Get programa
     *
     * @return \Maestro\CoreBundle\Entity\CtlPrograma 
     */
    public function getPrograma()
    {
        return $this->programa;
    }
}
