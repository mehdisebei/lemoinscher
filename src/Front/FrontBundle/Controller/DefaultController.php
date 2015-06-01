<?php

namespace Front\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexxAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminAdminBundle:Category')->findBy(array('category' => 'electromenager'));

        
       return $this->render('FrontBundle:Default:index.html.twig', array('electro'  => $entities,));
    }

    public function indexAction()

    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminAdminBundle:Category')->findBy(array('category' => 'Produit alimentaire'));

        //indexxAction();
       return $this->render('FrontBundle:Default:index.html.twig', array('entity'  => $entities,));
    }
   
}