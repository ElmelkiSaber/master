<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StautSocial
 *
 * @ORM\Table(name="statut_social")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\StautSocialRepository")
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var int
     *
     * @ORM\Column(name="num_entreprise", type="integer")
     */
    private $numEntreprise;

    /**
     * @var int
     *
     * @ORM\Column(name="num_agregation", type="integer")
     */
    private $numAgregation;


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
     * Set libelle.
     *
     * @param string $libelle
     *
     * @return StautSocial
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle.
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set numEntreprise.
     *
     * @param int $numEntreprise
     *
     * @return StautSocial
     */
    public function setNumEntreprise($numEntreprise)
    {
        $this->numEntreprise = $numEntreprise;

        return $this;
    }

    /**
     * Get numEntreprise.
     *
     * @return int
     */
    public function getNumEntreprise()
    {
        return $this->numEntreprise;
    }

    /**
     * Set numAgregation.
     *
     * @param int $numAgregation
     *
     * @return StautSocial
     */
    public function setNumAgregation($numAgregation)
    {
        $this->numAgregation = $numAgregation;

        return $this;
    }

    /**
     * Get numAgregation.
     *
     * @return int
     */
    public function getNumAgregation()
    {
        return $this->numAgregation;
    }
}
