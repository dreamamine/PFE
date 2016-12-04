<?php

namespace LGM\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LGM\AdministrationBundle\Entity\Equipe;
use LGM\AdministrationBundle\Form\EquipeType;
use Symfony\Component\HttpFoundation\Request;

class EquipeController extends Controller
{
    public function indexAction()
    {
        $equipe =  new Equipe();
        $em = $this->getDoctrine()->getManager();
        $equipe = $em->getRepository('LGMAdministrationBundle:Equipe')->findAll();
        
        return $this->render('LGMAdministrationBundle:Equipe:index.html.twig', array('equipes'=>$equipe));
    }
     public function newAction(Request $request)
    {
         $equipe = new Equipe;
         $form = $this->createForm( new EquipeType(),$equipe);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                 $em = $this->getDoctrine()->getManager();
                 $em->persist($equipe);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_equipe'));
                         
             }
         }
        return $this->render('LGMAdministrationBundle:Equipe:new.html.twig',array('form'=>$form->createView()));
    }
     public function editAction(Request $request, $token)
    {
          $em = $this->getDoctrine()->getManager();
         $equipe = new Equipe;
         $equipe = $em->getRepository('LGMAdministrationBundle:Equipe')->findOneByToken($token);
         $form = $this->createForm( new EquipeType(),$equipe);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                
                 $em->persist($equipe);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_equipe'));
                         
             }
         }
        return $this->render('LGMAdministrationBundle:Equipe:edit.html.twig', array('form'=>$form->createView()));
    }
     public function deleteAction(Equipe $equipe, Request $request)
    {
        $form = $this->createFormBuilder()->getForm();
        
        if($request->getMethod()=='POST')
         {
          $form->handleRequest($request);
             if ($form->isValid())
             {
         $em = $this->getDoctrine()->getManager();
         $em->remove($equipe);
         $em->flush();
         return $this->redirect($this->generateUrl('index_equipe'));
             }
         }
        return $this->render('LGMAdministrationBundle:Equipe:delete.html.twig'
                , array('equipe'=>$equipe, 'form'=>$form->createView())
                );
    }
}
