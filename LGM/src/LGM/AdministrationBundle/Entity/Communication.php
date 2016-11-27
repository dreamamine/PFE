<?php

namespace LGM\AdministrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Communication
 *
 * @ORM\Table(name="communication")
 * @ORM\Entity(repositoryClass="LGM\AdministrationBundle\Repository\CommunicationRepository")
 */
class Communication
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
     * @ORM\Column(name="nomCongrer", type="string", length=255)
     */
    private $nomCongrer;
    
    /**
     * @var string
     *
     * @ORM\Column(name="indxType", type="string", length=255)
     */
    private $indxType;


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
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=false, unique=true)
     */
     
    private $token;
    
    /**
     * @ORM\OneToOne(targetEntity="LGM\AdministrationBundle\Entity\Media", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    
    private $brochure;
    
       
     /**
     *@ORM\ManyToMany(targetEntity="LGM\UserBundle\Entity\User", inversedBy="communictaions", cascade={"persist", "remove"})
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
     * @return Communication
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
     * @return Communication
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
     * @return Communication
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
     * @return Communication
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
     * Set nomCongrer
     *
     * @param string $nomCongrer
     * @return Communication
     */
    public function setNomCongrer($nomCongrer)
    {
        $this->nomCongrer = $nomCongrer;

        return $this;
    }

    /**
     * Get nomCongrer
     *
     * @return string 
     */
    public function getNomCongrer()
    {
        return $this->nomCongrer;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return Communication
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
     * @return Communication
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
     * @return Communication
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
     * @return Communication
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
     * @return Communication
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
     * @return Communication
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

    /**
     * Set indx
     *
     * @param string $indx
     * @return Communication
     */
    public function setIndx($indx)
    {
        $this->indx = $indx;

        return $this;
    }

    /**
     * Get indx
     *
     * @return string 
     */
    public function getIndx()
    {
        return $this->indx;
    }

    /**
     * Set indxType
     *
     * @param string $indxType
     * @return Communication
     */
    public function setIndxType($indxType)
    {
        $this->indxType = $indxType;

        return $this;
    }

    /**
     * Get indxType
     *
     * @return string 
     */
    public function getIndxType()
    {
        return $this->indxType;
    }
}
