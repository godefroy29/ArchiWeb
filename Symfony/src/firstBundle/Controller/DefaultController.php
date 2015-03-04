<?php

namespace firstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use firstBundle\Entity\Enquiry;
use firstBundle\Form\EnquiryType;


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

    public function registerAction()
    {
        return $this->render('firstBundle:Default:register.html.twig');
    }

    public function testAction()
    {
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $data = $form->getData();
                $message = \Swift_Message::newInstance()
                    ->setSubject($data->getSubject())
                    ->setFrom($data->getEmail())
                    ->setTo('godefroy.29@gmail.com')
                    ->setBody("Email => ".$data->getEmail()." name => ".$data->getName()."|".$data->getBody());
                    //->setBody($this->renderView('firstBundle:Default:test.html.twig', array('enquiry' => $enquiry)));
                $this->get('mailer')->send($message);
                
                //$this->get('session')->setFlash('blogger-notice', 'Your contact enquiry was successfully sent. Thank you!');
                return $this->redirect($this->generateUrl('first_homepage'));
            }
        }

        return $this->render('firstBundle:Default:test.html.twig', array(
            'form' => $form->createView()
        ));
    }
}