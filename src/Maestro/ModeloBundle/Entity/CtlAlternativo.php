<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlAlternativo
 *
 * @ORM\Table(name="ctl_alternativo", uniqueConstraints={@ORM\UniqueConstraint(name="unique_mezcla", columns={"ctl_insumo", "ctl_insumo_alternativo"})}, indexes={@ORM\Index(name="IDX_2858B3F39DB3222", columns={"ctl_insumo"})})
 * @ORM\Entity
 */
class CtlAlternativo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_alternativo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctl_insumo_alternativo", type="bigint", nullable=true)
     */
    private $ctlInsumoAlternativo;

    /**
     * @var integer
     *
     * @ORM\Column(name="multiplo_alternativo", type="bigint", nullable=false)
     */
    private $multiploAlternativo;

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
     * @var \CtlInsumo
     *
     * @ORM\ManyToOne(targetEntity="CtlInsumo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ctl_insumo", referencedColumnName="id")
     * })
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
     * Set ctlInsumoAlternativo
     *
     * @param integer $ctlInsumoAlternativo
     * @return CtlAlternativo
     */
    public function setCtlInsumoAlternativo($ctlInsumoAlternativo)
    {
        $this->ctlInsumoAlternativo = $ctlInsumoAlternativo;

        return $this;
    }

    /**
     * Get ctlInsumoAlternativo
     *
     * @return integer 
     */
    public function getCtlInsumoAlternativo()
    {
        return $this->ctlInsumoAlternativo;
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
     * Set ctlInsumo
     *
     * @param \Maestro\ModeloBundle\Entity\CtlInsumo $ctlInsumo
     * @return CtlAlternativo
     */
    public function setCtlInsumo(\Maestro\ModeloBundle\Entity\CtlInsumo $ctlInsumo = null)
    {
        $this->ctlInsumo = $ctlInsumo;

        return $this;
    }

    /**
     * Get ctlInsumo
     *
     * @return \Maestro\ModeloBundle\Entity\CtlInsumo 
     */
    public function getCtlInsumo()
    {
        return $this->ctlInsumo;
    }
}
