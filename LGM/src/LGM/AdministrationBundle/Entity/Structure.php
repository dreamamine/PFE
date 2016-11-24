<?php

namespace LGM\AdministrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Structure
 *
 * @ORM\Table(name="structure")
 * @ORM\Entity(repositoryClass="LGM\AdministrationBundle\Repository\StructureRepository")
 */
class Structure
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
     * @var int
     *
     * @ORM\Column(name="code_structure", type="string", length=255)
     */
    private $codeStructure;

    /**
     * @var string
     *
     * @ORM\Column(name="universite", type="string", length=255)
     */
    private $universite;

    /**
     * @var string
     *
     * @ORM\Column(name="etablissement", type="string", length=255)
     */
    private $etablissement;

    /**
     * @var string
     *
     * @ORM\Column(name="denomination", type="string", length=255)
     */
    private $denomination;

    /**
     * @var int
     *
     * @ORM\Column(name="cin_resp", type="integer")
     */
    private $cinResp;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_resp", type="string", length=255)
     */
    private $nomResp;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_resp", type="string", length=255)
     */
    private $prenomResp;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255)
     */
    private $website;

    /**
     * @var \Date
     *
     * @ORM\Column(name="date_creation", type="date")
     */
    private $dateCreation;

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
     * Set codeStructure
     *
     * @param integer $codeStructure
     * @return Structure
     */
    public function setCodeStructure($codeStructure)
    {
        $this->codeStructure = $codeStructure;

        return $this;
    }

    /**
     * Get codeStructure
     *
     * @return integer 
     */
    public function getCodeStructure()
    {
        return $this->codeStructure;
    }

    /**
     * Set universite
     *
     * @param string $universite
     * @return Structure
     */
    public function setUniversite($universite)
    {
        $this->universite = $universite;

        return $this;
    }

    /**
     * Get universite
     *
     * @return string 
     */
    public function getUniversite()
    {
        return $this->universite;
    }

    /**
     * Set etablissement
     *
     * @param string $etablissement
     * @return Structure
     */
    public function setEtablissement($etablissement)
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Get etablissement
     *
     * @return string 
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    /**
     * Set denomination
     *
     * @param string $denomination
     * @return Structure
     */
    public function setDenomination($denomination)
    {
        $this->denomination = $denomination;

        return $this;
    }

    /**
     * Get denomination
     *
     * @return string 
     */
    public function getDenomination()
    {
        return $this->denomination;
    }

    /**
     * Set cinResp
     *
     * @param integer $cinResp
     * @return Structure
     */
    public function setCinResp($cinResp)
    {
        $this->cinResp = $cinResp;

        return $this;
    }

    /**
     * Get cinResp
     *
     * @return integer 
     */
    public function getCinResp()
    {
        return $this->cinResp;
    }

    /**
     * Set nomResp
     *
     * @param string $nomResp
     * @return Structure
     */
    public function setNomResp($nomResp)
    {
        $this->nomResp = $nomResp;

        return $this;
    }

    /**
     * Get nomResp
     *
     * @return string 
     */
    public function getNomResp()
    {
        return $this->nomResp;
    }

    /**
     * Set prenomResp
     *
     * @param string $prenomResp
     * @return Structure
     */
    public function setPrenomResp($prenomResp)
    {
        $this->prenomResp = $prenomResp;

        return $this;
    }

    /**
     * Get prenomResp
     *
     * @return string 
     */
    public function getPrenomResp()
    {
        return $this->prenomResp;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return Structure
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Structure
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return Structure
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
