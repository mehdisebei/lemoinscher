<?php

namespace Front\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminAdminBundle:Category')->findall();

        
       return $this->render('FrontBundle:Default:index.html.twig', array('entity'  => $entities,));
    }
}
