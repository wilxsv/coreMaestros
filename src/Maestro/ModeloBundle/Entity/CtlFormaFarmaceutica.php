<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlFormaFarmaceutica
 *
 * @ORM\Table(name="ctl_forma_farmaceutica", uniqueConstraints={@ORM\UniqueConstraint(name="ctl_forma_farmaceutica_nombre_forma_farmaceutica_key", columns={"nombre_forma_farmaceutica"})})
 * @ORM\Entity
 */
class CtlFormaFarmaceutica
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_forma_farmaceutica_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_forma_farmaceutica", type="string", length=255, nullable=false)
     */
    private $nombreFormaFarmaceutica;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_forma_farmaceutica", type="string", length=255, nullable=true)
     */
    private $detalleFormaFarmaceutica;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CtlInsumo", inversedBy="ctlFormaFarmaceuticaid")
     * @ORM\JoinTable(name="ctl_unidad_dispensacion",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ctl_forma_farmaceuticaid", referencedColumnName="id")
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
     * @param \Maestro\ModeloBundle\Entity\CtlInsumo $ctlInsumoid
     * @return CtlFormaFarmaceutica
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

    public function __toString(){
      return $this->nombreFormaFarmaceutica;
    }
}
