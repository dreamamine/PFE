<?php

namespace LGM\AdministrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupe
 *
 * @ORM\Table(name="groupe")
 * @ORM\Entity(repositoryClass="LGM\AdministrationBundle\Repository\GroupeRepository")
 */
class Groupe
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="indiceproduction", type="integer")
     */
    private $indiceproduction;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=false, unique=true)
     */
           
            
    private $token;
    
    /**
     * @ORM\ManyToOne(targetEntity="LGM\AdministrationBundle\Entity\Theme")
     * @ORM\JoinColumn(nullable=false)
     * 
     */
    
    private $theme;    
    
    
        
    /**
     *@ORM\OneToMany(targetEntity="LGM\UserBundle\Entity\User", mappedBy="groupe", cascade={"persist", "remove"})
    */
    private $users;
    
    
    
    
    
    
    public function __construct() {
        $this->token = base_convert(sha1(uniqid(mt_rand(1, 999), true)),16, 36);
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
     * Set nom
     *
     * @param string $nom
     * @return Groupe
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    

    /**
     * Set token
     *
     * @param string $token
     * @return Groupe
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

   

    /**
     * Set indiceproduction
     *
     * @param integer $indiceproduction
     * @return Groupe
     */
    public function setIndiceproduction($indiceproduction)
    {
        $this->indiceproduction = $indiceproduction;

        return $this;
    }

    /**
     * Get indiceproduction
     *
     * @return integer 
     */
    public function getIndiceproduction()
    {
        return $this->indiceproduction;
    }

    /**
     * Set theme
     *
     * @param \LGM\AdministrationBundle\Entity\Theme $theme
     * @return Groupe
     */
    public function setTheme(\LGM\AdministrationBundle\Entity\Theme $theme = null)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return \LGM\AdministrationBundle\Entity\Theme 
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set user
     *
     * @param \LGM\UserBundle\Entity\User $user
     * @return Groupe
     */
    public function setUser(\LGM\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \LGM\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add users
     *
     * @param \LGM\UserBundle\Entity\User $users
     * @return Groupe
     */
    

    
    public function addUser(\LGM\UserBundle\Entity\User $users)
    {
	$users->setGroupe($this);
        $this->users[] = $users;
        return $this;
    }
    
    
    
    
    
    
    
    /**
     * Remove users
     *
     * @param \LGM\UserBundle\Entity\User $users
     */
    public function removeUser(\LGM\UserBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
}
