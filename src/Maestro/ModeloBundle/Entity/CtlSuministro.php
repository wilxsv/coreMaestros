<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlSuministro
 *
 * @ORM\Table(name="ctl_suministro", uniqueConstraints={@ORM\UniqueConstraint(name="ctl_suministro_nombre_suministro_key", columns={"nombre_suministro"})}, indexes={@ORM\Index(name="IDX_23741A44D64E375F", columns={"ctl_suministroid"}), @ORM\Index(name="IDX_23741A44A9C99084", columns={"codificacion_suministro"}), @ORM\Index(name="IDX_23741A44DF5CB336", columns={"rol_solicita_suministro"}), @ORM\Index(name="IDX_23741A446EB0AB02", columns={"rol_valida_suministro"})})
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
     * @var \DateTime
     *
     * @ORM\Column(name="registro_schema", type="datetime", nullable=true)
     */
    private $registroSchema;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_schema", type="text", nullable=true)
     */
    private $detalleSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id_schema", type="bigint", nullable=true)
     */
    private $userIdSchema;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_user_schema", type="string", nullable=true)
     */
    private $ipUserSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_schema", type="integer", nullable=true)
     */
    private $estadoSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="enable_schema", type="integer", nullable=true)
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
     * @var \CtlCodificacion
     *
     * @ORM\ManyToOne(targetEntity="CtlCodificacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codificacion_suministro", referencedColumnName="id")
     * })
     */
    private $codificacionSuministro;

    /**
     * @var \CtlRol
     *
     * @ORM\ManyToOne(targetEntity="CtlRol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rol_solicita_suministro", referencedColumnName="id")
     * })
     */
    private $rolSolicitaSuministro;

    /**
     * @var \CtlRol
     *
     * @ORM\ManyToOne(targetEntity="CtlRol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rol_valida_suministro", referencedColumnName="id")
     * })
     */
    private $rolValidaSuministro;



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
        $tmp = $this->getDetalleSchema();
		$pos = strpos($tmp, '<nodo>');
		if ( $pos === false )
		  $this->detalleSchema = $detalleSchema;
		else
		{
		  $pos = strripos($tmp, 'do>');
		  $this->detalleSchema = substr($tmp, 0, $pos+3).$detalleSchema;
		}

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

    /**
     * Set codificacionSuministro
     *
     * @param \Maestro\ModeloBundle\Entity\CtlCodificacion $codificacionSuministro
     * @return CtlSuministro
     */
    public function setCodificacionSuministro(\Maestro\ModeloBundle\Entity\CtlCodificacion $codificacionSuministro = null)
    {
        $this->codificacionSuministro = $codificacionSuministro;

        return $this;
    }

    /**
     * Get codificacionSuministro
     *
     * @return \Maestro\ModeloBundle\Entity\CtlCodificacion 
     */
    public function getCodificacionSuministro()
    {
        return $this->codificacionSuministro;
    }

    /**
     * Set rolSolicitaSuministro
     *
     * @param \Maestro\ModeloBundle\Entity\CtlRol $rolSolicitaSuministro
     * @return CtlSuministro
     */
    public function setRolSolicitaSuministro(\Maestro\ModeloBundle\Entity\CtlRol $rolSolicitaSuministro = null)
    {
        $this->rolSolicitaSuministro = $rolSolicitaSuministro;

        return $this;
    }

    /**
     * Get rolSolicitaSuministro
     *
     * @return \Maestro\ModeloBundle\Entity\CtlRol 
     */
    public function getRolSolicitaSuministro()
    {
        return $this->rolSolicitaSuministro;
    }

    /**
     * Set rolValidaSuministro
     *
     * @param \Maestro\ModeloBundle\Entity\CtlRol $rolValidaSuministro
     * @return CtlSuministro
     */
    public function setRolValidaSuministro(\Maestro\ModeloBundle\Entity\CtlRol $rolValidaSuministro = null)
    {
        $this->rolValidaSuministro = $rolValidaSuministro;

        return $this;
    }

    /**
     * Get rolValidaSuministro
     *
     * @return \Maestro\ModeloBundle\Entity\CtlRol 
     */
    public function getRolValidaSuministro()
    {
        return $this->rolValidaSuministro;
    }
    
    public function __toString(){
		return $this->getNombreSuministro();
	}
    /**
     * @var string
     */
    private $detalleSuministro;


}
