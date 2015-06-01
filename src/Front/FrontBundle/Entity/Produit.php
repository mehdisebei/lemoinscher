<?php

namespace Front\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 */
class Produit
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $picture;

    /**
     * @var string
     */
    private $brand;

    /**
     * @var integer
     */
    private $barCode;

    /**
     * @var \DateTime
     */
    private $updateDate;

    /**
     * @var \Front\FrontBundle\Entity\Category
     */
    private $idCategory;


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
     * Set nom
     *
     * @param string $nom
     * @return Produit
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return Produit
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set brand
     *
     * @param string $brand
     * @return Produit
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set barCode
     *
     * @param integer $barCode
     * @return Produit
     */
    public function setBarCode($barCode)
    {
        $this->barCode = $barCode;

        return $this;
    }

    /**
     * Get barCode
     *
     * @return integer 
     */
    public function getBarCode()
    {
        return $this->barCode;
    }

    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     * @return Produit
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime 
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set idCategory
     *
     * @param \Front\FrontBundle\Entity\Category $idCategory
     * @return Produit
     */
    public function setIdCategory(\Front\FrontBundle\Entity\Category $idCategory = null)
    {
        $this->idCategory = $idCategory;

        return $this;
    }

    /**
     * Get idCategory
     *
     * @return \Front\FrontBundle\Entity\Category 
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }
}
