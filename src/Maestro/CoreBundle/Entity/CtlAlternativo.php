<?php

namespace Maestro\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlAlternativo
 */
class CtlAlternativo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $multiploAlternativo;

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
     * @var \Maestro\CoreBundle\Entity\CtlInsumo
     */
    private $ctlInsumoAlternativo;

    /**
     * @var \Maestro\CoreBundle\Entity\CtlInsumo
     */
    private $ctlInsumo;


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
     * Set multiploAlternativo
     *
     * @param integer $multiploAlternativo
     * @return CtlAlternativo
     */
    public function setMultiploAlternativo($multiploAlternativo)
    {
        $this->multiploAlternativo = $multiploAlternativo;

        return $this;
    }

    /**
     * Get multiploAlternativo
     *
     * @return integer 
     */
    public function getMultiploAlternativo()
    {
        return $this->multiploAlternativo;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     * @return CtlAlternativo
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
     * @return CtlAlternativo
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
     * @return CtlAlternativo
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
     * @return CtlAlternativo
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
     * @return CtlAlternativo
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
     * @return CtlAlternativo
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
     * Set ctlInsumoAlternativo
     *
     * @param \Maestro\CoreBundle\Entity\CtlInsumo $ctlInsumoAlternativo
     * @return CtlAlternativo
     */
    public function setCtlInsumoAlternativo(\Maestro\CoreBundle\Entity\CtlInsumo $ctlInsumoAlternativo = null)
    {
        $this->ctlInsumoAlternativo = $ctlInsumoAlternativo;

        return $this;
    }

    /**
     * Get ctlInsumoAlternativo
     *
     * @return \Maestro\CoreBundle\Entity\CtlInsumo 
     */
    public function getCtlInsumoAlternativo()
    {
        return $this->ctlInsumoAlternativo;
    }

    /**
     * Set ctlInsumo
     *
     * @param \Maestro\CoreBundle\Entity\CtlInsumo $ctlInsumo
     * @return CtlAlternativo
     */
    public function setCtlInsumo(\Maestro\CoreBundle\Entity\CtlInsumo $ctlInsumo = null)
    {
        $this->ctlInsumo = $ctlInsumo;

        return $this;
    }

    /**
     * Get ctlInsumo
     *
     * @return \Maestro\CoreBundle\Entity\CtlInsumo 
     */
    public function getCtlInsumo()
    {
        return $this->ctlInsumo;
    }
}
