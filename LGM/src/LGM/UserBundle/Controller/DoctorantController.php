<?php

namespace LGM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LGM\UserBundle\Entity\Doctorant;
use LGM\UserBundle\Form\DoctorantType;
use Symfony\Component\HttpFoundation\Request;

class DoctorantController extends Controller
{
    public function indexAction()
    {
        $doctorant =  new Doctorant();
        $em = $this->getDoctrine()->getManager();
        $doctorant = $em->getRepository('LGMUserBundle:Doctorant')->findAll();
        
        return $this->render('LGMUserBundle:Doctorant:index.html.twig', array('doctorants'=>$doctorant));
    }
     public function newAction(Request $request)
    {
         $doctorant = new Doctorant;
         $form = $this->createForm( new DoctorantType(),$doctorant);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                 $em = $this->getDoctrine()->getManager();
                 $em->persist($doctorant);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_doctorant'));
                         
             }
         }
        return $this->render('LGMUserBundle:Doctorant:new.html.twig',array('form'=>$form->createView()));
    }
     public function editAction(Request $request, $token)
    {
          $em = $this->getDoctrine()->getManager();
         $doctorant = new Doctorant;
         $doctorant = $em->getRepository('LGMUserBundle:Doctorant')->findOneByToken($token);
         $form = $this->createForm( new DoctorantType(),$doctorant);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                
                 $em->persist($doctorant);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_doctorant'));
                         
             }
         }
        return $this->render('LGMUserBundle:Doctorant:edit.html.twig', array('form'=>$form->createView()));
    }
     public function deleteAction(Doctorant $doctorant, Request $request)
    {
        $form = $this->createFormBuilder()->getForm();
        
        if($request->getMethod()=='POST')
         {
          $form->handleRequest($request);
             if ($form->isValid())
             {
         $em = $this->getDoctrine()->getManager();
         $em->remove($doctorant);
         $em->flush();
         return $this->redirect($this->generateUrl('index_doctorant'));
             }
         }
        return $this->render('LGMUserBundle:Doctorant:delete.html.twig'
                , array('doctorant'=>$doctorant, 'form'=>$form->createView())
                );
    }
}
