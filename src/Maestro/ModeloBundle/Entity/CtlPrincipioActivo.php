<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlPrincipioActivo
 *
 * @ORM\Table(name="ctl_principio_activo", uniqueConstraints={@ORM\UniqueConstraint(name="ctl_principio_activo_nombre_pactivo_key", columns={"nombre_pactivo"})}, indexes={@ORM\Index(name="IDX_7AD8B1FF3F89DC5", columns={"ctl_principioid"})})
 * @ORM\Entity
 */
class CtlPrincipioActivo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_principio_activo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_pactivo", type="string", length=255, nullable=false)
     */
    private $nombrePactivo;

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
     * @var \CtlPrincipio
     *
     * @ORM\ManyToOne(targetEntity="CtlPrincipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ctl_principioid", referencedColumnName="id")
     * })
     */
    private $ctlPrincipioid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CtlInsumo", inversedBy="ctlPrincipioActivoid")
     * @ORM\JoinTable(name="ctl_principio_activo_ctl_insumo",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ctl_principio_activoid", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ctl_insumoid", referencedColumnName="id")
     *   }
     * )
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
     * Set nombrePactivo
     *
     * @param string $nombrePactivo
     * @return CtlPrincipioActivo
     */
    public function setNombrePactivo($nombrePactivo)
    {
        $this->nombrePactivo = $nombrePactivo;

        return $this;
    }

    /**
     * Get nombrePactivo
     *
     * @return string 
     */
    public function getNombrePactivo()
    {
        return $this->nombrePactivo;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     * @return CtlPrincipioActivo
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
     * @return CtlPrincipioActivo
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
     * @return CtlPrincipioActivo
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
     * @return CtlPrincipioActivo
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
     * @return CtlPrincipioActivo
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
     * @return CtlPrincipioActivo
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
     * Set ctlPrincipioid
     *
     * @param \Maestro\ModeloBundle\Entity\CtlPrincipio $ctlPrincipioid
     * @return CtlPrincipioActivo
     */
    public function setCtlPrincipioid(\Maestro\ModeloBundle\Entity\CtlPrincipio $ctlPrincipioid = null)
    {
        $this->ctlPrincipioid = $ctlPrincipioid;

        return $this;
    }

    /**
     * Get ctlPrincipioid
     *
     * @return \Maestro\ModeloBundle\Entity\CtlPrincipio 
     */
    public function getCtlPrincipioid()
    {
        return $this->ctlPrincipioid;
    }

    /**
     * Add ctlInsumoid
     *
     * @param \Maestro\ModeloBundle\Entity\CtlInsumo $ctlInsumoid
     * @return CtlPrincipioActivo
     */
    public function addCtlInsumoid(\Maestro\ModeloBundle\Entity\CtlInsumo $ctlInsumoid)
    {
        $this->ctlInsumoid[] = $ctlInsumoid;

        return $this;
    }

    /**
     * Remove ctlInsumoid
     *
     * @param \Maestro\ModeloBundle\Entity\CtlInsumo $ctlInsumoid
     */
    public function removeCtlInsumoid(\Maestro\ModeloBundle\Entity\CtlInsumo $ctlInsumoid)
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
