<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Localite
 *
 * @ORM\Table(name="localite")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\LocaliteRepository")
 */
class Localite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="parent_id", type="integer")
     */
    private $parentId;

    /**
     * @ORM\OneToMany(targetEntity="UserBundle\Entity\Custumer", mappedBy="localiteId")
     */
    private $custumer;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->custumer = new \Doctrine\Common\Collections\ArrayCollection();
    }
    public function __toString()
     {
      return $this->getName();
     }
    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Localite
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set parentId.
     *
     * @param int $parentId
     *
     * @return Localite
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId.
     *
     * @return int
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Add custumer.
     *
     * @param \UserBundle\Entity\Custumer $custumer
     *
     * @return Localite
     */
    public function addCustumer(\UserBundle\Entity\Custumer $custumer)
    {
        $this->custumer[] = $custumer;

        return $this;
    }

    /**
     * Remove custumer.
     *
     * @param \UserBundle\Entity\Custumer $custumer
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCustumer(\UserBundle\Entity\Custumer $custumer)
    {
        return $this->custumer->removeElement($custumer);
    }

    /**
     * Get custumer.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCustumer()
    {
        return $this->custumer;
    }
}
