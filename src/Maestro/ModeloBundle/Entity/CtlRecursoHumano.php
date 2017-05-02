<?php

namespace Maestro\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlRecursoHumano
 *
 * @ORM\Table(name="ctl_recurso_humano", uniqueConstraints={@ORM\UniqueConstraint(name="ctl_recurso_humano_nombre_recurso_humano_key", columns={"nombre_recurso_humano"})})
 * @ORM\Entity
 */
class CtlRecursoHumano
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_recurso_humano_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_recurso_humano", type="string", length=255, nullable=false)
     */
    private $nombreRecursoHumano;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_recurso_humano", type="text", nullable=true)
     */
    private $detalleRecursoHumano;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CtlEstablecimiento", inversedBy="ctlRecursoHumanoid")
     * @ORM\JoinTable(name="ctl_recurso_humano_ctl_establecimiento",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ctl_recurso_humanoid", referencedColumnName="id")
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
     * Set nombreRecursoHumano
     *
     * @param string $nombreRecursoHumano
     * @return CtlRecursoHumano
     */
    public function setNombreRecursoHumano($nombreRecursoHumano)
    {
        $this->nombreRecursoHumano = $nombreRecursoHumano;

        return $this;
    }

    /**
     * Get nombreRecursoHumano
     *
     * @return string 
     */
    public function getNombreRecursoHumano()
    {
        return $this->nombreRecursoHumano;
    }

    /**
     * Set detalleRecursoHumano
     *
     * @param string $detalleRecursoHumano
     * @return CtlRecursoHumano
     */
    public function setDetalleRecursoHumano($detalleRecursoHumano)
    {
        $this->detalleRecursoHumano = $detalleRecursoHumano;

        return $this;
    }

    /**
     * Get detalleRecursoHumano
     *
     * @return string 
     */
    public function getDetalleRecursoHumano()
    {
        return $this->detalleRecursoHumano;
    }

    /**
     * Add ctlEstablecimientoid
     *
     * @param \Maestro\ModeloBundle\Entity\CtlEstablecimiento $ctlEstablecimientoid
     * @return CtlRecursoHumano
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
		return $this->getNombreRecursoHumano();
	}
}
