<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlEquipo
 */
class CtlEquipo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreEquipo;

    /**
     * @var integer
     */
    private $tipoEquipo;

    /**
     * @var \Maestro\ModeloBundle\Entity\CtlEstablecimiento
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
     * @param \Maestro\ModeloBundle\Entity\CtlEstablecimiento $establecimiento
     * @return CtlEquipo
     */
    public function setEstablecimiento(\Maestro\ModeloBundle\Entity\CtlEstablecimiento $establecimiento = null)
    {
        $this->establecimiento = $establecimiento;

        return $this;
    }

    /**
     * Get establecimiento
     *
     * @return \Maestro\ModeloBundle\Entity\CtlEstablecimiento 
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
}
