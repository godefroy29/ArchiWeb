<?php

namespace PlopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
    	echo "plop";
        return $this->render('PlopBundle:Default:index.html.twig', array('name' => $name));
    }
}
