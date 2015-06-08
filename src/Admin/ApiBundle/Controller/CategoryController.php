<?php

namespace Admin\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;

class CategoryController extends Controller {

    /**
     * 
     * @return array
     * @View()
     */
    public function getCategoryAction() {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                'SELECT DISTINCT p.category FROM AdminAdminBundle:Category p'
        );

        $products = $query->getResult();
        return array('category' => $products);
    }
  public function getSubcategoryAction($subcategory) {
  
 $category = $this->getDoctrine()->getRepository('AdminAdminBundle:Category')->findBy(array('category' => $subcategory));
     // var_dump(array($category));
        return array('category' => $category);
    }
}
