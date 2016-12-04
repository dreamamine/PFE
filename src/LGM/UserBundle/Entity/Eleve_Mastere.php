<?php

namespace LGM\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eleve_Mastere
 *
 * @ORM\Table(name="eleve__mastere")
 * @ORM\Entity(repositoryClass="LGM\UserBundle\Repository\Eleve_MastereRepository")
 */
class Eleve_Mastere
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
     * @ORM\Column(name="qualite", type="string", length=255)
     */
    private  $qualite;
    
   /**
     * @var int
     * 
     * @ORM\Column(name="cINDoctorant", type="integer", nullable=false)
     */
    private  $cINDoctorant;

 

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
     * @ORM\Column(name="eMail", type="string", nullable=true)
     */
    private  $eMail;

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
     * @ORM\OneToOne(targetEntity="LGM\UserBundle\Entity\Sujet", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    
    private $sujet;
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
     * Set token
     *
     * @param string $token
     * @return Eleve_Mastere
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
     * Set qualite
     *
     * @param string $qualite
     * @return Eleve_Mastere
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
     * Set cINDoctorant
     *
     * @param integer $cINDoctorant
     * @return Eleve_Mastere
     */
    public function setCINDoctorant($cINDoctorant)
    {
        $this->cINDoctorant = $cINDoctorant;

        return $this;
    }

    /**
     * Get cINDoctorant
     *
     * @return integer 
     */
    public function getCINDoctorant()
    {
        return $this->cINDoctorant;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Eleve_Mastere
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
     * @return Eleve_Mastere
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
     * Set nomJeuneFille
     *
     * @param string $nomJeuneFille
     * @return Eleve_Mastere
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
     * @return Eleve_Mastere
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
     * @return Eleve_Mastere
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
     * @return Eleve_Mastere
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
     * @return Eleve_Mastere
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
     * @return Eleve_Mastere
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
     * Set eMail
     *
     * @param string $eMail
     * @return Eleve_Mastere
     */
    public function setEMail($eMail)
    {
        $this->eMail = $eMail;

        return $this;
    }

    /**
     * Get eMail
     *
     * @return string 
     */
    public function getEMail()
    {
        return $this->eMail;
    }

    /**
     * Set dernierDepObtenu
     *
     * @param string $dernierDepObtenu
     * @return Eleve_Mastere
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
     * @return Eleve_Mastere
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
     * @return Eleve_Mastere
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
     * @return Eleve_Mastere
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
     * Set anneePremierInscrip
     *
     * @param \DateTime $anneePremierInscrip
     * @return Eleve_Mastere
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
     * @return Eleve_Mastere
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
     * Set sujet
     *
     * @param \LGM\UserBundle\Entity\Sujet $sujet
     * @return Eleve_Mastere
     */
    public function setSujet(\LGM\UserBundle\Entity\Sujet $sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get sujet
     *
     * @return \LGM\UserBundle\Entity\Sujet 
     */
    public function getSujet()
    {
        return $this->sujet;
    }
}
