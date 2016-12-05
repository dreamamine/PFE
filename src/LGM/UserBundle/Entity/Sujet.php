<?php

namespace LGM\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sujet
 *
 * @ORM\Table(name="sujet")
 * @ORM\Entity(repositoryClass="LGM\UserBundle\Repository\SujetRepository")
 */
class Sujet
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;
     
    
    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;
     

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
     * @return Sujet
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
     * Set title
     *
     * @param string $title
     * @return Sujet
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set directeur
     *
     * @param string $directeur
     * @return Sujet
     */
    public function setDirecteur($directeur)
    {
        $this->directeur = $directeur;

        return $this;
    }

    /**
     * Get directeur
     *
     * @return string 
     */
    public function getDirecteur()
    {
        return $this->directeur;
    }

    /**
     * Set codirecteur
     *
     * @param string $codirecteur
     * @return Sujet
     */
    public function setCodirecteur($codirecteur)
    {
        $this->codirecteur = $codirecteur;

        return $this;
    }

    /**
     * Get codirecteur
     *
     * @return string 
     */
    public function getCodirecteur()
    {
        return $this->codirecteur;
    }

    /**
     * Set etbInscrip
     *
     * @param string $etbInscrip
     * @return Sujet
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
     * @return Sujet
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
     * Set etat
     *
     * @param string $etat
     * @return Sujet
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }
    
    
    public function __toString()
    {
      
        return $this->getTitle();
        
    }
}
