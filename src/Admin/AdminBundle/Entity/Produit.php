<?php

namespace Admin\AdminBundle\Entity;
use Symfony\Component\HttpFoundation\File\UploadedFile ;
use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="Produit", indexes={@ORM\Index(name="id_category", columns={"id_category"})})
 * @ORM\Entity
 */
class Produit {

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
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=false)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="brand", type="string", length=255, nullable=false)
     */
    private $brand;

    /**
     * @var integer
     *
     * @ORM\Column(name="bar_code", type="integer", nullable=true)
     */
    private $barCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="datetime", nullable=true)
     */
    private $updateDate = 'CURRENT_TIMESTAMP';
/**
     * Unmapped property to handle file uploads
     */
    private $file;
    /**
     * @var \Category
     *
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_category", referencedColumnName="id")
     * })
     */
    private $idCategory;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Produit
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return Produit
     */
    public function setPicture($picture) {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture() {
        return $this->picture;
    }

    /**
     * Set brand
     *
     * @param string $brand
     * @return Produit
     */
    public function setBrand($brand) {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand() {
        return $this->brand;
    }

    /**
     * Set barCode
     *
     * @param integer $barCode
     * @return Produit
     */
    public function setBarCode($barCode) {
        $this->barCode = $barCode;

        return $this;
    }

    /**
     * Get barCode
     *
     * @return integer 
     */
    public function getBarCode() {
        return $this->barCode;
    }

    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     * @return Produit
     */
    public function setUpdateDate($updateDate) {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime 
     */
    public function getUpdateDate() {
        return $this->updateDate;
    }

    /**
     * Set idCategory
     *
     * @param \Admin\AdminBundle\Entity\Category $idCategory
     * @return Produit
     */
    public function setIdCategory(\Admin\AdminBundle\Entity\Category $idCategory = null) {
        $this->idCategory = $idCategory;

        return $this;
    }

    /**
     * Get idCategory
     *
     * @return \Admin\AdminBundle\Entity\Category 
     */
    public function getIdCategory() {
        return $this->idCategory;
    }

    public function __toString() {
        return $this->nom;
        
    }

    

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null) {
        $this->file = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile() {
        return $this->file;
    }

    public function upload() {
       dump("upload");
        if (null === $this->getFile()) {
        return;
    }

    $this->getFile()->move(
       __DIR__ . '/../../../../uploads/',
        $this->getFile()->getClientOriginalName()
    );
  
    // set the path property to the filename where you've saved the file
    $this->picture = $this->getFile()->getClientOriginalName();
  
    // clean up the file property as you won't need it anymore
    $this->setFile(null);
    }

    public function lifecycleFileUpload() {
        dump("lifecycleFileUpload");
        $this->upload();
    }

    public function refreshUpdated() {
          dump("refreshUpdated");
       $this->setUpdateDate(new \DateTime("now"));
       // $this->upload();
      
    }
    public function __construct()
    {
      
         $this->updateDate =  new \DateTime();
    }
}
