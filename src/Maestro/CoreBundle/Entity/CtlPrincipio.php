<?php

namespace Maestro\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlPrincipio
 */
class CtlPrincipio
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombrePrincipio;

    /**
     * @var integer
     */
    private $tipoPrincipio;

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
    private $ctlInsumo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ctlInsumo = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombrePrincipio
     *
     * @param string $nombrePrincipio
     * @return CtlPrincipio
     */
    public function setNombrePrincipio($nombrePrincipio)
    {
        $this->nombrePrincipio = $nombrePrincipio;

        return $this;
    }

    /**
     * Get nombrePrincipio
     *
     * @return string 
     */
    public function getNombrePrincipio()
    {
        return $this->nombrePrincipio;
    }

    /**
     * Set tipoPrincipio
     *
     * @param integer $tipoPrincipio
     * @return CtlPrincipio
     */
    public function setTipoPrincipio($tipoPrincipio)
    {
        $this->tipoPrincipio = $tipoPrincipio;

        return $this;
    }

    /**
     * Get tipoPrincipio
     *
     * @return integer 
     */
    public function getTipoPrincipio()
    {
        return $this->tipoPrincipio;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     * @return CtlPrincipio
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
     * @return CtlPrincipio
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
     * @return CtlPrincipio
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
     * @return CtlPrincipio
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
     * @return CtlPrincipio
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
     * @return CtlPrincipio
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
     * Add ctlInsumo
     *
     * @param \Maestro\CoreBundle\Entity\CtlInsumo $ctlInsumo
     * @return CtlPrincipio
     */
    public function addCtlInsumo(\Maestro\CoreBundle\Entity\CtlInsumo $ctlInsumo)
    {
        $this->ctlInsumo[] = $ctlInsumo;

        return $this;
    }

    /**
     * Remove ctlInsumo
     *
     * @param \Maestro\CoreBundle\Entity\CtlInsumo $ctlInsumo
     */
    public function removeCtlInsumo(\Maestro\CoreBundle\Entity\CtlInsumo $ctlInsumo)
    {
        $this->ctlInsumo->removeElement($ctlInsumo);
    }

    /**
     * Get ctlInsumo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCtlInsumo()
    {
        return $this->ctlInsumo;
    }
}
