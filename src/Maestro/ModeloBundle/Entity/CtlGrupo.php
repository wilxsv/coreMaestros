<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlGrupo
 *
 * @ORM\Table(name="ctl_grupo")
 * @ORM\Entity
 */
class CtlGrupo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_grupo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_grupo", type="string", length=255, nullable=false)
     */
    private $nombreGrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_grupo", type="text", nullable=true)
     */
    private $detalleGrupo;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="CtlGrupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grupo_id", referencedColumnName="id")
     * })
     */
    private $grupoId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registro_schema", type="datetime", nullable=false)
     */
    private $registroSchema;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_schema", type="text", nullable=false)
     */
    private $detalleSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id_schema", type="bigint", nullable=false)
     */
    private $userIdSchema;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_user_schema", type="string", nullable=false)
     */
    private $ipUserSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_schema", type="integer", nullable=false)
     */
    private $estadoSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="enable_schema", type="integer", nullable=false)
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
     * Set grupoId
     *
     * @param integer $grupoId
     * @return CtlGrupo
     */
    public function setGrupoId($grupoId)
    {
        $this->grupoId = $grupoId;

        return $this;
    }

    /**
     * Get grupoId
     *
     * @return integer
     */
    public function getGrupoId()
    {
        return $this->grupoId;
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

    public function __toString() {
      return $this->getNombreGrupo();
    }
    /**
     * @var \Maestro\ModeloBundle\Entity\CtlSuministro
     *      
     * @ORM\ManyToOne(targetEntity="CtlSuministro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="suministro_id", referencedColumnName="id")
     * })
     */
    private $suministro;


    /**
     * Set suministro
     *
     * @param \Maestro\ModeloBundle\Entity\CtlSuministro $suministro
     * @return CtlGrupo
     */
    public function setSuministro(\Maestro\ModeloBundle\Entity\CtlSuministro $suministro = null)
    {
        $this->suministro = $suministro;

        return $this;
    }

    /**
     * Get suministro
     *
     * @return \Maestro\ModeloBundle\Entity\CtlSuministro 
     */
    public function getSuministro()
    {
        return $this->suministro;
    }
    
    /**
     * @var integer
     * @ORM\Column(name="codigo_grupo", type="integer", nullable=false)
     */
    private $codigoGrupo;

    /**
     * @var \Maestro\ModeloBundle\Entity\CtlGrupo
     */
    private $grupo;


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
     * Set grupo
     *
     * @param \Maestro\ModeloBundle\Entity\CtlGrupo $grupo
     * @return CtlGrupo
     */
    public function setGrupo(\Maestro\ModeloBundle\Entity\CtlGrupo $grupo = null)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return \Maestro\ModeloBundle\Entity\CtlGrupo 
     */
    public function getGrupo()
    {
        return $this->grupo;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
     
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CtlUnidadMedida", inversedBy="CtlGrupo")
     * @ORM\JoinTable(name="unidad_grupo",
     *   joinColumns={
     *     @ORM\JoinColumn(name="grupo_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="unidad_id", referencedColumnName="id")
     *   }
     * )
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
     * Add unidad
     *
     * @param \Maestro\ModeloBundle\Entity\CtlUnidadMedida $unidad
     * @return CtlGrupo
     */
    public function addUnidad(\Maestro\ModeloBundle\Entity\CtlUnidadMedida $unidad)
    {
        $this->unidad[] = $unidad;

        return $this;
    }

    /**
     * Remove unidad
     *
     * @param \Maestro\ModeloBundle\Entity\CtlUnidadMedida $unidad
     */
    public function removeUnidad(\Maestro\ModeloBundle\Entity\CtlUnidadMedida $unidad)
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
