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

class ProduitAdmin extends Admin {

    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('id_category', 'entity', array('class' => 'Admin\AdminBundle\Entity\Category'))
                ->add('nom')
                ->add('picture', 'file', array('sonata_help' => 'help message rendered in parent sonata_type_collection'))
                ->add('brand')
                ->add('barCode')
                
            ;
    }

    public function prePersist($image) {
        $this->manageFileUpload($image);
    }

    public function preUpdate($image) {
        $this->manageFileUpload($image);
    }

    private function manageFileUpload($image) {
        
        if ($image->getPicture()) {
           $image->refreshUpdated();
        }
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('nom')
                ->add('picture')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('id_category', 'entity', array('class' => 'Admin\AdminBundle\Entity\Category'))
                ->add('nom')
                ->add('picture')
        ;
    }

}
