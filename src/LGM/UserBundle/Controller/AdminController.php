<?php

namespace LGM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LGM\UserBundle\Entity\Admin;
use LGM\UserBundle\Form\AdminType;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    public function indexAction()
    {
        $admin =  new Admin();
        $em = $this->getDoctrine()->getManager();
        $admin = $em->getRepository('LGMUserBundle:Admin')->findAll();
        
        return $this->render('LGMUserBundle:Admin:index.html.twig', array('admins'=>$admin));
    }
     public function newAction(Request $request)
    {
         $admin = new Admin;
         $form = $this->createForm( new AdminType(),$admin);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                 $em = $this->getDoctrine()->getManager();
                 $em->persist($admin);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_admin'));
                         
             }
         }
        return $this->render('LGMUserBundle:Admin:new.html.twig',array('form'=>$form->createView()));
    }
     public function editAction(Request $request, $token)
    {
          $em = $this->getDoctrine()->getManager();
         $admin = new Admin;
         $admin = $em->getRepository('LGMUserBundle:Admin')->findOneByToken($token);
         $form = $this->createForm( new AdminType(),$admin);
         if($request->getMethod()=='POST')
         {
             $form->handleRequest($request);
             if ($form->isValid())
             {
                
                 $em->persist($admin);
                 $em->flush();
                 return $this->redirect($this->generateUrl('index_admin'));
                         
             }
         }
        return $this->render('LGMUserBundle:Admin:edit.html.twig', array('form'=>$form->createView()));
    }
     public function deleteAction(Admin $admin, Request $request)
    {
        $form = $this->createFormBuilder()->getForm();
        
        if($request->getMethod()=='POST')
         {
          $form->handleRequest($request);
             if ($form->isValid())
             {
         $em = $this->getDoctrine()->getManager();
         $em->remove($admin);
         $em->flush();
         return $this->redirect($this->generateUrl('index_admin'));
             }
         }
        return $this->render('LGMUserBundle:Admin:delete.html.twig'
                , array('admin'=>$admin, 'form'=>$form->createView())
                );
    }
}
