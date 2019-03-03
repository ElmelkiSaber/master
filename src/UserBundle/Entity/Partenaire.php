<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use UserBundle\Entity\User;
/**
 * Prestatire
 *
 * @ORM\Table(name="partenaire")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\PrestatireRepository")
 */
class Partenaire extends User
{
/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    
            /**
     * @var string
     *
     * @ORM\Column(name="denomination", type="string", length=255)
     */
    private $denomination;

    /**
     * @var string
     *
     * @ORM\Column(name="agreation", type="string", length=255)
     */
    private $agreation;

            /**
     * @var string
     *
     * @ORM\Column(name="secteuractivite", type="string", length=255)
     */
    private $secteuractivite;

            /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=255)
     */
    private $fonction;

            /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

            /**
     * @var string
     *
     * @ORM\Column(name="categorieprestatire", type="string", length=255)
     */
    private $categorieprestatire;

            /**
     * @var string
     *
     * @ORM\Column(name="categoriesponsorise", type="string", length=255)
     */
    private $categoriesponsorise;

            /**
     * @var string
     *
     * @ORM\Column(name="categorieusage", type="string", length=255)
     */
    private $categorieusage;

            /**
     * @var string
     *
     * @ORM\Column(name="addresse", type="string", length=255)
     */
    private $addresse;

            /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

            /**
     * @var string
     *
     * @ORM\Column(name="postalcode", type="string", length=255)
     */
    private $postalcode;

            /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

                /**
     * @var string
     *
     * @ORM\Column(name="daterdv1", type="string", length=255)
     */
    private $daterdv1;

                /**
     * @var string
     *
     * @ORM\Column(name="daterdv2", type="string", length=255)
     */
    private $daterdv2;

                /**
     * @var string
     *
     * @ORM\Column(name="payslegalisation", type="string", length=255)
     */
    private $payslegalisation;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    protected $isActive;

    public function __construct()
    {
        $this->isActive = true;
        parent::__construct();

        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid('', true));
    }

}
