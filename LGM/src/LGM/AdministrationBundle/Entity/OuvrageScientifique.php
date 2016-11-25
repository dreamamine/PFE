<?php

namespace LGM\AdministrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OuvrageScientifique
 *
 * @ORM\Table(name="ouvrageScientifique")
 * @ORM\Entity(repositoryClass="LGM\AdministrationBundle\Repository\OuvrageScientifiqueRepository")
 */
class OuvrageScientifique
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="anneePublication", type="date")
     */
    private $anneePublication;

    /**
     * @var int
     *
     * @ORM\Column(name="nbAuteur", type="integer")
     */
    private $nbAuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="valeur", type="string", length=255)
     */
    private $valeur;

    /**
     * @var string
     *
     * @ORM\Column(name="edition", type="string", length=255)
     */
    private $edition;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=false, unique=true)
     */
           
            
    private $token;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="vol", type="string", length=255)
     */
    private $vol;

    /**
     * @var string
     *
     * @ORM\Column(name="num", type="string", length=255)
     */
    private $num;

    /**
     * @var string
     *
     * @ORM\Column(name="pp", type="string", length=255)
     */
    private $pp;
    
    
     /**
     * @ORM\OneToOne(targetEntity="LGM\AdministrationBundle\Entity\Media", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    
    private $brochure;
    
    
    /**
     *@ORM\ManyToMany(targetEntity="LGM\UserBundle\Entity\User", inversedBy="ouvrages", cascade={"persist", "remove"})
     */
    
    private $users;
  
    
    public function __construct() {
        $this->token = base_convert(sha1(uniqid(mt_rand(1, 999), true)),16, 36);
        $this->nbAuteur = 0;
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
     * Set titre
     *
     * @param string $titre
     * @return OuvrageScientifique
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set anneePublication
     *
     * @param \DateTime $anneePublication
     * @return OuvrageScientifique
     */
    public function setAnneePublication($anneePublication)
    {
        $this->anneePublication = $anneePublication;

        return $this;
    }

    /**
     * Get anneePublication
     *
     * @return \DateTime 
     */
    public function getAnneePublication()
    {
        return $this->anneePublication;
    }

    /**
     * Set nbAuteur
     *
     * @param integer $nbAuteur
     * @return OuvrageScientifique
     */
    public function setNbAuteur($nbAuteur)
    {
        $this->nbAuteur = $nbAuteur;

        return $this;
    }

    /**
     * Get nbAuteur
     *
     * @return integer 
     */
    public function getNbAuteur()
    {
        return $this->nbAuteur;
    }

    /**
     * Set valeur
     *
     * @param string $valeur
     * @return OuvrageScientifique
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return string 
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set edition
     *
     * @param string $edition
     * @return OuvrageScientifique
     */
    

    /**
     * Set edition
     *
     * @param string $edition
     * @return OuvrageScientifique
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;

        return $this;
    }

    /**
     * Get edition
     *
     * @return string 
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return OuvrageScientifique
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
     * Set brochure
     *
     * @param \LGM\AdministrationBundle\Entity\Media $brochure
     * @return OuvrageScientifique
     */
    public function setBrochure(\LGM\AdministrationBundle\Entity\Media $brochure)
    {
        $this->brochure = $brochure;

        return $this;
    }

    /**
     * Get brochure
     *
     * @return \LGM\AdministrationBundle\Entity\Media 
     */
    public function getBrochure()
    {
        return $this->brochure;
    }

    /**
     * Set vol
     *
     * @param string $vol
     * @return OuvrageScientifique
     */
    public function setVol($vol)
    {
        $this->vol = $vol;

        return $this;
    }

    /**
     * Get vol
     *
     * @return string 
     */
    public function getVol()
    {
        return $this->vol;
    }

    /**
     * Set num
     *
     * @param string $num
     * @return OuvrageScientifique
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return string 
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set pp
     *
     * @param string $pp
     * @return OuvrageScientifique
     */
    public function setPp($pp)
    {
        $this->pp = $pp;

        return $this;
    }

    /**
     * Get pp
     *
     * @return string 
     */
    public function getPp()
    {
        return $this->pp;
    }

    /**
     * Add users
     *
     * @param \LGM\UserBundle\Entity\User $users
     * @return OuvrageScientifique
     */
    public function addUser(\LGM\UserBundle\Entity\User $users)
    {
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
