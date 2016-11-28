<?php

namespace LGM\UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="LGM\UserBundle\Repository\UserRepository")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"fos_enseignant_chercheur" = "Enseignant_Chercheur", "fos_chercheur_junior" = "Chercheur_Junior", "fos_admin"="Admin"})
 */
abstract class User extends BaseUser
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;
    
    
    /**
     * @ORM\OneToOne(targetEntity="LGM\AdministrationBundle\Entity\Media", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    
    private $image;    
    
    /**
     *@ORM\ManyToOne(targetEntity="LGM\AdministrationBundle\Entity\Groupe", inversedBy="users", cascade={"persist", "remove"})
    */
    
    private $groupe;
    
   /**
     *@ORM\ManyToMany(targetEntity="LGM\AdministrationBundle\Entity\Article", mappedBy="users", cascade={"persist", "remove"})
     */
    
    private $articles;
    
    /**
     *@ORM\ManyToMany(targetEntity="LGM\AdministrationBundle\Entity\Communication", mappedBy="users", cascade={"persist", "remove"})
     */
    
    private $communictaions;
    
    /**
     *@ORM\ManyToMany(targetEntity="LGM\AdministrationBundle\Entity\OuvrageScientifique", inversedBy="users", cascade={"persist", "remove"})
     */
    
    private $ouvrages;
   
    
    
    
    public function __construct() {
       
    parent::__construct();
     $this->articles = new ArrayCollection();
    
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
     * @return User
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
     * Set prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    

    /**
     * Set image
     *
     * @param \LGM\AdministrationBundle\Entity\Media $image
     * @return User
     */
    public function setImage(\LGM\AdministrationBundle\Entity\Media $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \LGM\AdministrationBundle\Entity\Media 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add articles
     *
     * @param \LGM\AdministrationBundle\Entity\Article $articles
     * @return User
     */
    public function addArticle(\LGM\AdministrationBundle\Entity\Article $articles)
    {
        $articles->setUser($this);
        $this->articles[] = $articles;
        return $this;
    }

    
    
    
    /**
     * Remove articles
     *
     * @param \LGM\AdministrationBundle\Entity\Article $articles
     */
    public function removeArticle(\LGM\AdministrationBundle\Entity\Article $articles)
    {
        $this->articles->removeElement($articles);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticles()
    {
        return $this->articles;
    }

    

    

   
    /**
     * Set groupe
     *
     * @param \LGM\AdministrationBundle\Entity\Groupe $groupe
     * @return User
     */
    public function setGroupe(\LGM\AdministrationBundle\Entity\Groupe $groupe = null)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get groupe
     *
     * @return \LGM\AdministrationBundle\Entity\Groupe 
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * Set article
     *
     * @param \LGM\AdministrationBundle\Entity\Article $article
     * @return User
     */
    public function setArticle(\LGM\AdministrationBundle\Entity\Article $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \LGM\AdministrationBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Add users
     *
     * @param \LGM\AdministrationBundle\Entity\Articles $users
     * @return User
     */
    public function addUser(\LGM\AdministrationBundle\Entity\Articles $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \LGM\AdministrationBundle\Entity\Articles $users
     */
    public function removeUser(\LGM\AdministrationBundle\Entity\Articles $users)
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

    /**
     * Add communictaions
     *
     * @param \LGM\AdministrationBundle\Entity\Communication $communictaions
     * @return User
     */
    public function addCommunictaion(\LGM\AdministrationBundle\Entity\Communication $communictaions)
    {
        $this->communictaions[] = $communictaions;

        return $this;
    }

    /**
     * Remove communictaions
     *
     * @param \LGM\AdministrationBundle\Entity\Communication $communictaions
     */
    public function removeCommunictaion(\LGM\AdministrationBundle\Entity\Communication $communictaions)
    {
        $this->communictaions->removeElement($communictaions);
    }

    /**
     * Get communictaions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommunictaions()
    {
        return $this->communictaions;
    }

    /**
     * Add ouvrages
     *
     * @param \LGM\AdministrationBundle\Entity\OuvrageScientifique $ouvrages
     * @return User
     */
    public function addOuvrage(\LGM\AdministrationBundle\Entity\OuvrageScientifique $ouvrages)
    {
        $this->ouvrages[] = $ouvrages;

        return $this;
    }

    /**
     * Remove ouvrages
     *
     * @param \LGM\AdministrationBundle\Entity\OuvrageScientifique $ouvrages
     */
    public function removeOuvrage(\LGM\AdministrationBundle\Entity\OuvrageScientifique $ouvrages)
    {
        $this->ouvrages->removeElement($ouvrages);
    }

    /**
     * Get ouvrages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOuvrages()
    {
        return $this->ouvrages;
    }
    
    
   public function countA($type){
 	return $this->articles->filter(function($a) use($type){
 		if( $a->getIndxType() == $type ) return $a;
 	})->count();
    }
   
    public function countC($type){
 	return $this->communictaions->filter(function($a) use($type){
 		if( $a->getIndxType() == $type ) return $a;
 	})->count();
    }   
        
    
}
