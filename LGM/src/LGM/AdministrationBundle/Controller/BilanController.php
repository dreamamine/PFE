<?php

namespace LGM\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BilanController extends Controller
{
    public function indexAction()
    {
       
        $users = $this->getDoctrine()->getManager();
        $locationRepo = $users->getRepository('LGMUserBundle:User');
        $nb = $locationRepo->getNb();

        
    }
}
