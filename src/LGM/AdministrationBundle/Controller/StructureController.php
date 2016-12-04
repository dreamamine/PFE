<?php

namespace LGM\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LGM\AdministrationBundle\Entity\Structure;
use LGM\AdministrationBundle\Form\StructureType;
use Symfony\Component\HttpFoundation\Request;
class StructureController extends Controller
{
    public function indexAction()
    {
        $structure =  new Structure();
        $em = $this->getDoctrine()->getManager();
        $structure = $em->getRepository('LGMAdministrationBundle:Structure')->findAll();
        
        return $this->render('LGMAdministrationBundle:Structure:index.html.twig', array('structures'=>$structure));
    }
     public function newAction(Request $request)
    {
         $structure = new Structure;
         $form = $this->createForm( new StructureType(),$structure);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                 $em = $this->getDoctrine()->getManager();
                 $em->persist($structure);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_structure'));
                         
             }
         }
        return $this->render('LGMAdministrationBundle:Structure:new.html.twig',array('form'=>$form->createView()));
    }
     public function editAction(Request $request, $token)
    {
          $em = $this->getDoctrine()->getManager();
         $structure = new Structure;
         $structure = $em->getRepository('LGMAdministrationBundle:Structure')->findOneByToken($token);
         $form = $this->createForm( new StructureType(),$structure);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                
                 $em->persist($structure);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_structure'));
                         
             }
         }
        return $this->render('LGMAdministrationBundle:Structure:edit.html.twig', array('form'=>$form->createView()));
    }
     public function deleteAction(Structure $structure, Request $request)
    {
        $form = $this->createFormBuilder()->getForm();
        
        if($request->getMethod()=='POST')
         {
          $form->handleRequest($request);
             if ($form->isValid())
             {
         $em = $this->getDoctrine()->getManager();
         $em->remove($structure);
         $em->flush();
         return $this->redirect($this->generateUrl('index_structure'));
             }
         }
        return $this->render('LGMAdministrationBundle:Structure:delete.html.twig'
                , array('structure'=>$structure, 'form'=>$form->createView())
                );
    }
}
