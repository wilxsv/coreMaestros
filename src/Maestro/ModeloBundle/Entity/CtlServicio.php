<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlServicio
 *
 * @ORM\Table(name="ctl_servicio", uniqueConstraints={@ORM\UniqueConstraint(name="ctl_servicio_nombre_servicio_key", columns={"nombre_servicio"})}, indexes={@ORM\Index(name="IDX_A2761EFCFD3F56F4", columns={"ctl_servicioid"})})
 * @ORM\Entity
 */
class CtlServicio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_servicio_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_servicio", type="string", length=255, nullable=false)
     */
    private $nombreServicio;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_servicio", type="text", nullable=true)
     */
    private $detalleServicio;

    /**
     * @var \CtlServicio
     *
     * @ORM\ManyToOne(targetEntity="CtlServicio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ctl_servicioid", referencedColumnName="id")
     * })
     */
    private $ctlServicioid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CtlEstablecimiento", inversedBy="ctlServicioid")
     * @ORM\JoinTable(name="ctl_servicio_ctl_establecimiento",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ctl_servicioid", referencedColumnName="id")
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
     * Set nombreServicio
     *
     * @param string $nombreServicio
     * @return CtlServicio
     */
    public function setNombreServicio($nombreServicio)
    {
        $this->nombreServicio = $nombreServicio;

        return $this;
    }

    /**
     * Get nombreServicio
     *
     * @return string 
     */
    public function getNombreServicio()
    {
        return $this->nombreServicio;
    }

    /**
     * Set detalleServicio
     *
     * @param string $detalleServicio
     * @return CtlServicio
     */
    public function setDetalleServicio($detalleServicio)
    {
        $this->detalleServicio = $detalleServicio;

        return $this;
    }

    /**
     * Get detalleServicio
     *
     * @return string 
     */
    public function getDetalleServicio()
    {
        return $this->detalleServicio;
    }

    /**
     * Set ctlServicioid
     *
     * @param \Maestro\ModeloBundle\Entity\CtlServicio $ctlServicioid
     * @return CtlServicio
     */
    public function setCtlServicioid(\Maestro\ModeloBundle\Entity\CtlServicio $ctlServicioid = null)
    {
        $this->ctlServicioid = $ctlServicioid;

        return $this;
    }

    /**
     * Get ctlServicioid
     *
     * @return \Maestro\ModeloBundle\Entity\CtlServicio 
     */
    public function getCtlServicioid()
    {
        return $this->ctlServicioid;
    }

    /**
     * Add ctlEstablecimientoid
     *
     * @param \Maestro\ModeloBundle\Entity\CtlEstablecimiento $ctlEstablecimientoid
     * @return CtlServicio
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
    
    
    public function __toString(){
		return $this->getNombreServicio();
	}
}
