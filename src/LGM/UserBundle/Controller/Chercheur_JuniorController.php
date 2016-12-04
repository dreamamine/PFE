<?php

namespace LGM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LGM\UserBundle\Entity\Chercheur_Junior;
use LGM\UserBundle\Form\Chercheur_JuniorType;
use Symfony\Component\HttpFoundation\Request;

class Chercheur_JuniorController extends Controller
{
    public function indexAction()
    {
        $chercheur_Junior =  new Chercheur_Junior();
        $em = $this->getDoctrine()->getManager();
        $chercheur_Junior = $em->getRepository('LGMUserBundle:Chercheur_Junior')->findAll();
        
        return $this->render('LGMUserBundle:Chercheur_Junior:index.html.twig', array('chercheur_Juniors'=>$chercheur_Junior));
    }
     public function newAction(Request $request)
    {
         $chercheur_Junior = new Chercheur_Junior;
         $form = $this->createForm( new Chercheur_JuniorType(),$chercheur_Junior);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                 $em = $this->getDoctrine()->getManager();
                 $em->persist($chercheur_Junior);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_chercheur_Junior'));
                         
             }
         }
        return $this->render('LGMUserBundle:Chercheur_Junior:new.html.twig',array('form'=>$form->createView()));
    }
     public function editAction(Request $request, $token)
    {
          $em = $this->getDoctrine()->getManager();
         $chercheur_Junior = new Chercheur_Junior;
         $chercheur_Junior = $em->getRepository('LGMUserBundle:Chercheur_Junior')->findOneByToken($token);
         $form = $this->createForm( new Chercheur_JuniorType(),$chercheur_Junior);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                
                 $em->persist($chercheur_Junior);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_chercheur_Junior'));
                         
             }
         }
        return $this->render('LGMUserBundle:Chercheur_Junior:edit.html.twig', array('form'=>$form->createView()));
    }
     public function deleteAction(Chercheur_Junior $chercheur_Junior, Request $request)
    {
        $form = $this->createFormBuilder()->getForm();
        
        if($request->getMethod()=='POST')
         {
          $form->handleRequest($request);
             if ($form->isValid())
             {
         $em = $this->getDoctrine()->getManager();
         $em->remove($chercheur_Junior);
         $em->flush();
         return $this->redirect($this->generateUrl('index_chercheur_Junior'));
             }
         }
        return $this->render('LGMUserBundle:Chercheur_Junior:delete.html.twig'
                , array('chercheur_Junior'=>$chercheur_Junior, 'form'=>$form->createView())
                );
    }
}
