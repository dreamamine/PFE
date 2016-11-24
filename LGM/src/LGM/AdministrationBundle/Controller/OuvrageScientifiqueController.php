<?php

namespace LGM\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LGM\AdministrationBundle\Entity\OuvrageScientifique;
use LGM\AdministrationBundle\Form\OuvrageScientifiqueType;
use Symfony\Component\HttpFoundation\Request;

class OuvrageScientifiqueController extends Controller
{
    public function indexAction()
    {
        $ouvrageScientifique =  new OuvrageScientifique();
        $em = $this->getDoctrine()->getManager();
        $ouvrageScientifique = $em->getRepository('LGMAdministrationBundle:OuvrageScientifique')->findAll();
        
        return $this->render('LGMAdministrationBundle:OuvrageScientifique:index.html.twig', array('ouvrageScientifiques'=>$ouvrageScientifique));
    }
     public function newAction(Request $request)
    {
         $ouvrageScientifique = new OuvrageScientifique;
         $form = $this->createForm( new OuvrageScientifiqueType(),$ouvrageScientifique);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                 $em = $this->getDoctrine()->getManager();
                 $em->persist($ouvrageScientifique);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_ouvrageScientifique'));
                         
             }
         }
        return $this->render('LGMAdministrationBundle:OuvrageScientifique:new.html.twig',array('form'=>$form->createView()));
    }
     public function editAction(Request $request, $token)
    {
          $em = $this->getDoctrine()->getManager();
         $ouvrageScientifique = new OuvrageScientifique;
         $ouvrageScientifique = $em->getRepository('LGMAdministrationBundle:OuvrageScientifique')->findOneByToken($token);
         $form = $this->createForm( new OuvrageScientifiqueType(),$ouvrageScientifique);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                
                 $em->persist($ouvrageScientifique);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_ouvrageScientifique'));
                         
             }
         }
        return $this->render('LGMAdministrationBundle:OuvrageScientifique:edit.html.twig', array('form'=>$form->createView()));
    }
     public function deleteAction(OuvrageScientifique $ouvrageScientifique, Request $request)
    {
        $form = $this->createFormBuilder()->getForm();
        
        if($request->getMethod()=='POST')
         {
          $form->handleRequest($request);
             if ($form->isValid())
             {
         $em = $this->getDoctrine()->getManager();
         $em->remove($ouvrageScientifique);
         $em->flush();
         return $this->redirect($this->generateUrl('index_ouvrageScientifique'));
             }
         }
        return $this->render('LGMAdministrationBundle:OuvrageScientifique:delete.html.twig'
                , array('ouvrageScientifique'=>$ouvrageScientifique, 'form'=>$form->createView())
                );
    }
}
