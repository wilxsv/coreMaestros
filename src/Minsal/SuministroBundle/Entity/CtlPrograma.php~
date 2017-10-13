<?php

namespace Minsal\SuministroBundle\Entity;

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
     * @var \Minsal\SuministroBundle\Entity\CtlPrograma
     */
    private $programa;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $insumo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->insumo = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set userIpSchema
     *
     * @param string $userIpSchema
     * @return CtlPrograma
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
     * @param \Minsal\SuministroBundle\Entity\CtlPrograma $programa
     * @return CtlPrograma
     */
    public function setPrograma(\Minsal\SuministroBundle\Entity\CtlPrograma $programa = null)
    {
        $this->programa = $programa;

        return $this;
    }

    /**
     * Get programa
     *
     * @return \Minsal\SuministroBundle\Entity\CtlPrograma 
     */
    public function getPrograma()
    {
        return $this->programa;
    }

    /**
     * Add insumo
     *
     * @param \Minsal\SuministroBundle\Entity\MntInsumo $insumo
     * @return CtlPrograma
     */
    public function addInsumo(\Minsal\SuministroBundle\Entity\MntInsumo $insumo)
    {
        $this->insumo[] = $insumo;

        return $this;
    }

    /**
     * Remove insumo
     *
     * @param \Minsal\SuministroBundle\Entity\MntInsumo $insumo
     */
    public function removeInsumo(\Minsal\SuministroBundle\Entity\MntInsumo $insumo)
    {
        $this->insumo->removeElement($insumo);
    }

    /**
     * Get insumo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInsumo()
    {
        return $this->insumo;
    }
}
