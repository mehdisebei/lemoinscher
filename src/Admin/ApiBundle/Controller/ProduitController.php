<?php

namespace Admin\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class ProduitController extends Controller {

    /**
     * 
     * @return array
     * @View()
     */
    public function getProduitsAction() {

        $Produit = $this->getDoctrine()->getRepository('AdminAdminBundle:Produit')->findAll();

        return array('Produit' => $Produit);
    }

    /**
     * 
     * @return array
     * @View()
     */
    public function getProduitbycategoryAction($idcategory) {

        $Produit = $this->getDoctrine()->getRepository('AdminAdminBundle:Produit')->findBy(array('idCategory' => $idcategory));

        return array('Produit' => $Produit);
    }

    public function getProduitAction($idproduit) {

        $Produit = $this->getDoctrine()->getRepository('AdminAdminBundle:Price')->findBy(array('produit' => $idproduit));

        return array('Produit' => $Produit);
    }
     public function getVerifbarcodeAction($barcode) {

        $Produit = $this->getDoctrine()->getRepository('AdminAdminBundle:produit')->findBy(array('barCode' => $barcode));

        return array('Produit' => $Produit);
    }
        public function AddProduitAction($barcode) {

        $Produit = $this->getDoctrine()->getRepository('AdminAdminBundle:produit')->findBy(array('barCode' => $barcode));

        return array('Produit' => $Produit);
    }
}
