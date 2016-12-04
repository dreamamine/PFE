<?php

namespace LGM\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

/**
 * Enseignant_Chercheur
 *
 * @ORM\Table(name="fos_enseignant_chercheur")
 * @ORM\Entity(repositoryClass="LGM\UserBundle\Repository\Enseignant_ChercheurRepository")
 * @UniqueEntity(fields = "username", targetClass = "LGM\UserBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "LGM\UserBundle\Entity\User", message="fos_user.email.already_used")
 */
class Enseignant_Chercheur extends User
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
     * @ORM\Column(name="grade", type="string", length=255)
     */
    private $grade;

    /**
     * @var int
     *
     * @ORM\Column(name="CIN_EnseigCh", type="integer")
     * 
     */
    private  $cINEnseigCh;

    


    /**
     * @var string
     *
     * @ORM\Column(name="nom_jeune_fille", type="string", length=255)
     */
    private $nomJeuneFille;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naiss", type="date")
     */
    private $dateNaiss;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_naiss", type="string", length=255)
     */
    private $lieuNaiss;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="etablisement", type="string", length=255)
     */
    private $etablisement;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=255)
     */
    private $fonction;

    /**
     * @var int
     *
     * @ORM\Column(name="tel_mob", type="integer")
     */
    private $telMob;

    /**
     * @var int
     *
     * @ORM\Column(name="tel_fixe", type="integer")
     */
    private $telFixe;

  

    /**
     * @var string
     *
     * @ORM\Column(name="dernier_dep_obtenu", type="string", length=255)
     */
    private $dernierDepObtenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_dep_obtenu", type="date")
     */
    private $dateDepObtenu;

    /**
     * @var string
     *
     * @ORM\Column(name="etab_dep_obtenu", type="string", length=255)
     */
    private $etabDepObtenu;

    
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
     * Set cINEnseigCh
     *
     * @param integer $cINEnseigCh
     * @return Enseignant_Chercheur
     */
    public function setCINEnseigCh($cINEnseigCh)
    {
        $this->cINEnseigCh = $cINEnseigCh;

        return $this;
    }

    /**
     * Get cINEnseigCh
     *
     * @return integer 
     */
    public function getCINEnseigCh()
    {
        return $this->cINEnseigCh;
    }

    

    /**
     * Set nomJeuneFille
     *
     * @param string $nomJeuneFille
     * @return Enseignant_Chercheur
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
     * @return Enseignant_Chercheur
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
     * @return Enseignant_Chercheur
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
     * @return Enseignant_Chercheur
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
     * Set grade
     *
     * @param string $grade
     * @return Enseignant_Chercheur
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return string 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set etablisement
     *
     * @param string $etablisement
     * @return Enseignant_Chercheur
     */
    public function setEtablisement($etablisement)
    {
        $this->etablisement = $etablisement;

        return $this;
    }

    /**
     * Get etablisement
     *
     * @return string 
     */
    public function getEtablisement()
    {
        return $this->etablisement;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     * @return Enseignant_Chercheur
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return string 
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set telMob
     *
     * @param integer $telMob
     * @return Enseignant_Chercheur
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
     * @return Enseignant_Chercheur
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
     * @return Enseignant_Chercheur
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
     * @return Enseignant_Chercheur
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
     * @return Enseignant_Chercheur
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
     * Set token
     *
     * @param string $token
     * @return Enseignant_Chercheur
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
