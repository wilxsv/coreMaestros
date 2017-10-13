<?php

namespace Minsal\SuministroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlUnidadMedida
 */
class CtlUnidadMedida
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $unidadesUnidad;

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
     * @var string
     */
    private $nombreUnidad;

    /**
     * @var string
     */
    private $detalleUnidadMedida;

    /**
     * @var string
     */
    private $simboloUnidad;

    /**
     * @var \Minsal\SuministroBundle\Entity\CtlUnidadMedida
     */
    private $unidadMedida;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $grupo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $suministro;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->grupo = new \Doctrine\Common\Collections\ArrayCollection();
        $this->suministro = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set unidadesUnidad
     *
     * @param integer $unidadesUnidad
     * @return CtlUnidadMedida
     */
    public function setUnidadesUnidad($unidadesUnidad)
    {
        $this->unidadesUnidad = $unidadesUnidad;

        return $this;
    }

    /**
     * Get unidadesUnidad
     *
     * @return integer 
     */
    public function getUnidadesUnidad()
    {
        return $this->unidadesUnidad;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     * @return CtlUnidadMedida
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
     * @return CtlUnidadMedida
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
     * @return CtlUnidadMedida
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
     * @return CtlUnidadMedida
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
     * @return CtlUnidadMedida
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
     * @return CtlUnidadMedida
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
     * Set nombreUnidad
     *
     * @param string $nombreUnidad
     * @return CtlUnidadMedida
     */
    public function setNombreUnidad($nombreUnidad)
    {
        $this->nombreUnidad = $nombreUnidad;

        return $this;
    }

    /**
     * Get nombreUnidad
     *
     * @return string 
     */
    public function getNombreUnidad()
    {
        return $this->nombreUnidad;
    }

    /**
     * Set detalleUnidadMedida
     *
     * @param string $detalleUnidadMedida
     * @return CtlUnidadMedida
     */
    public function setDetalleUnidadMedida($detalleUnidadMedida)
    {
        $this->detalleUnidadMedida = $detalleUnidadMedida;

        return $this;
    }

    /**
     * Get detalleUnidadMedida
     *
     * @return string 
     */
    public function getDetalleUnidadMedida()
    {
        return $this->detalleUnidadMedida;
    }

    /**
     * Set simboloUnidad
     *
     * @param string $simboloUnidad
     * @return CtlUnidadMedida
     */
    public function setSimboloUnidad($simboloUnidad)
    {
        $this->simboloUnidad = $simboloUnidad;

        return $this;
    }

    /**
     * Get simboloUnidad
     *
     * @return string 
     */
    public function getSimboloUnidad()
    {
        return $this->simboloUnidad;
    }

    /**
     * Set unidadMedida
     *
     * @param \Minsal\SuministroBundle\Entity\CtlUnidadMedida $unidadMedida
     * @return CtlUnidadMedida
     */
    public function setUnidadMedida(\Minsal\SuministroBundle\Entity\CtlUnidadMedida $unidadMedida = null)
    {
        $this->unidadMedida = $unidadMedida;

        return $this;
    }

    /**
     * Get unidadMedida
     *
     * @return \Minsal\SuministroBundle\Entity\CtlUnidadMedida 
     */
    public function getUnidadMedida()
    {
        return $this->unidadMedida;
    }

    /**
     * Add grupo
     *
     * @param \Minsal\SuministroBundle\Entity\CtlGrupo $grupo
     * @return CtlUnidadMedida
     */
    public function addGrupo(\Minsal\SuministroBundle\Entity\CtlGrupo $grupo)
    {
        $this->grupo[] = $grupo;

        return $this;
    }

    /**
     * Remove grupo
     *
     * @param \Minsal\SuministroBundle\Entity\CtlGrupo $grupo
     */
    public function removeGrupo(\Minsal\SuministroBundle\Entity\CtlGrupo $grupo)
    {
        $this->grupo->removeElement($grupo);
    }

    /**
     * Get grupo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Add suministro
     *
     * @param \Minsal\SuministroBundle\Entity\CtlSuministro $suministro
     * @return CtlUnidadMedida
     */
    public function addSuministro(\Minsal\SuministroBundle\Entity\CtlSuministro $suministro)
    {
        $this->suministro[] = $suministro;

        return $this;
    }

    /**
     * Remove suministro
     *
     * @param \Minsal\SuministroBundle\Entity\CtlSuministro $suministro
     */
    public function removeSuministro(\Minsal\SuministroBundle\Entity\CtlSuministro $suministro)
    {
        $this->suministro->removeElement($suministro);
    }

    /**
     * Get suministro
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSuministro()
    {
        return $this->suministro;
    }
    
    public function __toString()
    {
        return $this->getNombreUnidad();
    }
}
