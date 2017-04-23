<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlPrestacion
 *
 * @ORM\Table(name="ctl_prestacion", uniqueConstraints={@ORM\UniqueConstraint(name="ctl_prestacion_nombre_prestacion_key", columns={"nombre_prestacion"})}, indexes={@ORM\Index(name="IDX_E2D845B14451AF6E", columns={"ctl_prestacionid"})})
 * @ORM\Entity
 */
class CtlPrestacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_prestacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_prestacion", type="string", length=255, nullable=false)
     */
    private $nombrePrestacion;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_prestacion", type="text", nullable=true)
     */
    private $detallePrestacion;

    /**
     * @var \CtlPrestacion
     *
     * @ORM\ManyToOne(targetEntity="CtlPrestacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ctl_prestacionid", referencedColumnName="id")
     * })
     */
    private $ctlPrestacionid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CtlEstablecimiento", inversedBy="ctlPrestacionid")
     * @ORM\JoinTable(name="ctl_prestacion_ctl_establecimiento",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ctl_prestacionid", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ctl_establecimientoid", referencedColumnName="id")
     *   }
     * )
     */
    private $ctlEstablecimientoid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ctlEstablecimientoid = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombrePrestacion
     *
     * @param string $nombrePrestacion
     * @return CtlPrestacion
     */
    public function setNombrePrestacion($nombrePrestacion)
    {
        $this->nombrePrestacion = $nombrePrestacion;

        return $this;
    }

    /**
     * Get nombrePrestacion
     *
     * @return string
     */
    public function getNombrePrestacion()
    {
        return $this->nombrePrestacion;
    }

    /**
     * Set detallePrestacion
     *
     * @param string $detallePrestacion
     * @return CtlPrestacion
     */
    public function setDetallePrestacion($detallePrestacion)
    {
        $this->detallePrestacion = $detallePrestacion;

        return $this;
    }

    /**
     * Get detallePrestacion
     *
     * @return string
     */
    public function getDetallePrestacion()
    {
        return $this->detallePrestacion;
    }

    /**
     * Set ctlPrestacionid
     *
     * @param \Maestro\ModeloBundle\Entity\CtlPrestacion $ctlPrestacionid
     * @return CtlPrestacion
     */
    public function setCtlPrestacionid(\Maestro\ModeloBundle\Entity\CtlPrestacion $ctlPrestacionid = null)
    {
        $this->ctlPrestacionid = $ctlPrestacionid;

        return $this;
    }

    /**
     * Get ctlPrestacionid
     *
     * @return \Maestro\ModeloBundle\Entity\CtlPrestacion
     */
    public function getCtlPrestacionid()
    {
        return $this->ctlPrestacionid;
    }

    /**
     * Add ctlEstablecimientoid
     *
     * @param \Maestro\ModeloBundle\Entity\CtlEstablecimiento $ctlEstablecimientoid
     * @return CtlPrestacion
     */
    public function addCtlEstablecimientoid(\Maestro\ModeloBundle\Entity\CtlEstablecimiento $ctlEstablecimientoid)
    {
        $this->ctlEstablecimientoid[] = $ctlEstablecimientoid;

        return $this;
    }

    /**
     * Remove ctlEstablecimientoid
     *
     * @param \Maestro\ModeloBundle\Entity\CtlEstablecimiento $ctlEstablecimientoid
     */
    public function removeCtlEstablecimientoid(\Maestro\ModeloBundle\Entity\CtlEstablecimiento $ctlEstablecimientoid)
    {
        $this->ctlEstablecimientoid->removeElement($ctlEstablecimientoid);
    }

    /**
     * Get ctlEstablecimientoid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCtlEstablecimientoid()
    {
        return $this->ctlEstablecimientoid;
    }

    public function __toString() {
      return $this->getNombrePrestacion();
    }
}
