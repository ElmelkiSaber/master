<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User;
use FOS\UserBundle\Model\User as BaseUser;


/**
 * Custumer
 *
 * @ORM\Table(name="custumer")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\CustumerRepository")
 */
class Custumer extends BaseUser
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
     * @ORM\Column(name="categorie_1", type="string", length=255)
     */
    private $categorie_1;

        /**
     * @var string
     *
     * @ORM\Column(name="categorie_2", type="string", length=255)
     */
    private $categorie_2;

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
     * @ORM\Column(name="serviceparticulier", type="string", length=255)
     */
    private $service_particulier;

               /**
     * @var string
     *
     * @ORM\Column(name="sponsor", type="string", length=255)
     */
    private $sponsor;

              /**
     * @var string
     *
     * @ORM\Column(name="coach", type="string", length=255)
     */
    private $coach;

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
     * @return Custumer
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
     * Set localiteId.
     *
     * @param \MainBundle\Entity\Localite|null $localiteId
     *
     * @return Custumer
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
 * Set birthday
 *
 * @param date $birthday
 */
public function setBirthday($birthday)
{
    $this->birthday = $birthday;
}

/**
 * Get birthday
 *
 * @return date 
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
     * @return Custumer
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
     * @return Custumer
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
     * @return Custumer
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
     * @return Custumer
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
     * @return Custumer
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
     * Set categorie1.
     *
     * @param string $categorie1
     *
     * @return Custumer
     */
    public function setCategorie1($categorie1)
    {
        $this->categorie_1 = $categorie1;

        return $this;
    }

    /**
     * Get categorie1.
     *
     * @return string
     */
    public function getCategorie1()
    {
        return $this->categorie_1;
    }

    /**
     * Set categorie2.
     *
     * @param string $categorie2
     *
     * @return Custumer
     */
    public function setCategorie2($categorie2)
    {
        $this->categorie_2 = $categorie2;

        return $this;
    }

    /**
     * Get categorie2.
     *
     * @return string
     */
    public function getCategorie2()
    {
        return $this->categorie_2;
    }

    /**
     * Set pays.
     *
     * @param string $pays
     *
     * @return Custumer
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
     * @return Custumer
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
     * @return Custumer
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
     * Set serviceParticulier.
     *
     * @param string $serviceParticulier
     *
     * @return Custumer
     */
    public function setServiceParticulier($serviceParticulier)
    {
        $this->service_particulier = $serviceParticulier;

        return $this;
    }

    /**
     * Get serviceParticulier.
     *
     * @return string
     */
    public function getServiceParticulier()
    {
        return $this->service_particulier;
    }

    /**
     * Set coach.
     *
     * @param string $coach
     *
     * @return Custumer
     */
    public function setCoach($coach)
    {
        $this->coach = $coach;

        return $this;
    }

    /**
     * Get coach.
     *
     * @return string
     */
    public function getCoach()
    {
        return $this->coach;
    }

    /**
     * Set sponsor.
     *
     * @param string $sponsor
     *
     * @return Custumer
     */
    public function setSponsor($sponsor)
    {
        $this->sponsor = $sponsor;

        return $this;
    }

    /**
     * Get sponsor.
     *
     * @return string
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * Set statusSocialId.
     *
     * @param \MainBundle\Entity\Localite|null $statusSocialId
     *
     * @return Custumer
     */
    public function setStatusSocialId(\MainBundle\Entity\Localite $statusSocialId = null)
    {
        $this->statusSocialId = $statusSocialId;

        return $this;
    }

    /**
     * Get statusSocialId.
     *
     * @return \MainBundle\Entity\Localite|null
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
     * @return Custumer
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
