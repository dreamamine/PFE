<?php

namespace LGM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LGM\UserBundle\Entity\Eleve_Mastere;
use LGM\UserBundle\Form\Eleve_MastereType;
use Symfony\Component\HttpFoundation\Request;

class Eleve_MastereController extends Controller
{
    public function indexAction()
    {
        $eleve_Mastere =  new Eleve_Mastere();
        $em = $this->getDoctrine()->getManager();
        $eleve_Mastere = $em->getRepository('LGMUserBundle:Eleve_Mastere')->findAll();
        
        return $this->render('LGMUserBundle:Eleve_Mastere:index.html.twig', array('eleve_Masteres'=>$eleve_Mastere));
    }
     public function newAction(Request $request)
    {
         $eleve_Mastere = new Eleve_Mastere;
         $form = $this->createForm( new Eleve_MastereType(),$eleve_Mastere);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                 $em = $this->getDoctrine()->getManager();
                 $em->persist($eleve_Mastere);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_eleve_Mastere'));
                         
             }
         }
        return $this->render('LGMUserBundle:Eleve_Mastere:new.html.twig',array('form'=>$form->createView()));
    }
     public function editAction(Request $request, $token)
    {
          $em = $this->getDoctrine()->getManager();
         $eleve_Mastere = new Eleve_Mastere;
         $eleve_Mastere = $em->getRepository('LGMUserBundle:Eleve_Mastere')->findOneByToken($token);
         $form = $this->createForm( new Eleve_MastereType(),$eleve_Mastere);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                
                 $em->persist($eleve_Mastere);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_eleve_Mastere'));
                         
             }
         }
        return $this->render('LGMUserBundle:Eleve_Mastere:edit.html.twig', array('form'=>$form->createView()));
    }
     public function deleteAction(Eleve_Mastere $eleve_Mastere, Request $request)
    {
        $form = $this->createFormBuilder()->getForm();
        
        if($request->getMethod()=='POST')
         {
          $form->handleRequest($request);
             if ($form->isValid())
             {
         $em = $this->getDoctrine()->getManager();
         $em->remove($eleve_Mastere);
         $em->flush();
         return $this->redirect($this->generateUrl('index_eleve_Mastere'));
             }
         }
        return $this->render('LGMUserBundle:Eleve_Mastere:delete.html.twig'
                , array('eleve_Mastere'=>$eleve_Mastere, 'form'=>$form->createView())
                );
    }
}
