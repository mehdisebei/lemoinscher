<?php

namespace Front\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AclObjectIdentities
 */
class AclObjectIdentities
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $classId;

    /**
     * @var string
     */
    private $objectIdentifier;

    /**
     * @var boolean
     */
    private $entriesInheriting;

    /**
     * @var \Front\FrontBundle\Entity\AclObjectIdentities
     */
    private $parentObjectentity;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $objectentity;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->objectentity = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set classId
     *
     * @param integer $classId
     * @return AclObjectIdentities
     */
    public function setClassId($classId)
    {
        $this->classId = $classId;

        return $this;
    }

    /**
     * Get classId
     *
     * @return integer 
     */
    public function getClassId()
    {
        return $this->classId;
    }

    /**
     * Set objectIdentifier
     *
     * @param string $objectIdentifier
     * @return AclObjectIdentities
     */
    public function setObjectIdentifier($objectIdentifier)
    {
        $this->objectIdentifier = $objectIdentifier;

        return $this;
    }

    /**
     * Get objectIdentifier
     *
     * @return string 
     */
    public function getObjectIdentifier()
    {
        return $this->objectIdentifier;
    }

    /**
     * Set entriesInheriting
     *
     * @param boolean $entriesInheriting
     * @return AclObjectIdentities
     */
    public function setEntriesInheriting($entriesInheriting)
    {
        $this->entriesInheriting = $entriesInheriting;

        return $this;
    }

    /**
     * Get entriesInheriting
     *
     * @return boolean 
     */
    public function getEntriesInheriting()
    {
        return $this->entriesInheriting;
    }

    /**
     * Set parentObjectentity
     *
     * @param \Front\FrontBundle\Entity\AclObjectIdentities $parentObjectentity
     * @return AclObjectIdentities
     */
    public function setParentObjectentity(\Front\FrontBundle\Entity\AclObjectIdentities $parentObjectentity = null)
    {
        $this->parentObjectentity = $parentObjectentity;

        return $this;
    }

    /**
     * Get parentObjectentity
     *
     * @return \Front\FrontBundle\Entity\AclObjectIdentities 
     */
    public function getParentObjectentity()
    {
        return $this->parentObjectentity;
    }

    /**
     * Add objectentity
     *
     * @param \Front\FrontBundle\Entity\AclObjectIdentities $objectentity
     * @return AclObjectIdentities
     */
    public function addObjectentity(\Front\FrontBundle\Entity\AclObjectIdentities $objectentity)
    {
        $this->objectentity[] = $objectentity;

        return $this;
    }

    /**
     * Remove objectentity
     *
     * @param \Front\FrontBundle\Entity\AclObjectIdentities $objectentity
     */
    public function removeObjectentity(\Front\FrontBundle\Entity\AclObjectIdentities $objectentity)
    {
        $this->objectentity->removeElement($objectentity);
    }

    /**
     * Get objectentity
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getObjectentity()
    {
        return $this->objectentity;
    }
}
