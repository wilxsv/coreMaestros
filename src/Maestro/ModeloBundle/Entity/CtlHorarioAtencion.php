<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlHorarioAtencion
 *
 * @ORM\Table(name="ctl_horario_atencion", indexes={@ORM\Index(name="IDX_DFB1E22C1EFE83DC", columns={"ctl_establecimiento_id"})})
 * @ORM\Entity
 */
class CtlHorarioAtencion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_horario_atencion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="dia", type="string", length=1, nullable=false)
     */
    private $dia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_inicio", type="time", nullable=false)
     */
    private $horaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_fin", type="time", nullable=false)
     */
    private $horaFin;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ctl_establecimiento_id", referencedColumnName="id")
     * })
     */
    private $ctlEstablecimiento;



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
     * Set dia
     *
     * @param string $dia
     * @return CtlHorarioAtencion
     */
    public function setDia($dia)
    {
        $this->dia = $dia;

        return $this;
    }

    /**
     * Get dia
     *
     * @return string 
     */
    public function getDia()
    {
        return $this->dia;
    }

    /**
     * Set horaInicio
     *
     * @param \DateTime $horaInicio
     * @return CtlHorarioAtencion
     */
    public function setHoraInicio($horaInicio)
    {
        $this->horaInicio = $horaInicio;

        return $this;
    }

    /**
     * Get horaInicio
     *
     * @return \DateTime 
     */
    public function getHoraInicio()
    {
        return $this->horaInicio;
    }

    /**
     * Set horaFin
     *
     * @param \DateTime $horaFin
     * @return CtlHorarioAtencion
     */
    public function setHoraFin($horaFin)
    {
        $this->horaFin = $horaFin;

        return $this;
    }

    /**
     * Get horaFin
     *
     * @return \DateTime 
     */
    public function getHoraFin()
    {
        return $this->horaFin;
    }

    /**
     * Set ctlEstablecimiento
     *
     * @param \Maestro\ModeloBundle\Entity\CtlEstablecimiento $ctlEstablecimiento
     * @return CtlHorarioAtencion
     */
    public function setCtlEstablecimiento(\Maestro\ModeloBundle\Entity\CtlEstablecimiento $ctlEstablecimiento = null)
    {
        $this->ctlEstablecimiento = $ctlEstablecimiento;

        return $this;
    }

    /**
     * Get ctlEstablecimiento
     *
     * @return \Maestro\ModeloBundle\Entity\CtlEstablecimiento 
     */
    public function getCtlEstablecimiento()
    {
        return $this->ctlEstablecimiento;
    }
}
