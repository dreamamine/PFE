<?php

namespace LGM\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

/**
 * Admin
 *
 * @ORM\Table(name="fos_admin")
 * @ORM\Entity(repositoryClass="LGM\UserBundle\Repository\AdminRepository")
 * @UniqueEntity(fields = "username", targetClass = "LGM\UserBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "LGM\UserBundle\Entity\User", message="fos_user.email.already_used")
 */
class Admin extends User 
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
   


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }


}
