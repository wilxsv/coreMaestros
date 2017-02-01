<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlInstitucionEstablecimiento
 *
 * @ORM\Table(name="ctl_institucion_establecimiento", indexes={@ORM\Index(name="IDX_8ADB1C3B7DFA12F6", columns={"id_establecimiento"}), @ORM\Index(name="IDX_8ADB1C3BEF433A34", columns={"id_institucion"})})
 * @ORM\Entity
 */
class CtlInstitucionEstablecimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_institucion_establecimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="idestablesimow", type="integer", nullable=true)
     */
    private $idestablesimow;

    /**
     * @var integer
     *
     * @ORM\Column(name="idestablevigepes", type="integer", nullable=true)
     */
    private $idestablevigepes;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_vigepes", type="integer", nullable=true)
     */
    private $estadoVigepes;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_vacunas", type="integer", nullable=true)
     */
    private $estadoVacunas;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_seps", type="integer", nullable=true)
     */
    private $estadoSeps;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_simow", type="integer", nullable=true)
     */
    private $estadoSimow;

    /**
     * @var integer
     *
     * @ORM\Column(name="idestablesumeve", type="integer", nullable=true)
     */
    private $idestablesumeve;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_sumeve", type="integer", nullable=true)
     */
    private $estadoSumeve;

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
     * @var \CtlInstitucion
     *
     * @ORM\ManyToOne(targetEntity="CtlInstitucion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_institucion", referencedColumnName="id")
     * })
     */
    private $idInstitucion;



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
     * Set idestablesimow
     *
     * @param integer $idestablesimow
     * @return CtlInstitucionEstablecimiento
     */
    public function setIdestablesimow($idestablesimow)
    {
        $this->idestablesimow = $idestablesimow;

        return $this;
    }

    /**
     * Get idestablesimow
     *
     * @return integer 
     */
    public function getIdestablesimow()
    {
        return $this->idestablesimow;
    }

    /**
     * Set idestablevigepes
     *
     * @param integer $idestablevigepes
     * @return CtlInstitucionEstablecimiento
     */
    public function setIdestablevigepes($idestablevigepes)
    {
        $this->idestablevigepes = $idestablevigepes;

        return $this;
    }

    /**
     * Get idestablevigepes
     *
     * @return integer 
     */
    public function getIdestablevigepes()
    {
        return $this->idestablevigepes;
    }

    /**
     * Set estadoVigepes
     *
     * @param integer $estadoVigepes
     * @return CtlInstitucionEstablecimiento
     */
    public function setEstadoVigepes($estadoVigepes)
    {
        $this->estadoVigepes = $estadoVigepes;

        return $this;
    }

    /**
     * Get estadoVigepes
     *
     * @return integer 
     */
    public function getEstadoVigepes()
    {
        return $this->estadoVigepes;
    }

    /**
     * Set estadoVacunas
     *
     * @param integer $estadoVacunas
     * @return CtlInstitucionEstablecimiento
     */
    public function setEstadoVacunas($estadoVacunas)
    {
        $this->estadoVacunas = $estadoVacunas;

        return $this;
    }

    /**
     * Get estadoVacunas
     *
     * @return integer 
     */
    public function getEstadoVacunas()
    {
        return $this->estadoVacunas;
    }

    /**
     * Set estadoSeps
     *
     * @param integer $estadoSeps
     * @return CtlInstitucionEstablecimiento
     */
    public function setEstadoSeps($estadoSeps)
    {
        $this->estadoSeps = $estadoSeps;

        return $this;
    }

    /**
     * Get estadoSeps
     *
     * @return integer 
     */
    public function getEstadoSeps()
    {
        return $this->estadoSeps;
    }

    /**
     * Set estadoSimow
     *
     * @param integer $estadoSimow
     * @return CtlInstitucionEstablecimiento
     */
    public function setEstadoSimow($estadoSimow)
    {
        $this->estadoSimow = $estadoSimow;

        return $this;
    }

    /**
     * Get estadoSimow
     *
     * @return integer 
     */
    public function getEstadoSimow()
    {
        return $this->estadoSimow;
    }

    /**
     * Set idestablesumeve
     *
     * @param integer $idestablesumeve
     * @return CtlInstitucionEstablecimiento
     */
    public function setIdestablesumeve($idestablesumeve)
    {
        $this->idestablesumeve = $idestablesumeve;

        return $this;
    }

    /**
     * Get idestablesumeve
     *
     * @return integer 
     */
    public function getIdestablesumeve()
    {
        return $this->idestablesumeve;
    }

    /**
     * Set estadoSumeve
     *
     * @param integer $estadoSumeve
     * @return CtlInstitucionEstablecimiento
     */
    public function setEstadoSumeve($estadoSumeve)
    {
        $this->estadoSumeve = $estadoSumeve;

        return $this;
    }

    /**
     * Get estadoSumeve
     *
     * @return integer 
     */
    public function getEstadoSumeve()
    {
        return $this->estadoSumeve;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return CtlInstitucionEstablecimiento
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
     * @return CtlInstitucionEstablecimiento
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
     * @return CtlInstitucionEstablecimiento
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
     * @return CtlInstitucionEstablecimiento
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
     * @return CtlInstitucionEstablecimiento
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
     * @return CtlInstitucionEstablecimiento
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

    /**
     * Set idInstitucion
     *
     * @param \Maestro\ModeloBundle\Entity\CtlInstitucion $idInstitucion
     * @return CtlInstitucionEstablecimiento
     */
    public function setIdInstitucion(\Maestro\ModeloBundle\Entity\CtlInstitucion $idInstitucion = null)
    {
        $this->idInstitucion = $idInstitucion;

        return $this;
    }

    /**
     * Get idInstitucion
     *
     * @return \Maestro\ModeloBundle\Entity\CtlInstitucion 
     */
    public function getIdInstitucion()
    {
        return $this->idInstitucion;
    }
}
