<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlUnidadMedida
 *
 * @ORM\Table(name="ctl_unidad_medida", uniqueConstraints={@ORM\UniqueConstraint(name="ctl_unidad_medida_nombre_unidad_key", columns={"nombre_unidad"})}, indexes={@ORM\Index(name="IDX_E644C424D2D8661B", columns={"ctl_unidad_medidaid"})})
 * @ORM\Entity
 */
class CtlUnidadMedida
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_unidad_medida_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_unidad", type="text", nullable=false)
     */
    private $nombreUnidad;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_unidad_medida", type="text", nullable=true)
     */
    private $detalleUnidadMedida;

    /**
     * @var string
     *
     * @ORM\Column(name="unidades_unidad", type="text", nullable=false)
     */
    private $unidadesUnidad;

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
     * @var \CtlUnidadMedida
     *
     * @ORM\ManyToOne(targetEntity="CtlUnidadMedida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ctl_unidad_medidaid", referencedColumnName="id")
     * })
     */
    private $ctlUnidadMedidaid;



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
     * Set nombreUnidad
     *
     * @param integer $nombreUnidad
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
     * @return integer
     */
    public function getNombreUnidad()
    {
        return $this->nombreUnidad;
    }

    /**
     * Set detalleUnidadMedida
     *
     * @param integer $detalleUnidadMedida
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
     * @return integer
     */
    public function getDetalleUnidadMedida()
    {
        return $this->detalleUnidadMedida;
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
     * Set ipUserSchema
     *
     * @param string $ipUserSchema
     * @return CtlUnidadMedida
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
     * Set ctlUnidadMedidaid
     *
     * @param \Maestro\ModeloBundle\Entity\CtlUnidadMedida $ctlUnidadMedidaid
     * @return CtlUnidadMedida
     */
    public function setCtlUnidadMedidaid(\Maestro\ModeloBundle\Entity\CtlUnidadMedida $ctlUnidadMedidaid = null)
    {
        $this->ctlUnidadMedidaid = $ctlUnidadMedidaid;

        return $this;
    }

    /**
     * Get ctlUnidadMedidaid
     *
     * @return \Maestro\ModeloBundle\Entity\CtlUnidadMedida
     */
    public function getCtlUnidadMedidaid()
    {
        return $this->ctlUnidadMedidaid;
    }

    public function __toString(){
      return $this->nombreUnidad;
    }
}
