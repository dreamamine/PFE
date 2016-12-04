<?php

namespace LGM\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LGM\AdministrationBundle\Entity\Article;
use LGM\AdministrationBundle\Form\ArticleType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class ArticleController extends Controller
{
    
    
    
    public function indexAction()
    {
        $article =  new Article();
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('LGMAdministrationBundle:Article')->findAll();
       
        return $this->render('LGMAdministrationBundle:Article:index.html.twig', array('articles'=>$article));
    }
    
        
     public function newAction(Request $request)
    {
         
                       
         $article = new Article;
        
         $form = $this->createForm( new ArticleType(),$article);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
              if ($form->isSubmitted() && $form->isValid()) {
             {
                  
                                                
                 $em = $this->getDoctrine()->getManager();
                 
                 $em->persist($article);
                                                
                 $em->flush();
                 
                 
                 return $this->redirect($this->generateUrl('index_article'));
                         
             }
         }
         }
        return $this->render('LGMAdministrationBundle:Article:new.html.twig',array('form'=>$form->createView()));
     
    
    
    }
     public function editAction(Request $request, $token)
    {
          $em = $this->getDoctrine()->getManager();
         $article = new Article;
         $article = $em->getRepository('LGMAdministrationBundle:Article')->findOneByToken($token);
         $form = $this->createForm( new ArticleType(),$article);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                
                 $em->persist($article);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_article'));
                         
             }
         }
        return $this->render('LGMAdministrationBundle:Article:edit.html.twig', array('form'=>$form->createView()));
    }
    
    
    
   public function deleteAction(Article $article, Request $request)
    {
        $form = $this->createFormBuilder()->getForm();
        
        if($request->getMethod()=='POST')
         {
          $form->handleRequest($request);
             if ($form->isValid())
             {
         $em = $this->getDoctrine()->getManager();
         $em->remove($article);
         $em->flush();
         return $this->redirect($this->generateUrl('index_article'));
             }
         }
        return $this->render('LGMAdministrationBundle:Article:delete.html.twig'
                , array('article'=>$article, 'form'=>$form->createView())
                );
    }

    
}
