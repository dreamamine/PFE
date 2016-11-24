<?php

namespace LGM\AdministrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Media
 *
 * @ORM\Table()
 * @ORM\Entity()
 * @ORM\HasLifecycleCallbacks()
 */
class Media
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;


    private $file;
    //on ajoute cet attribut pour stocker le nom du fichier temporaire    
    private $tempFilename;
    
    //on modifie le setter de file , pour prendre en compte l'upload d'un fichier
    public function setFile(UploadedFile $file)
    {
        
        $this->file= $file;
        //on vérifie si avait déja un fichier pour cet entity
        if(null !== $this->url){
            //on sauvegarde l'extension du fichier pour le suprimer plus tard
         $this->tempFilename = $this->url;
         //on reinitialise les valeurs des attributs url et alt
        $this->url='url';
        $this->url='alt';
        }
    }    
    
    public function getFile()
    {
        return $this->file;
    }
    /**
     * 
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload(){
        //si jamais il n'y a pas de  fichier 
        if(null === $this->file){
            return;
        }
        
        //le nom du fichier est son id , on doit juste stocker son extension
        // pour faire propre, on devrait renommer cet attribu en "extension", plutôt
        $this->url = $this->file->guessExtension();
        //
        $this->alt = $this->file->getClientOriginalName();
        
    }
    
    /**
     * 
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    
    public function  upload(){
        //si jamais il n'ya pa de fichier
        if(null== $this->file){
            return;
        }
        
        //si on avait un ancien fichier, on le supprime
        if(null !== $this->tempFilename){
            $oldFile = $this->getUploadRootDir().'/'.$this->id.'.'.$this->tempFilename;
            if(file_exists($oldFile)){
                unlink ($oldFile);
            }
           
        }
          // on déplace le fichier envoyé dans le repertoire de notre choix
        $this->file->move(
                $this->getUploadRootDir(), //le repertoire de destination
                $this->id.'.'.$this->url // le nom de fichier à creer, ici id.extension
                );
    }
    
    
    /**
     * 
     * @ORM\PreRemove()
     */
    
    public function preRemoveUpload(){
        //on sauvegarde temporairement le nom du fichier, car il dépend de l'id
        $this->tempFilename= $this->getUploadRootDir().'/'.$this->id.'.'.$this->url;
    }
    
    /**
     * 
     * @ORM\PostRemove()
     */

   public function RemoveUpload(){
       //en postRemove, on n'a pas accés à l'id , on utilise notre nom sauvegardé
       if(file_exists($this->tempFilename)){
           //on supprime le fichier
           unlink ($this->tempFilename);
       }
    }
    
    public function getUploadDir()
    {
        //on retourne le chemin relatif vers l'image pour un navigateur
        return 'uploads/img';
        
    }
    
    protected function getUploadRootDir()
    {
        //on retourne le chemin relatif vers l'image pour notre code PHP
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
 
    public function  getWebpath()
    {
        return $this->getUploadDir().'/'.$this->getId().'.'.$this->getUrl();
        
    }

    



  





    public function getId()
    {
        return $this->id;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Media
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set alt
     *
     * @param string $alt
     * @return Media
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;
    
        return $this;
    }

    /**
     * Get alt
     *
     * @return string 
     */
    public function getAlt()
    {
        return $this->alt;
    }
}
