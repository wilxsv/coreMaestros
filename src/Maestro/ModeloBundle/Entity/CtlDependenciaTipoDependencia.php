<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlDependenciaTipoDependencia
 *
 * @ORM\Table(name="ctl_dependencia_tipo_dependencia", indexes={@ORM\Index(name="IDX_9856DEDECA22CD3F", columns={"id_dependencia"}), @ORM\Index(name="IDX_9856DEDE49E7BE1", columns={"id_tipo_dependencia"})})
 * @ORM\Entity
 */
class CtlDependenciaTipoDependencia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_dependencia_tipo_dependencia_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="bigint", nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_user", type="string", nullable=false)
     */
    private $ipUser;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_schema", type="text", nullable=false)
     */
    private $detalleSchema;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enable_schema", type="boolean", nullable=false)
     */
    private $enableSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_schema", type="integer", nullable=false)
     */
    private $estadoSchema;

    /**
     * @var \CtlDependencia
     *
     * @ORM\ManyToOne(targetEntity="CtlDependencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_dependencia", referencedColumnName="id")
     * })
     */
    private $idDependencia;

    /**
     * @var \CtlTipoDependencia
     *
     * @ORM\ManyToOne(targetEntity="CtlTipoDependencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_dependencia", referencedColumnName="id")
     * })
     */
    private $idTipoDependencia;



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
     * Set idUser
     *
     * @param integer $idUser
     * @return CtlDependenciaTipoDependencia
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set ipUser
     *
     * @param string $ipUser
     * @return CtlDependenciaTipoDependencia
     */
    public function setIpUser($ipUser)
    {
        $this->ipUser = $ipUser;

        return $this;
    }

    /**
     * Get ipUser
     *
     * @return string 
     */
    public function getIpUser()
    {
        return $this->ipUser;
    }

    /**
     * Set detalleSchema
     *
     * @param string $detalleSchema
     * @return CtlDependenciaTipoDependencia
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
     * Set enableSchema
     *
     * @param boolean $enableSchema
     * @return CtlDependenciaTipoDependencia
     */
    public function setEnableSchema($enableSchema)
    {
        $this->enableSchema = $enableSchema;

        return $this;
    }

    /**
     * Get enableSchema
     *
     * @return boolean 
     */
    public function getEnableSchema()
    {
        return $this->enableSchema;
    }

    /**
     * Set estadoSchema
     *
     * @param integer $estadoSchema
     * @return CtlDependenciaTipoDependencia
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
     * Set idDependencia
     *
     * @param \Maestro\ModeloBundle\Entity\CtlDependencia $idDependencia
     * @return CtlDependenciaTipoDependencia
     */
    public function setIdDependencia(\Maestro\ModeloBundle\Entity\CtlDependencia $idDependencia = null)
    {
        $this->idDependencia = $idDependencia;

        return $this;
    }

    /**
     * Get idDependencia
     *
     * @return \Maestro\ModeloBundle\Entity\CtlDependencia 
     */
    public function getIdDependencia()
    {
        return $this->idDependencia;
    }

    /**
     * Set idTipoDependencia
     *
     * @param \Maestro\ModeloBundle\Entity\CtlTipoDependencia $idTipoDependencia
     * @return CtlDependenciaTipoDependencia
     */
    public function setIdTipoDependencia(\Maestro\ModeloBundle\Entity\CtlTipoDependencia $idTipoDependencia = null)
    {
        $this->idTipoDependencia = $idTipoDependencia;

        return $this;
    }

    /**
     * Get idTipoDependencia
     *
     * @return \Maestro\ModeloBundle\Entity\CtlTipoDependencia 
     */
    public function getIdTipoDependencia()
    {
        return $this->idTipoDependencia;
    }
}
