<?php

namespace Maestro\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlFormaFarmaceutica
 */
class CtlFormaFarmaceutica
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreFormaFarmaceutica;

    /**
     * @var string
     */
    private $detalleFormaFarmaceutica;

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
     * Set nombreFormaFarmaceutica
     *
     * @param string $nombreFormaFarmaceutica
     * @return CtlFormaFarmaceutica
     */
    public function setNombreFormaFarmaceutica($nombreFormaFarmaceutica)
    {
        $this->nombreFormaFarmaceutica = $nombreFormaFarmaceutica;

        return $this;
    }

    /**
     * Get nombreFormaFarmaceutica
     *
     * @return string 
     */
    public function getNombreFormaFarmaceutica()
    {
        return $this->nombreFormaFarmaceutica;
    }

    /**
     * Set detalleFormaFarmaceutica
     *
     * @param string $detalleFormaFarmaceutica
     * @return CtlFormaFarmaceutica
     */
    public function setDetalleFormaFarmaceutica($detalleFormaFarmaceutica)
    {
        $this->detalleFormaFarmaceutica = $detalleFormaFarmaceutica;

        return $this;
    }

    /**
     * Get detalleFormaFarmaceutica
     *
     * @return string 
     */
    public function getDetalleFormaFarmaceutica()
    {
        return $this->detalleFormaFarmaceutica;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     * @return CtlFormaFarmaceutica
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
     * @return CtlFormaFarmaceutica
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
     * @return CtlFormaFarmaceutica
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
     * @return CtlFormaFarmaceutica
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
     * @return CtlFormaFarmaceutica
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
     * @return CtlFormaFarmaceutica
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
     * @return CtlFormaFarmaceutica
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
