<?php

namespace firstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('firstBundle:Default:index.html.twig');
    }

    public function contactAction()
    {
        return $this->render('firstBundle:Default:contact.html.twig');
    }

    public function eventAction()
    {
        return $this->render('firstBundle:Default:event.html.twig');
    }

    public function infosAction()
    {
        return $this->render('firstBundle:Default:infos.html.twig');
    }

    public function rulesAction()
    {
        return $this->render('firstBundle:Default:rules.html.twig');
    }
}
  