<?php

namespace LGM\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LGM\AdministrationBundle\Entity\Projet;
use LGM\AdministrationBundle\Form\ProjetType;
use Symfony\Component\HttpFoundation\Request;
class ProjetController extends Controller
{
    public function indexAction()
    {
        $projet =  new Projet();
        $em = $this->getDoctrine()->getManager();
        $projet = $em->getRepository('LGMAdministrationBundle:Projet')->findAll();
        
        return $this->render('LGMAdministrationBundle:Projet:index.html.twig', array('projets'=>$projet));
    }
     public function newAction(Request $request)
    {
         $projet = new Projet;
         $form = $this->createForm( new ProjetType(),$projet);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                 $em = $this->getDoctrine()->getManager();
                 $em->persist($projet);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_projet'));
                         
             }
         }
        return $this->render('LGMAdministrationBundle:Projet:new.html.twig',array('form'=>$form->createView()));
    }
     public function editAction(Request $request, $token)
    {
          $em = $this->getDoctrine()->getManager();
         $projet = new Projet;
         $projet = $em->getRepository('LGMAdministrationBundle:Projet')->findOneByToken($token);
         $form = $this->createForm( new ProjetType(),$projet);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                
                 $em->persist($projet);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_projet'));
                         
             }
         }
        return $this->render('LGMAdministrationBundle:Projet:edit.html.twig', array('form'=>$form->createView()));
    }
     public function deleteAction(Projet $projet, Request $request)
    {
        $form = $this->createFormBuilder()->getForm();
        
        if($request->getMethod()=='POST')
         {
          $form->handleRequest($request);
             if ($form->isValid())
             {
         $em = $this->getDoctrine()->getManager();
         $em->remove($projet);
         $em->flush();
         return $this->redirect($this->generateUrl('index_projet'));
             }
         }
        return $this->render('LGMAdministrationBundle:Projet:delete.html.twig'
                , array('projet'=>$projet, 'form'=>$form->createView())
                );
    }
}
