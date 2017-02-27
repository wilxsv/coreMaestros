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
