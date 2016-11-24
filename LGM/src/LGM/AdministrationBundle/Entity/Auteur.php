<?php

namespace LGM\AdministrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auteur
 *
 * @ORM\Table(name="auteur")
 * @ORM\Entity(repositoryClass="LGM\AdministrationBundle\Repository\AuteurRepository")
 */
class Auteur
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
     * @ORM\Column(name="classification", type="string", length=255)
     */
    private $classification;
    
       
     /**
     * @ORM\ManyToOne(targetEntity="LGM\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    
    private $user;
    
       /**
     * @ORM\ManyToOne(targetEntity="LGM\AdministrationBundle\Entity\Article")
     * @ORM\JoinColumn(nullable=false)
     */
    
    private $article;
    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=false, unique=true)
     */
           
            
    private $token;
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
     * Set classification
     *
     * @param string $classification
     * @return Auteur
     */
    public function setClassification($classification)
    {
        $this->classification = $classification;

        return $this;
    }

    /**
     * Get classification
     *
     * @return string 
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Set user
     *
     * @param \LGM\UserBundle\Entity\User $user
     * @return Auteur
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
     * Set article
     *
     * @param \LGM\AdministrationBundle\Entity\Article $article
     * @return Auteur
     */
    public function setArticle(\LGM\AdministrationBundle\Entity\Article $article)
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
     * Set token
     *
     * @param string $token
     * @return Auteur
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
}
