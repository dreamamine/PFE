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
     *@ORM\OneToMany(targetEntity="LGM\AdministrationBundle\Entity\Article", mappedBy="user", cascade={"persist", "remove"})
     *@ORM\JoinColumn(nullable=false)
    */
    private $articles;
    
    
    public function __construct() {
        $this->articles = new ArrayCollection();
    parent::__construct();
    
    
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
}
