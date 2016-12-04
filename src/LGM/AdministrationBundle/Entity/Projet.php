<?php

namespace LGM\AdministrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity(repositoryClass="LGM\AdministrationBundle\Repository\ProjetRepository")
 */
class Projet
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
     * @var string
     *
     * @ORM\Column(name="nom_chef", type="string", length=255)
     */
    private $nomChef;
    
     /**
     * @var string
     *
     * @ORM\Column(name="sujet", type="string", length=255)
     */
    private $sujet;
    
        
    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="dateFinProjet", type="date", nullable=true)
     */
    private $dateFinProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=false, unique=true)
     */
           
            
    private $token;
    
   
    /**
     * @ORM\ManyToOne(targetEntity="LGM\AdministrationBundle\Entity\Equipe")
     * @ORM\JoinColumn(nullable=false)
     */
    
    private $equipe;
    
    
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
     * @return Projet
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
     * Set nomChef
     *
     * @param string $nomChef
     * @return Projet
     */
    public function setNomChef($nomChef)
    {
        $this->nomChef = $nomChef;

        return $this;
    }

    /**
     * Get nomChef
     *
     * @return string 
     */
    public function getNomChef()
    {
        return $this->nomChef;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return Projet
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
     * Set sujet
     *
     * @param string $sujet
     * @return Projet
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get sujet
     *
     * @return string 
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set equipe
     *
     * @param \LGM\AdministrationBundle\Entity\Equipe $equipe
     * @return Projet
     */
    public function setEquipe(\LGM\AdministrationBundle\Entity\Equipe $equipe = null)
    {
        $this->equipe = $equipe;

        return $this;
    }

    /**
     * Get equipe
     *
     * @return \LGM\AdministrationBundle\Entity\Equipe 
     */
    public function getEquipe()
    {
        return $this->equipe;
    }

    /**
     * Set dateFinProjet
     *
     * @param \DateTime $dateFinProjet
     * @return Projet
     */
    public function setDateFinProjet($dateFinProjet)
    {
        $this->dateFinProjet = $dateFinProjet;

        return $this;
    }

    /**
     * Get dateFinProjet
     *
     * @return \DateTime 
     */
    public function getDateFinProjet()
    {
        return $this->dateFinProjet;
    }
}
