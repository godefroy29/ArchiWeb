<?php

namespace firstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('firstBundle:Default:index.html.twig');
    }

    public function page1Action()
    {
        return $this->render('firstBundle:Default:plop.html.twig');
    }
}
