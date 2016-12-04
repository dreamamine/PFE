<?php

namespace LGM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LGM\UserBundle\Entity\Enseignant_Chercheur;
use LGM\UserBundle\Form\Enseignant_ChercheurType;
use Symfony\Component\HttpFoundation\Request;

class Enseignant_ChercheurController extends Controller
{
    public function indexAction()
    {
        $enseignant_Chercheur =  new Enseignant_Chercheur();
        $em = $this->getDoctrine()->getManager();
        $enseignant_Chercheur = $em->getRepository('LGMUserBundle:Enseignant_Chercheur')->findAll();
        
        return $this->render('LGMUserBundle:Enseignant_Chercheur:index.html.twig', array('enseignant_Chercheurs'=>$enseignant_Chercheur));
    }
     public function newAction(Request $request)
    {
         $enseignant_Chercheur = new Enseignant_Chercheur;
         $form = $this->createForm( new Enseignant_ChercheurType(),$enseignant_Chercheur);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                 $em = $this->getDoctrine()->getManager();
                 $em->persist($enseignant_Chercheur);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_enseignant_Chercheur'));
                         
             }
         }
        return $this->render('LGMUserBundle:Enseignant_Chercheur:new.html.twig',array('form'=>$form->createView()));
    }
     public function editAction(Request $request, $token)
    {
          $em = $this->getDoctrine()->getManager();
         $enseignant_Chercheur = new Enseignant_Chercheur;
         $enseignant_Chercheur = $em->getRepository('LGMUserBundle:Enseignant_Chercheur')->findOneByToken($token);
         $form = $this->createForm( new Enseignant_ChercheurType(),$enseignant_Chercheur);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                
                 $em->persist($enseignant_Chercheur);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_enseignant_Chercheur'));
                         
             }
         }
        return $this->render('LGMUserBundle:Enseignant_Chercheur:edit.html.twig', array('form'=>$form->createView()));
    }
     public function deleteAction(Enseignant_Chercheur $enseignant_Chercheur, Request $request)
    {
        $form = $this->createFormBuilder()->getForm();
        
        if($request->getMethod()=='POST')
         {
          $form->handleRequest($request);
             if ($form->isValid())
             {
         $em = $this->getDoctrine()->getManager();
         $em->remove($enseignant_Chercheur);
         $em->flush();
         return $this->redirect($this->generateUrl('index_enseignant_Chercheur'));
             }
         }
        return $this->render('LGMUserBundle:Enseignant_Chercheur:delete.html.twig'
                , array('enseignant_Chercheur'=>$enseignant_Chercheur, 'form'=>$form->createView())
                );
    }
}
