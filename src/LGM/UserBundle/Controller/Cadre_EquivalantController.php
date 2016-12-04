<?php

namespace LGM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LGM\UserBundle\Entity\Cadre_Equivalant;
use LGM\UserBundle\Form\Cadre_EquivalantType;
use Symfony\Component\HttpFoundation\Request;

class Cadre_EquivalantController extends Controller
{
    public function indexAction()
    {
        $cadre_Equivalant =  new Cadre_Equivalant();
        $em = $this->getDoctrine()->getManager();
        $cadre_Equivalant = $em->getRepository('LGMUserBundle:Cadre_Equivalant')->findAll();
        
        return $this->render('LGMUserBundle:Cadre_Equivalant:index.html.twig', array('cadre_Equivalants'=>$cadre_Equivalant));
    }
     public function newAction(Request $request)
    {
         $cadre_Equivalant = new Cadre_Equivalant;
         $form = $this->createForm( new Cadre_EquivalantType(),$cadre_Equivalant);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                 $em = $this->getDoctrine()->getManager();
                 $em->persist($cadre_Equivalant);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_cadre_Equivalant'));
                         
             }
         }
        return $this->render('LGMUserBundle:Cadre_Equivalant:new.html.twig',array('form'=>$form->createView()));
    }
     public function editAction(Request $request, $token)
    {
          $em = $this->getDoctrine()->getManager();
         $cadre_Equivalant = new Cadre_Equivalant;
         $cadre_Equivalant = $em->getRepository('LGMUserBundle:Cadre_Equivalant')->findOneByToken($token);
         $form = $this->createForm( new Cadre_EquivalantType(),$cadre_Equivalant);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                
                 $em->persist($cadre_Equivalant);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_cadre_Equivalant'));
                         
             }
         }
        return $this->render('LGMUserBundle:Cadre_Equivalant:edit.html.twig', array('form'=>$form->createView()));
    }
     public function deleteAction(Cadre_Equivalant $cadre_Equivalant, Request $request)
    {
        $form = $this->createFormBuilder()->getForm();
        
        if($request->getMethod()=='POST')
         {
          $form->handleRequest($request);
             if ($form->isValid())
             {
         $em = $this->getDoctrine()->getManager();
         $em->remove($cadre_Equivalant);
         $em->flush();
         return $this->redirect($this->generateUrl('index_cadre_Equivalant'));
             }
         }
        return $this->render('LGMUserBundle:Cadre_Equivalant:delete.html.twig'
                , array('cadre_Equivalant'=>$cadre_Equivalant, 'form'=>$form->createView())
                );
    }
}
