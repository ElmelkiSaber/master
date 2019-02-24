<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatutSocial
 *
 * @ORM\Table(name="statut_social")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\StatutSocialRepository")
 */
class StatutSocial
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
     * @ORM\Column(name="num_entreprise", type="string", length=255)
     */
    private $numEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="num_agreation", type="string", length=255)
     */
    private $numAgreation;


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
     * @return StatutSocial
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
     * Set numEntreprise.
     *
     * @param string $numEntreprise
     *
     * @return StatutSocial
     */
    public function setNumEntreprise($numEntreprise)
    {
        $this->numEntreprise = $numEntreprise;

        return $this;
    }

    /**
     * Get numEntreprise.
     *
     * @return string
     */
    public function getNumEntreprise()
    {
        return $this->numEntreprise;
    }

    /**
     * Set numAgreation.
     *
     * @param string $numAgreation
     *
     * @return StatutSocial
     */
    public function setNumAgreation($numAgreation)
    {
        $this->numAgreation = $numAgreation;

        return $this;
    }

    /**
     * Get numAgreation.
     *
     * @return string
     */
    public function getNumAgreation()
    {
        return $this->numAgreation;
    }
}
