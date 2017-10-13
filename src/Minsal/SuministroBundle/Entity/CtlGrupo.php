<?php

namespace Minsal\SuministroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlGrupo
 */
class CtlGrupo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreGrupo;

    /**
     * @var string
     */
    private $detalleGrupo;

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
     * @var integer
     */
    private $codigoGrupo;

    /**
     * @var \Minsal\SuministroBundle\Entity\CtlSuministro
     */
    private $suministro;

    /**
     * @var \Minsal\SuministroBundle\Entity\CtlGrupo
     */
    private $grupo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $unidad;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->unidad = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombreGrupo
     *
     * @param string $nombreGrupo
     * @return CtlGrupo
     */
    public function setNombreGrupo($nombreGrupo)
    {
        $this->nombreGrupo = $nombreGrupo;

        return $this;
    }

    /**
     * Get nombreGrupo
     *
     * @return string 
     */
    public function getNombreGrupo()
    {
        return $this->nombreGrupo;
    }

    /**
     * Set detalleGrupo
     *
     * @param string $detalleGrupo
     * @return CtlGrupo
     */
    public function setDetalleGrupo($detalleGrupo)
    {
        $this->detalleGrupo = $detalleGrupo;

        return $this;
    }

    /**
     * Get detalleGrupo
     *
     * @return string 
     */
    public function getDetalleGrupo()
    {
        return $this->detalleGrupo;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     * @return CtlGrupo
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
     * @return CtlGrupo
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
     * @return CtlGrupo
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
     * @return CtlGrupo
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
     * @return CtlGrupo
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
     * @return CtlGrupo
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
     * Set codigoGrupo
     *
     * @param integer $codigoGrupo
     * @return CtlGrupo
     */
    public function setCodigoGrupo($codigoGrupo)
    {
        $this->codigoGrupo = $codigoGrupo;

        return $this;
    }

    /**
     * Get codigoGrupo
     *
     * @return integer 
     */
    public function getCodigoGrupo()
    {
        return $this->codigoGrupo;
    }

    /**
     * Set suministro
     *
     * @param \Minsal\SuministroBundle\Entity\CtlSuministro $suministro
     * @return CtlGrupo
     */
    public function setSuministro(\Minsal\SuministroBundle\Entity\CtlSuministro $suministro = null)
    {
        $this->suministro = $suministro;

        return $this;
    }

    /**
     * Get suministro
     *
     * @return \Minsal\SuministroBundle\Entity\CtlSuministro 
     */
    public function getSuministro()
    {
        return $this->suministro;
    }

    /**
     * Set grupo
     *
     * @param \Minsal\SuministroBundle\Entity\CtlGrupo $grupo
     * @return CtlGrupo
     */
    public function setGrupo(\Minsal\SuministroBundle\Entity\CtlGrupo $grupo = null)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return \Minsal\SuministroBundle\Entity\CtlGrupo 
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Add unidad
     *
     * @param \Minsal\SuministroBundle\Entity\CtlUnidadMedida $unidad
     * @return CtlGrupo
     */
    public function addUnidad(\Minsal\SuministroBundle\Entity\CtlUnidadMedida $unidad)
    {
        $this->unidad[] = $unidad;

        return $this;
    }

    /**
     * Remove unidad
     *
     * @param \Minsal\SuministroBundle\Entity\CtlUnidadMedida $unidad
     */
    public function removeUnidad(\Minsal\SuministroBundle\Entity\CtlUnidadMedida $unidad)
    {
        $this->unidad->removeElement($unidad);
    }

    /**
     * Get unidad
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUnidad()
    {
        return $this->unidad;
    }

    public function __toString()
    {
        return $this->getNombreGrupo();
    }
}
