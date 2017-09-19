<?php

namespace Maestro\CoreBundle\Entity;

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
     * @var integer
     */
    private $codigoGrupo;

    /**
     * @var \Maestro\CoreBundle\Entity\CtlSuministro
     */
    private $suministro;

    /**
     * @var \Maestro\CoreBundle\Entity\CtlGrupo
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
     * Set ipUserSchema
     *
     * @param string $ipUserSchema
     * @return CtlGrupo
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
     * @param \Maestro\CoreBundle\Entity\CtlSuministro $suministro
     * @return CtlGrupo
     */
    public function setSuministro(\Maestro\CoreBundle\Entity\CtlSuministro $suministro = null)
    {
        $this->suministro = $suministro;

        return $this;
    }

    /**
     * Get suministro
     *
     * @return \Maestro\CoreBundle\Entity\CtlSuministro 
     */
    public function getSuministro()
    {
        return $this->suministro;
    }

    /**
     * Set grupo
     *
     * @param \Maestro\CoreBundle\Entity\CtlGrupo $grupo
     * @return CtlGrupo
     */
    public function setGrupo(\Maestro\CoreBundle\Entity\CtlGrupo $grupo = null)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return \Maestro\CoreBundle\Entity\CtlGrupo 
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Add unidad
     *
     * @param \Maestro\CoreBundle\Entity\CtlUnidadMedida $unidad
     * @return CtlGrupo
     */
    public function addUnidad(\Maestro\CoreBundle\Entity\CtlUnidadMedida $unidad)
    {
        $this->unidad[] = $unidad;

        return $this;
    }

    /**
     * Remove unidad
     *
     * @param \Maestro\CoreBundle\Entity\CtlUnidadMedida $unidad
     */
    public function removeUnidad(\Maestro\CoreBundle\Entity\CtlUnidadMedida $unidad)
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
}
