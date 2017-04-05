<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlSuministro
 *
 * @ORM\Table(name="ctl_suministro", uniqueConstraints={@ORM\UniqueConstraint(name="ctl_suministro_nombre_suministro_key", columns={"nombre_suministro"})}, indexes={@ORM\Index(name="IDX_23741A44D64E375F", columns={"ctl_suministroid"})})
 * @ORM\Entity
 */
class CtlSuministro
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_suministro_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_suministro", type="string", length=255, nullable=false)
     */
    private $nombreSuministro;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_suministro", type="string", length=255, nullable=true)
     */
    private $detalleSuministro;

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
     * @var \CtlSuministro
     *
     * @ORM\ManyToOne(targetEntity="CtlSuministro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ctl_suministroid", referencedColumnName="id")
     * })
     */
    private $ctlSuministroid;



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
     * Set nombreSuministro
     *
     * @param string $nombreSuministro
     * @return CtlSuministro
     */
    public function setNombreSuministro($nombreSuministro)
    {
        $this->nombreSuministro = $nombreSuministro;

        return $this;
    }

    /**
     * Get nombreSuministro
     *
     * @return string
     */
    public function getNombreSuministro()
    {
        return $this->nombreSuministro;
    }

    /**
     * Set detalleSuministro
     *
     * @param string $detalleSuministro
     * @return CtlSuministro
     */
    public function setDetalleSuministro($detalleSuministro)
    {
        $this->detalleSuministro = $detalleSuministro;

        return $this;
    }

    /**
     * Get detalleSuministro
     *
     * @return string
     */
    public function getDetalleSuministro()
    {
        return $this->detalleSuministro;
    }

    /**
     * Set registro
     *
     * @param \DateTime $registro
     * @return CtlSuministro
     */
    public function setRegistro($registro)
    {
        $this->registro = $registro;

        return $this;
    }

    /**
     * Get registro
     *
     * @return \DateTime
     */
    public function getRegistro()
    {
        return $this->registro;
    }

    /**
     * Set idUsuario
     *
     * @param integer $idUsuario
     * @return CtlSuministro
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return integer
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     * @return CtlSuministro
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
     * @return CtlSuministro
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
     * @return CtlSuministro
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
     * @return CtlSuministro
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
     * @return CtlSuministro
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
     * @return CtlSuministro
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
     * Set ctlSuministroid
     *
     * @param \Maestro\ModeloBundle\Entity\CtlSuministro $ctlSuministroid
     * @return CtlSuministro
     */
    public function setCtlSuministroid(\Maestro\ModeloBundle\Entity\CtlSuministro $ctlSuministroid = null)
    {
        $this->ctlSuministroid = $ctlSuministroid;

        return $this;
    }

    /**
     * Get ctlSuministroid
     *
     * @return \Maestro\ModeloBundle\Entity\CtlSuministro
     */
    public function getCtlSuministroid()
    {
        return $this->ctlSuministroid;
    }

    public function __toString(){
      return $this->nombreSuministro;
    }
    /**
     * @var string
     */
    private $codificacionSuministro;


    /**
     * Set codificacionSuministro
     *
     * @param string $codificacionSuministro
     * @return CtlSuministro
     */
    public function setCodificacionSuministro($codificacionSuministro)
    {
        $this->codificacionSuministro = $codificacionSuministro;

        return $this;
    }

    /**
     * Get codificacionSuministro
     *
     * @return string 
     */
    public function getCodificacionSuministro()
    {
        return $this->codificacionSuministro;
    }
}
