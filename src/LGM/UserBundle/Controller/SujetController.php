<?php

namespace LGM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LGM\UserBundle\Entity\Sujet;
use LGM\UserBundle\Form\SujetType;
use Symfony\Component\HttpFoundation\Request;

class SujetController extends Controller
{
    public function indexAction()
    {
        $sujet =  new Sujet();
        $em = $this->getDoctrine()->getManager();
        $sujet = $em->getRepository('LGMUserBundle:Sujet')->findAll();
        
        return $this->render('LGMUserBundle:Sujet:index.html.twig', array('sujets'=>$sujet));
    }
     public function newAction(Request $request)
    {
         $sujet = new Sujet;
         $form = $this->createForm( new SujetType(),$sujet);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                 $em = $this->getDoctrine()->getManager();
                 $em->persist($sujet);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_sujet'));
                         
             }
         }
        return $this->render('LGMUserBundle:Sujet:new.html.twig',array('form'=>$form->createView()));
    }
     public function editAction(Request $request, $token)
    {
          $em = $this->getDoctrine()->getManager();
         $sujet = new Sujet;
         $sujet = $em->getRepository('LGMUserBundle:Sujet')->findOneByToken($token);
         $form = $this->createForm( new SujetType(),$sujet);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                
                 $em->persist($sujet);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_sujet'));
                         
             }
         }
        return $this->render('LGMUserBundle:Sujet:edit.html.twig', array('form'=>$form->createView()));
    }
     public function deleteAction(Sujet $sujet, Request $request)
    {
        $form = $this->createFormBuilder()->getForm();
        
        if($request->getMethod()=='POST')
         {
          $form->handleRequest($request);
             if ($form->isValid())
             {
         $em = $this->getDoctrine()->getManager();
         $em->remove($sujet);
         $em->flush();
         return $this->redirect($this->generateUrl('index_sujet'));
             }
         }
        return $this->render('LGMUserBundle:Sujet:delete.html.twig'
                , array('sujet'=>$sujet, 'form'=>$form->createView())
                );
    }
}
