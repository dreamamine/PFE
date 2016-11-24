<?php

namespace LGM\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LGM\AdministrationBundle\Entity\Communication;
use LGM\AdministrationBundle\Form\CommunicationType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CommunicationController extends Controller
{
    public function indexAction()
    {
        $communication =  new Communication();
        $em = $this->getDoctrine()->getManager();
        $communication = $em->getRepository('LGMAdministrationBundle:Communication')->findAll();
        
        return $this->render('LGMAdministrationBundle:Communication:index.html.twig', array('communications'=>$communication));
    }
     public function newAction(Request $request)
    {
         $communication = new Communication;
         $form = $this->createForm( new CommunicationType(),$communication);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                 $em = $this->getDoctrine()->getManager();
                 $em->persist($communication);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_communication'));
                         
             }
         }
        return $this->render('LGMAdministrationBundle:Communication:new.html.twig',array('form'=>$form->createView()));
    }
     public function editAction(Request $request, $token)
    {
          $em = $this->getDoctrine()->getManager();
         $communication = new Communication;
         $communication = $em->getRepository('LGMAdministrationBundle:Communication')->findOneByToken($token);
         $form = $this->createForm( new CommunicationType(),$communication);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                
                 $em->persist($communication);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_communication'));
                         
             }
         }
        return $this->render('LGMAdministrationBundle:Communication:edit.html.twig', array('form'=>$form->createView()));
    }
     public function deleteAction(Communication $communication, Request $request)
    {
        $form = $this->createFormBuilder()->getForm();
        
        if($request->getMethod()=='POST')
         {
          $form->handleRequest($request);
             if ($form->isValid())
             {
         $em = $this->getDoctrine()->getManager();
         $em->remove($communication);
         $em->flush();
         return $this->redirect($this->generateUrl('index_communication'));
             }
         }
        return $this->render('LGMAdministrationBundle:Communication:delete.html.twig'
                , array('communication'=>$communication, 'form'=>$form->createView())
                );
    }
}
