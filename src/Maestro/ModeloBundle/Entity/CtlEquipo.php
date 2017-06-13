<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlEquipo
 * 
 * @ORM\Table(name="ctl_equipo")
 * @ORM\Entity
 */
class CtlEquipo
{
    /**
     * @var integer
     * 
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_equipo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="nombre_equipo", type="string", length=150, nullable=false)
     */
    private $nombreEquipo;

    /**
     * @var integer
     * @ORM\Column(name="tipo_equipo", type="integer", nullable=false)
     */
    private $tipoEquipo;

    /**
     * @var integer
     * @ORM\Column(name="establecimiento_id", type="integer", nullable=false)
     */
    private $establecimiento;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $recurso;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->recurso = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombreEquipo
     *
     * @param string $nombreEquipo
     * @return CtlEquipo
     */
    public function setNombreEquipo($nombreEquipo)
    {
        $this->nombreEquipo = $nombreEquipo;

        return $this;
    }

    /**
     * Get nombreEquipo
     *
     * @return string 
     */
    public function getNombreEquipo()
    {
        return $this->nombreEquipo;
    }

    /**
     * Set tipoEquipo
     *
     * @param integer $tipoEquipo
     * @return CtlEquipo
     */
    public function setTipoEquipo($tipoEquipo)
    {
        $this->tipoEquipo = $tipoEquipo;

        return $this;
    }

    /**
     * Get tipoEquipo
     *
     * @return integer 
     */
    public function getTipoEquipo()
    {
        return $this->tipoEquipo;
    }

    /**
     * Set establecimiento
     *
     * @param integer $establecimiento
     * @return CtlEquipo
     */
    public function setEstablecimiento($establecimiento)
    {
        $this->establecimiento = $establecimiento;

        return $this;
    }

    /**
     * Get establecimiento
     *
     * @return integer
     */
    public function getEstablecimiento()
    {
        return $this->establecimiento;
    }

    /**
     * Add recurso
     *
     * @param \Maestro\ModeloBundle\Entity\CtlRecursoHumano $recurso
     * @return CtlEquipo
     */
    public function addRecurso(\Maestro\ModeloBundle\Entity\CtlRecursoHumano $recurso)
    {
        $this->recurso[] = $recurso;

        return $this;
    }

    /**
     * Remove recurso
     *
     * @param \Maestro\ModeloBundle\Entity\CtlRecursoHumano $recurso
     */
    public function removeRecurso(\Maestro\ModeloBundle\Entity\CtlRecursoHumano $recurso)
    {
        $this->recurso->removeElement($recurso);
    }

    /**
     * Get recurso
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRecurso()
    {
        return $this->recurso;
    }
    
    
    public function __toString(){
		return $this->getNombreEquipo();
	}
}
