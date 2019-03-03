<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Assurance
 *
 * @ORM\Table(name="assurance")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\AssuranceRepository")
 */
class Assurance
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
     * @var string
     *
     * @ORM\Column(name="numPolice", type="string", length=255)
     */
    private $numPolice;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="UserBundle\Entity\Custumer", mappedBy="statusSocialId")
     */
    private $custumer;

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
     * @return Assurance
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
     * Set numPolice.
     *
     * @param string $numPolice
     *
     * @return Assurance
     */
    public function setNumPolice($numPolice)
    {
        $this->numPolice = $numPolice;

        return $this;
    }

    /**
     * Get numPolice.
     *
     * @return string
     */
    public function getNumPolice()
    {
        return $this->numPolice;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Assurance
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->custumer = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add custumer.
     *
     * @param \UserBundle\Entity\Custumer $custumer
     *
     * @return Assurance
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
