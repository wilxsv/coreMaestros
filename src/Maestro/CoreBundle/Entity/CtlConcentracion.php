<?php

namespace Maestro\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlConcentracion
 */
class CtlConcentracion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $detalleConcentracion;

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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ctlInsumoid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ctlInsumoid = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set detalleConcentracion
     *
     * @param string $detalleConcentracion
     * @return CtlConcentracion
     */
    public function setDetalleConcentracion($detalleConcentracion)
    {
        $this->detalleConcentracion = $detalleConcentracion;

        return $this;
    }

    /**
     * Get detalleConcentracion
     *
     * @return string 
     */
    public function getDetalleConcentracion()
    {
        return $this->detalleConcentracion;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     * @return CtlConcentracion
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
     * @return CtlConcentracion
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
     * @return CtlConcentracion
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
     * @return CtlConcentracion
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
     * @return CtlConcentracion
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
     * @return CtlConcentracion
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
     * Add ctlInsumoid
     *
     * @param \Maestro\CoreBundle\Entity\CtlInsumo $ctlInsumoid
     * @return CtlConcentracion
     */
    public function addCtlInsumoid(\Maestro\CoreBundle\Entity\CtlInsumo $ctlInsumoid)
    {
        $this->ctlInsumoid[] = $ctlInsumoid;

        return $this;
    }

    /**
     * Remove ctlInsumoid
     *
     * @param \Maestro\CoreBundle\Entity\CtlInsumo $ctlInsumoid
     */
    public function removeCtlInsumoid(\Maestro\CoreBundle\Entity\CtlInsumo $ctlInsumoid)
    {
        $this->ctlInsumoid->removeElement($ctlInsumoid);
    }

    /**
     * Get ctlInsumoid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCtlInsumoid()
    {
        return $this->ctlInsumoid;
    }
}
