<?php

namespace firstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('mail', 'email')
            ->add('sujet', 'text')
            ->add('save', 'submit')
            ->getForm();
        return $this->render('firstBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
        ));

        if ($form->isValid()) {
            $request->getSession()->getFlashBag()->add('notice', 'mail envoyé');
            return $this->redirect($this->generateUrl('/'));
        }
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

    public function registerAction()
    {
        return $this->render('firstBundle:Default:register.html.twig');
    }
}