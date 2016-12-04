<?php

namespace LGM\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LGM\AdministrationBundle\Entity\Groupe;
use LGM\AdministrationBundle\Form\GroupeType;
use Symfony\Component\HttpFoundation\Request;

class GroupeController extends Controller
{
    public function indexAction()
    {
        $groupe =  new Groupe();
        $em = $this->getDoctrine()->getManager();
        $groupe = $em->getRepository('LGMAdministrationBundle:Groupe')->findAll();
        
        return $this->render('LGMAdministrationBundle:Groupe:index.html.twig', array('groupes'=>$groupe));
    }
     public function newAction(Request $request)
    {
         $groupe = new Groupe;
         $form = $this->createForm( new GroupeType(),$groupe);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                 $em = $this->getDoctrine()->getManager();
                 $em->persist($groupe);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_groupe'));
                         
             }
         }
        return $this->render('LGMAdministrationBundle:Groupe:new.html.twig',array('form'=>$form->createView()));
    }
     public function editAction(Request $request, $token)
    {
          $em = $this->getDoctrine()->getManager();
         $groupe = new Groupe;
         $groupe = $em->getRepository('LGMAdministrationBundle:Groupe')->findOneByToken($token);
         $form = $this->createForm( new GroupeType(),$groupe);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                
                 $em->persist($groupe);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_groupe'));
                         
             }
         }
        return $this->render('LGMAdministrationBundle:Groupe:edit.html.twig', array('form'=>$form->createView()));
    }
     public function deleteAction(Groupe $groupe, Request $request)
    {
        $form = $this->createFormBuilder()->getForm();
        
        if($request->getMethod()=='POST')
         {
          $form->handleRequest($request);
             if ($form->isValid())
             {
         $em = $this->getDoctrine()->getManager();
         $em->remove($groupe);
         $em->flush();
         return $this->redirect($this->generateUrl('index_groupe'));
             }
         }
        return $this->render('LGMAdministrationBundle:Groupe:delete.html.twig'
                , array('groupe'=>$groupe, 'form'=>$form->createView())
                );
    }
}
