<?php
// src/Acme/UserBundle/Entity/User.php
// Change the namespace according to the path in your project
namespace Maestro\ModeloBundle\Entity;

// Using FOSUserBundle 1.3x the user class will locate instead in :
// use FOS\UserBundle\Entity\User as BaseUser;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    // Change the targetEntity path if you want to create the group

    /**
     * @ORM\ManyToMany(targetEntity="Maestro\ModeloBundle\Entity\Group")
     * @ORM\JoinTable(name="fos_user_user_group",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $groups;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
    
    /**
     * @var \Maestro\ModeloBundle\Entity\CtlEstablecimiento
     */
    private $establecimiento;


    /**
     * Set establecimiento
     *
     * @param \Maestro\ModeloBundle\Entity\CtlEstablecimiento $establecimiento
     * @return FosUser
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
     * @var string
     */
    private $fullname;


    /**
     * Set fullname
     *
     * @param string $fullname
     * @return FosUser
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get fullname
     *
     * @return string 
     */
    public function getFullname()
    {
        return $this->fullname;
    }
}
