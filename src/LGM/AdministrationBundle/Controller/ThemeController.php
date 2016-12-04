<?php

namespace LGM\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LGM\AdministrationBundle\Entity\Theme;
use LGM\AdministrationBundle\Form\ThemeType;
use Symfony\Component\HttpFoundation\Request;

class ThemeController extends Controller
{
    public function indexAction()
    {
        $theme =  new Theme();
        $em = $this->getDoctrine()->getManager();
        $theme = $em->getRepository('LGMAdministrationBundle:Theme')->findAll();
        
        return $this->render('LGMAdministrationBundle:Theme:index.html.twig', array('themes'=>$theme));
    }
     public function newAction(Request $request)
    {
         $theme = new Theme;
         $form = $this->createForm( new ThemeType(),$theme);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                 $em = $this->getDoctrine()->getManager();
                 $em->persist($theme);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_theme'));
                         
             }
         }
        return $this->render('LGMAdministrationBundle:Theme:new.html.twig',array('form'=>$form->createView()));
    }
     public function editAction(Request $request, $token)
    {
          $em = $this->getDoctrine()->getManager();
         $theme = new Theme;
         $theme = $em->getRepository('LGMAdministrationBundle:Theme')->findOneByToken($token);
         $form = $this->createForm( new ThemeType(),$theme);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                
                 $em->persist($theme);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_theme'));
                         
             }
         }
        return $this->render('LGMAdministrationBundle:Theme:edit.html.twig', array('form'=>$form->createView()));
    }
     public function deleteAction(Theme $theme, Request $request)
    {
        $form = $this->createFormBuilder()->getForm();
        
        if($request->getMethod()=='POST')
         {
          $form->handleRequest($request);
             if ($form->isValid())
             {
         $em = $this->getDoctrine()->getManager();
         $em->remove($theme);
         $em->flush();
         return $this->redirect($this->generateUrl('index_theme'));
             }
         }
        return $this->render('LGMAdministrationBundle:Theme:delete.html.twig'
                , array('theme'=>$theme, 'form'=>$form->createView())
                );
    }
}
