<?php

namespace LGM\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

/**
 * Chercheur_Junior
 *
 * @ORM\Table(name="fos_chercheur_junior")
 * @ORM\Entity(repositoryClass="LGM\UserBundle\Repository\Chercheur_JuniorRepository")
 * @UniqueEntity(fields = "username", targetClass = "LGM\UserBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "LGM\UserBundle\Entity\User", message="fos_user.email.already_used")
 */
class Chercheur_Junior extends User
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
     * @ORM\Column(name="qualite", type="string", length=255)
     */
    private  $qualite;
    
   /**
     * @var int
     * 
     * @ORM\Column(name="cINChercheur_Junior", type="integer", nullable=false)
     */
    private  $cINChercheur_Junior;



    /**
     * @var string
     * 
     * @ORM\Column(name="nomJeuneFille", type="string", nullable=true)
     */
    private  $nomJeuneFille;

    /**
     * @var string $dateNaiss
     *
     * @ORM\Column(name="dateNaiss", type="date", nullable=true)
     */
    private  $dateNaiss;

    /**
     * @var string
     * 
     * @ORM\Column(name="lieuNaiss", type="string", nullable=true)
     */
    private  $lieuNaiss;

    /**
     * @var string
     * 
     * @ORM\Column(name="sexe", type="string", nullable=true)
     */
    private  $sexe;

    /**
     * @var int
     * 
     * @ORM\Column(name="telMob", type="integer", nullable=true)
     */
    private  $telMob;

    /**
     * @var int
     * 
     *@ORM\Column(name="telFixe", type="integer", nullable=true)
     */
    private  $telFixe;


    /**
     * @var string
     * 
     * @ORM\Column(name="dernierDepObtenu", type="string", nullable=true)
     */
    private  $dernierDepObtenu;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="dateDepObtenu", type="date", nullable=true)
     */
    private  $dateDepObtenu;

    /**
     * @var string
     * 
     * @ORM\Column(name="etabDepObtenu", type="string", nullable=true)
     */
    private  $etabDepObtenu;

    /**
     * @var string
     * 
     * @ORM\Column(name="intituleSujet", type="string", nullable=true)
     */
    private  $intituleSujet;

    /**
     * @var int
     * 
     * @ORM\Column(name="tauxAvancement", type="integer", nullable=true)
     */
    private  $tauxAvancement;
    
        
    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="anneePremierInscrip", type="date", nullable=true)
     */
    private  $anneePremierInscrip;

    /**
     * @var string
     * 
     * @ORM\Column(name="etbInscrip", type="string", nullable=true)
     */
    private  $etbInscrip;

    /**
     * @var string
     * 
     * @ORM\Column(name="etabInscrip2", type="string", nullable=true)
     */
    private  $etabInscrip2;

   /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=false, unique=true)
     */
    private $token;
    
    
    public function __construct() {
        parent::__construct();
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
     * Set nomJeuneFille
     *
     * @param string $nomJeuneFille
     * @return Chercheur_Junior
     */
    public function setNomJeuneFille($nomJeuneFille)
    {
        $this->nomJeuneFille = $nomJeuneFille;

        return $this;
    }

    /**
     * Get nomJeuneFille
     *
     * @return string 
     */
    public function getNomJeuneFille()
    {
        return $this->nomJeuneFille;
    }

    /**
     * Set dateNaiss
     *
     * @param \DateTime $dateNaiss
     * @return Chercheur_Junior
     */
    public function setDateNaiss($dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    /**
     * Get dateNaiss
     *
     * @return \DateTime 
     */
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * Set lieuNaiss
     *
     * @param string $lieuNaiss
     * @return Chercheur_Junior
     */
    public function setLieuNaiss($lieuNaiss)
    {
        $this->lieuNaiss = $lieuNaiss;

        return $this;
    }

    /**
     * Get lieuNaiss
     *
     * @return string 
     */
    public function getLieuNaiss()
    {
        return $this->lieuNaiss;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return Chercheur_Junior
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set telMob
     *
     * @param integer $telMob
     * @return Chercheur_Junior
     */
    public function setTelMob($telMob)
    {
        $this->telMob = $telMob;

        return $this;
    }

    /**
     * Get telMob
     *
     * @return integer 
     */
    public function getTelMob()
    {
        return $this->telMob;
    }

    /**
     * Set telFixe
     *
     * @param integer $telFixe
     * @return Chercheur_Junior
     */
    public function setTelFixe($telFixe)
    {
        $this->telFixe = $telFixe;

        return $this;
    }

    /**
     * Get telFixe
     *
     * @return integer 
     */
    public function getTelFixe()
    {
        return $this->telFixe;
    }

    

    /**
     * Set dernierDepObtenu
     *
     * @param string $dernierDepObtenu
     * @return Chercheur_Junior
     */
    public function setDernierDepObtenu($dernierDepObtenu)
    {
        $this->dernierDepObtenu = $dernierDepObtenu;

        return $this;
    }

    /**
     * Get dernierDepObtenu
     *
     * @return string 
     */
    public function getDernierDepObtenu()
    {
        return $this->dernierDepObtenu;
    }

    /**
     * Set dateDepObtenu
     *
     * @param \DateTime $dateDepObtenu
     * @return Chercheur_Junior
     */
    public function setDateDepObtenu($dateDepObtenu)
    {
        $this->dateDepObtenu = $dateDepObtenu;

        return $this;
    }

    /**
     * Get dateDepObtenu
     *
     * @return \DateTime 
     */
    public function getDateDepObtenu()
    {
        return $this->dateDepObtenu;
    }

    /**
     * Set etabDepObtenu
     *
     * @param string $etabDepObtenu
     * @return Chercheur_Junior
     */
    public function setEtabDepObtenu($etabDepObtenu)
    {
        $this->etabDepObtenu = $etabDepObtenu;

        return $this;
    }

    /**
     * Get etabDepObtenu
     *
     * @return string 
     */
    public function getEtabDepObtenu()
    {
        return $this->etabDepObtenu;
    }

    /**
     * Set intituleSujet
     *
     * @param string $intituleSujet
     * @return Chercheur_Junior
     */
    public function setIntituleSujet($intituleSujet)
    {
        $this->intituleSujet = $intituleSujet;

        return $this;
    }

    /**
     * Get intituleSujet
     *
     * @return string 
     */
    public function getIntituleSujet()
    {
        return $this->intituleSujet;
    }

    /**
     * Set tauxAvancement
     *
     * @param integer $tauxAvancement
     * @return Chercheur_Junior
     */
    public function setTauxAvancement($tauxAvancement)
    {
        $this->tauxAvancement = $tauxAvancement;

        return $this;
    }

    /**
     * Get tauxAvancement
     *
     * @return integer 
     */
    public function getTauxAvancement()
    {
        return $this->tauxAvancement;
    }

    /**
     * Set anneePremierInscrip
     *
     * @param \DateTime $anneePremierInscrip
     * @return Chercheur_Junior
     */
    public function setAnneePremierInscrip($anneePremierInscrip)
    {
        $this->anneePremierInscrip = $anneePremierInscrip;

        return $this;
    }

    /**
     * Get anneePremierInscrip
     *
     * @return \DateTime 
     */
    public function getAnneePremierInscrip()
    {
        return $this->anneePremierInscrip;
    }

    /**
     * Set etbInscrip
     *
     * @param string $etbInscrip
     * @return Chercheur_Junior
     */
    public function setEtbInscrip($etbInscrip)
    {
        $this->etbInscrip = $etbInscrip;

        return $this;
    }

    /**
     * Get etbInscrip
     *
     * @return string 
     */
    public function getEtbInscrip()
    {
        return $this->etbInscrip;
    }

    /**
     * Set etabInscrip2
     *
     * @param string $etabInscrip2
     * @return Chercheur_Junior
     */
    public function setEtabInscrip2($etabInscrip2)
    {
        $this->etabInscrip2 = $etabInscrip2;

        return $this;
    }

    /**
     * Get etabInscrip2
     *
     * @return string 
     */
    public function getEtabInscrip2()
    {
        return $this->etabInscrip2;
    }

    /**
     * Set qualite
     *
     * @param string $qualite
     * @return Chercheur_Junior
     */
    public function setQualite($qualite)
    {
        $this->qualite = $qualite;

        return $this;
    }

    /**
     * Get qualite
     *
     * @return string 
     */
    public function getQualite()
    {
        return $this->qualite;
    }

    /**
     * Set cINChercheur_Junior
     *
     * @param integer $cINChercheurJunior
     * @return Chercheur_Junior
     */
    public function setCINChercheurJunior($cINChercheurJunior)
    {
        $this->cINChercheur_Junior = $cINChercheurJunior;

        return $this;
    }

    /**
     * Get cINChercheur_Junior
     *
     * @return integer 
     */
    public function getCINChercheurJunior()
    {
        return $this->cINChercheur_Junior;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return Chercheur_Junior
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
