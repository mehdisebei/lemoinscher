<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity
 */
class Category
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255, nullable=false)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="subcategory", type="string", length=255, nullable=true)
     */
    private $subcategory;

    /**
     * @var string
     *
     * @ORM\Column(name="subsubcategory", type="string", length=255, nullable=true)
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
    public function __toString() {
        return $this->category.' '.$this->subsubcategory;
    }
}
