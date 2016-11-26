<?php

namespace LGM\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BilanController extends Controller
{
    public function indexAction()
    {
       $users = $this->getDoctrine()->getRepository("LGMUserBundle:User")->findAll();
        return $this->render('LGMAdministrationBundle:Bilan:bilan.html.twig', array('users' => $users));
    }
}

