<?php

namespace UserBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User;

/**
 * Prestataire
 *
 * @ORM\Table(name="prestataire")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\PrestataireRepository")
 */
class Prestataire extends User
{
/**
         * @ORM\Column(type="integer")
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        protected $id;
    
    
        /**
         * @ORM\Column(name="is_active", type="boolean")
         */
        protected $isActive;

        /**
         * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Localite", inversedBy="custumer")
         * @ORM\JoinColumn(name="localite_id", referencedColumnName="id")
        */
        private $localiteId;

        /**
         * @ORM\ManyToOne(targetEntity="MainBundle\Entity\StatutSocial", inversedBy="custumer")
         * @ORM\JoinColumn(name="status_social_id", referencedColumnName="id")
        */
        private $statusSocialId;

         /**
         * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Assurance", inversedBy="custumer")
         * @ORM\JoinColumn(name="assurance_id", referencedColumnName="id")
        */
        private $assuranceID;

        /**
        * @var date $birthday
        *
        * @ORM\Column(name="birthday", type="date", nullable=true)
        */
        private $birthday;


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
     * @ORM\Column(name="region", type="string", length=255)
     */
    private $region;

        /**
     * @var string
     *
     * @ORM\Column(name="postalcode", type="string", length=255)
     */
    private $postal_code;


        /**
     * @var string
     *
     * @ORM\Column(name="statutsocial", type="string", length=255)
     */
    private $status_social;

        /**
     * @var string
     *
     * @ORM\Column(name="futureactivite", type="string", length=255)
     */
    private $futureactivite;


        /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;
    
       /**
     * @var string
     *
     * @ORM\Column(name="assurance", type="string", length=255)
     */
    private $assurance;
    

           /**
     * @var string
     *
     * @ORM\Column(name="service_pro", type="string", length=255)
     */
    private $service_pro;

           /**
     * @var string
     *
     * @ORM\Column(name="prestation", type="string", length=255)
     */
    private $prestation;

               /**
     * @var string
     *
     * @ORM\Column(name="tarif", type="string", length=255)
     */
    private $tarif;

      


    
        public function __construct()
        {
            $this->isActive = true;
            // may not be needed, see section on salt below
            // $this->salt = md5(uniqid('', true));
            parent::__construct();

        }
    
    
    /**
     * Set isActive.
     *
     * @param bool $isActive
     *
     * @return Prestataire
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive.
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set birthday.
     *
     * @param \DateTime|null $birthday
     *
     * @return Prestataire
     */
    public function setBirthday($birthday = null)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday.
     *
     * @return \DateTime|null
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set addresse.
     *
     * @param string $addresse
     *
     * @return Prestataire
     */
    public function setAddresse($addresse)
    {
        $this->addresse = $addresse;

        return $this;
    }

    /**
     * Get addresse.
     *
     * @return string
     */
    public function getAddresse()
    {
        return $this->addresse;
    }

    /**
     * Set ville.
     *
     * @param string $ville
     *
     * @return Prestataire
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville.
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set region.
     *
     * @param string $region
     *
     * @return Prestataire
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region.
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set postalCode.
     *
     * @param string $postalCode
     *
     * @return Prestataire
     */
    public function setPostalCode($postalCode)
    {
        $this->postal_code = $postalCode;

        return $this;
    }

    /**
     * Get postalCode.
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * Set statusSocial.
     *
     * @param string $statusSocial
     *
     * @return Prestataire
     */
    public function setStatusSocial($statusSocial)
    {
        $this->status_social = $statusSocial;

        return $this;
    }

    /**
     * Get statusSocial.
     *
     * @return string
     */
    public function getStatusSocial()
    {
        return $this->status_social;
    }

    /**
     * Set futureactivite.
     *
     * @param string $futureactivite
     *
     * @return Prestataire
     */
    public function setFutureactivite($futureactivite)
    {
        $this->futureactivite = $futureactivite;

        return $this;
    }

    /**
     * Get futureactivite.
     *
     * @return string
     */
    public function getFutureactivite()
    {
        return $this->futureactivite;
    }

    /**
     * Set pays.
     *
     * @param string $pays
     *
     * @return Prestataire
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays.
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set assurance.
     *
     * @param string $assurance
     *
     * @return Prestataire
     */
    public function setAssurance($assurance)
    {
        $this->assurance = $assurance;

        return $this;
    }

    /**
     * Get assurance.
     *
     * @return string
     */
    public function getAssurance()
    {
        return $this->assurance;
    }

    /**
     * Set servicePro.
     *
     * @param string $servicePro
     *
     * @return Prestataire
     */
    public function setServicePro($servicePro)
    {
        $this->service_pro = $servicePro;

        return $this;
    }

    /**
     * Get servicePro.
     *
     * @return string
     */
    public function getServicePro()
    {
        return $this->service_pro;
    }

    /**
     * Set prestation.
     *
     * @param string $prestation
     *
     * @return Prestataire
     */
    public function setPrestation($prestation)
    {
        $this->prestation = $prestation;

        return $this;
    }

    /**
     * Get prestation.
     *
     * @return string
     */
    public function getPrestation()
    {
        return $this->prestation;
    }

    /**
     * Set tarif.
     *
     * @param string $tarif
     *
     * @return Prestataire
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif.
     *
     * @return string
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set localiteId.
     *
     * @param \MainBundle\Entity\Localite|null $localiteId
     *
     * @return Prestataire
     */
    public function setLocaliteId(\MainBundle\Entity\Localite $localiteId = null)
    {
        $this->localiteId = $localiteId;

        return $this;
    }

    /**
     * Get localiteId.
     *
     * @return \MainBundle\Entity\Localite|null
     */
    public function getLocaliteId()
    {
        return $this->localiteId;
    }

    /**
     * Set statusSocialId.
     *
     * @param \MainBundle\Entity\StatutSocial|null $statusSocialId
     *
     * @return Prestataire
     */
    public function setStatusSocialId(\MainBundle\Entity\StatutSocial $statusSocialId = null)
    {
        $this->statusSocialId = $statusSocialId;

        return $this;
    }

    /**
     * Get statusSocialId.
     *
     * @return \MainBundle\Entity\StatutSocial|null
     */
    public function getStatusSocialId()
    {
        return $this->statusSocialId;
    }

    /**
     * Set assuranceID.
     *
     * @param \MainBundle\Entity\Assurance|null $assuranceID
     *
     * @return Prestataire
     */
    public function setAssuranceID(\MainBundle\Entity\Assurance $assuranceID = null)
    {
        $this->assuranceID = $assuranceID;

        return $this;
    }

    /**
     * Get assuranceID.
     *
     * @return \MainBundle\Entity\Assurance|null
     */
    public function getAssuranceID()
    {
        return $this->assuranceID;
    }
}
