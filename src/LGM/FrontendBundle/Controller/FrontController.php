<?php

namespace LGM\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FrontController extends Controller
{
    public function indexAction()
    {        
        return $this->render('FrontendBundle:Home:index.html.twig');
    }

}
