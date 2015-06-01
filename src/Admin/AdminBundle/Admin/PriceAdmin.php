<?php

namespace Admin\AdminBundle\Admin;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PriceAdmin extends Admin {

    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
            
                ->add('amount')
                ->add('promotion')
                ->add('place_id','entity',array('class'=>'Admin\AdminBundle\Entity\Place','multiple' => true))
                ->add('produit_id','entity',array('class'=>'Admin\AdminBundle\Entity\Produit',"multiple" => true))
             
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
   
                ->add('lastupdate')
                ->add('amount')
                ->add('promotion')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->add('lastupdate')
                ->add('amount')
                ->add('promotion')
               
                ->add('place_id','entity',array('class'=>'Admin\AdminBundle\Entity\Place'))
                ->add('produit_id','entity',array('class'=>'Admin\AdminBundle\Entity\Produit'))
        ;
    }

}


