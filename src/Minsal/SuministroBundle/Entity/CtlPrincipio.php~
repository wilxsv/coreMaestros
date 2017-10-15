<?php

namespace Minsal\SuministroBundle\Entity;

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
     * Set userIpSchema
     *
     * @param string $userIpSchema
     * @return CtlPrincipio
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

    public function __toString()
    {
        return $this->getNombrePrincipio();
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $insumomedico;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->insumomedico = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add insumomedico
     *
     * @param \Minsal\SuministroBundle\Entity\MntInsumo $insumomedico
     * @return CtlPrincipio
     */
    public function addInsumomedico(\Minsal\SuministroBundle\Entity\MntInsumo $insumomedico)
    {
        $this->insumomedico[] = $insumomedico;

        return $this;
    }

    /**
     * Remove insumomedico
     *
     * @param \Minsal\SuministroBundle\Entity\MntInsumo $insumomedico
     */
    public function removeInsumomedico(\Minsal\SuministroBundle\Entity\MntInsumo $insumomedico)
    {
        $this->insumomedico->removeElement($insumomedico);
    }

    /**
     * Get insumomedico
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInsumomedico()
    {
        return $this->insumomedico;
    }
}
