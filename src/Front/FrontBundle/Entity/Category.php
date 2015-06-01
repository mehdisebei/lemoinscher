<?php

namespace Front\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 */
class Category
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $category;

    /**
     * @var string
     */
    private $subcategory;

    /**
     * @var string
     */
    private $subsubcategory;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return Category
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set subcategory
     *
     * @param string $subcategory
     * @return Category
     */
    public function setSubcategory($subcategory)
    {
        $this->subcategory = $subcategory;

        return $this;
    }

    /**
     * Get subcategory
     *
     * @return string 
     */
    public function getSubcategory()
    {
        return $this->subcategory;
    }

    /**
     * Set subsubcategory
     *
     * @param string $subsubcategory
     * @return Category
     */
    public function setSubsubcategory($subsubcategory)
    {
        $this->subsubcategory = $subsubcategory;

        return $this;
    }

    /**
     * Get subsubcategory
     *
     * @return string 
     */
    public function getSubsubcategory()
    {
        return $this->subsubcategory;
    }
}
