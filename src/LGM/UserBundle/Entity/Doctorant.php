<?php

namespace LGM\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Doctorant
 *
 * @ORM\Table(name="doctorant")
 * @ORM\Entity(repositoryClass="LGM\UserBundle\Repository\DoctorantRepository")
 */
 class Doctorant 
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="qualite", type="string", length=255)
     */
    public  $qualite;
    
   /**
     * @var int
     * 
     * @ORM\Column(name="cINDoctorant", type="integer", nullable=false)
     */
    public  $cINDoctorant;



    /**
     * @var string
     * 
     * @ORM\Column(name="nomJeuneFille", type="string", nullable=true)
     */
    public  $nomJeuneFille;

    /**
     * @var string $dateNaiss
     *
     * @ORM\Column(name="dateNaiss", type="date", nullable=true)
     */
    public  $dateNaiss;

    /**
     * @var string
     * 
     * @ORM\Column(name="lieuNaiss", type="string", nullable=true)
     */
    public  $lieuNaiss;

    /**
     * @var string
     * 
     * @ORM\Column(name="sexe", type="string", nullable=true)
     */
    public  $sexe;

    /**
     * @var int
     * 
     * @ORM\Column(name="telMob", type="integer", nullable=true)
     */
    public  $telMob;

    /**
     * @var int
     * 
     *@ORM\Column(name="telFixe", type="integer", nullable=true)
     */
    public  $telFixe;



    /**
     * @var string
     * 
     * @ORM\Column(name="dernierDepObtenu", type="string", nullable=true)
     */
    public  $dernierDepObtenu;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="dateDepObtenu", type="date", nullable=true)
     */
    public  $dateDepObtenu;

    /**
     * @var string
     * 
     * @ORM\Column(name="etabDepObtenu", type="string", nullable=true)
     */
    public  $etabDepObtenu;

   /**
     * @var string
     * 
     * @ORM\Column(name="intituleSujet", type="string", nullable=true)
     */
    public  $intituleSujet;
    
     /**
     * @var string
     *
     * @ORM\Column(name="encadrant", type="string", length=255)
     */
    public  $encadrant;

    /**
     * @var int
     * 
     * @ORM\Column(name="tauxAvancement", type="integer", nullable=true)
     */
    public  $tauxAvancement;
    
        
    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="anneePremierInscrip", type="date", nullable=true)
     */
    public  $anneePremierInscrip;

    /**
     * @var string
     * 
     * @ORM\Column(name="etbInscrip", type="string", nullable=true)
     */
    public  $etbInscrip;

    /**
     * @var string
     * 
     * @ORM\Column(name="etabInscrip2", type="string", nullable=true)
     */
    public  $etabInscrip2;

       
    
    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=false, unique=true)
     */
    public $token;
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
     * @return Doctorant
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
     * Set cINDoctorant
     *
     * @param integer $cINDoctorant
     * @return Doctorant
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
     * Set nomJeuneFille
     *
     * @param string $nomJeuneFille
     * @return Doctorant
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
     * @return Doctorant
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
     * @return Doctorant
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
     * @return Doctorant
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
     * @return Doctorant
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
     * @return Doctorant
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
     * @return Doctorant
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
     * @return Doctorant
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
     * @return Doctorant
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
     * @return Doctorant
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
     * @return Doctorant
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
     * @return Doctorant
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
     * @return Doctorant
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
     * @return Doctorant
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
     * @return Doctorant
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
     * @return Doctorant
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
     * Set sujet
     *
     * @param \LGM\UserBundle\Entity\Sujet $sujet
     * @return Doctorant
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

    /**
     * Set encadrant
     *
     * @param string $encadrant
     * @return Doctorant
     */
    public function setEncadrant($encadrant)
    {
        $this->encadrant = $encadrant;

        return $this;
    }

    /**
     * Get encadrant
     *
     * @return string 
     */
    public function getEncadrant()
    {
        return $this->encadrant;
    }
}
