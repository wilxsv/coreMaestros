<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlEstablecimientoSistema
 *
 * @ORM\Table(name="ctl_establecimiento_sistema", indexes={@ORM\Index(name="IDX_9F352DF07DFA12F6", columns={"id_establecimiento"})})
 * @ORM\Entity
 */
class CtlEstablecimientoSistema
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_establecimiento_sistema_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=15, nullable=false)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="dominio_sistema", type="string", length=50, nullable=false)
     */
    private $dominioSistema;

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
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento", referencedColumnName="id")
     * })
     */
    private $idEstablecimiento;



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
     * Set ip
     *
     * @param string $ip
     * @return CtlEstablecimientoSistema
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set dominioSistema
     *
     * @param string $dominioSistema
     * @return CtlEstablecimientoSistema
     */
    public function setDominioSistema($dominioSistema)
    {
        $this->dominioSistema = $dominioSistema;

        return $this;
    }

    /**
     * Get dominioSistema
     *
     * @return string 
     */
    public function getDominioSistema()
    {
        return $this->dominioSistema;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return CtlEstablecimientoSistema
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
     * @return CtlEstablecimientoSistema
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
     * @return CtlEstablecimientoSistema
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
     * @return CtlEstablecimientoSistema
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
     * @return CtlEstablecimientoSistema
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
     * Set idEstablecimiento
     *
     * @param \Maestro\ModeloBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return CtlEstablecimientoSistema
     */
    public function setIdEstablecimiento(\Maestro\ModeloBundle\Entity\CtlEstablecimiento $idEstablecimiento = null)
    {
        $this->idEstablecimiento = $idEstablecimiento;

        return $this;
    }

    /**
     * Get idEstablecimiento
     *
     * @return \Maestro\ModeloBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimiento()
    {
        return $this->idEstablecimiento;
    }
}
