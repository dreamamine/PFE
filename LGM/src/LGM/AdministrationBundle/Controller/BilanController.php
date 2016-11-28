<?php

namespace LGM\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BilanController extends Controller
{
    public function indexAction()
    {
       //$users = $this->getDoctrine()->getRepository("LGMUserBundle:User")->findAll();
       $groupes =$this->getDoctrine()->getRepository("LGMAdministrationBundle:Groupe")->findAll();
        return $this->render('LGMAdministrationBundle:Bilan:bilan.html.twig', array('groupes' => $groupes));
    }
}

