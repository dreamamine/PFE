<?php

namespace LGM\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LGM\AdministrationBundle\Entity\Auteur;
use LGM\AdministrationBundle\Form\AuteurType;
use Symfony\Component\HttpFoundation\Request;
use LGM\AdministrationBundle\Entity\Article;
class AuteurController extends Controller
{
    public function indexAction(Article $article)
    {
        $auteur =  new Auteur();
        $em = $this->getDoctrine()->getManager();
        $auteur = $em->getRepository('LGMAdministrationBundle:Auteur')->findByArticle($article);
        
        return $this->render('LGMAdministrationBundle:Auteur:index.html.twig', array('auteurs'=>$auteur,'article'=>$article));
    }
     public function newAction(Request $request, Article $article)
    {
         $auteur = new Auteur;
         $form = $this->createForm( new AuteurType(),$auteur);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                 $em = $this->getDoctrine()->getManager();
                 $auteur->setArticle($article);
                 $em->persist($auteur);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_auteur',array('token'=>$article->getToken())));
                         
             }
         }
        return $this->render('LGMAdministrationBundle:Auteur:new.html.twig',array('form'=>$form->createView(),'article'=>$article,));
    }
     public function editAction(Request $request, $token)
    {
          $em = $this->getDoctrine()->getManager();
         $auteur = new Auteur;
         $auteur = $em->getRepository('LGMAdministrationBundle:Auteur')->findOneByToken($token);
         $form = $this->createForm( new AuteurType(),$auteur);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                
                 $em->persist($auteur);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_auteur',array('token'=>$auteur->getArticle()->getToken(),'auteur'=>$auteur,)));
                         
             }
         }
        return $this->render('LGMAdministrationBundle:Auteur:edit.html.twig', array('form'=>$form->createView(),'article'=>$auteur->getArticle()->getToken(),'auteur'=>$auteur,));
    }
     public function deleteAction(Auteur $auteur, Request $request)
    {
        $form = $this->createFormBuilder()->getForm();
        
        if($request->getMethod()=='POST')
         {
          $form->handleRequest($request);
             if ($form->isValid())
             {
         $em = $this->getDoctrine()->getManager();
         $em->remove($auteur);
         $em->flush();
         return $this->redirect($this->generateUrl('index_auteur',array('token'=>$auteur->getArticle()->getToken())));
             }
         }
        return $this->render('LGMAdministrationBundle:Auteur:delete.html.twig'
                , array('auteur'=>$auteur, 'form'=>$form->createView())
                );
    }
    
    
}
