<?php

namespace Front\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Price
 */
class Price
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $lastUpdate;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var boolean
     */
    private $promotion;

    /**
     * @var \Front\FrontBundle\Entity\Place
     */
    private $place;

    /**
     * @var \Front\FrontBundle\Entity\Produit
     */
    private $produit;


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
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return Price
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return \DateTime 
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Set amount
     *
     * @param float $amount
     * @return Price
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set promotion
     *
     * @param boolean $promotion
     * @return Price
     */
    public function setPromotion($promotion)
    {
        $this->promotion = $promotion;

        return $this;
    }

    /**
     * Get promotion
     *
     * @return boolean 
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * Set place
     *
     * @param \Front\FrontBundle\Entity\Place $place
     * @return Price
     */
    public function setPlace(\Front\FrontBundle\Entity\Place $place = null)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return \Front\FrontBundle\Entity\Place 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set produit
     *
     * @param \Front\FrontBundle\Entity\Produit $produit
     * @return Price
     */
    public function setProduit(\Front\FrontBundle\Entity\Produit $produit = null)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \Front\FrontBundle\Entity\Produit 
     */
    public function getProduit()
    {
        return $this->produit;
    }
}
