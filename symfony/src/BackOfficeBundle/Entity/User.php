<?php

/**
 * Entité User
 * @author	Mathias C-D
 * @version	1.0.0
 */

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", indexes={@ORM\Index(name="fk_user_type_user_idx", columns={"type_user_id"}), @ORM\Index(name="fk_user_societe1_idx", columns={"societe_id"}), @ORM\Index(name="fk_user_service1_idx", columns={"service_id"}), @ORM\Index(name="fk_user_ville1_idx", columns={"ville_id"})})
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Repository\UserRepository")
 */
class User
{
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
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var float
     *
     * @ORM\Column(name="distance_init", type="float", precision=10, scale=0, nullable=true)
     */
    private $distanceInit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    private $updated;

    /**
     * @var \Service
     *
     * @ORM\ManyToOne(targetEntity="Service")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="service_id", referencedColumnName="id")
     * })
     */
    private $service;

    /**
     * @var \Societe
     *
     * @ORM\ManyToOne(targetEntity="Societe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="societe_id", referencedColumnName="id")
     * })
     */
    private $societe;

    /**
     * @var \TypeUser
     *
     * @ORM\ManyToOne(targetEntity="TypeUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_user_id", referencedColumnName="id")
     * })
     */
    private $typeUser;

    /**
     * @var \Ville
     *
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ville_id", referencedColumnName="id")
     * })
     */
    private $ville;

	/**
	* Get id
	*
	* @return int
	*/
	public function getId()
	{
		return $this->id;
	}

	/**
	* Set nom
	*
	* @param string $nom
	*
	* @return Internaute
	*/
	public function setNom($nom)
	{
		$this->nom = $nom;

		return $this;
	}

	/**
	* Get nom
	*
	* @return string
	*/
	public function getNom()
	{
		return $this->nom;
	}

	/**
	* Set prenom
	*
	* @param string $prenom
	*
	* @return Internaute
	*/
	public function setPrenom($prenom)
	{
		$this->prenom = $prenom;

		return $this;
	}

	/**
	* Get prenom
	*
	* @return string
	*/
	public function getPrenom()
	{
		return $this->prenom;
	}

	/**
	* Set adresse
	*
	* @param string $adresse
	*
	* @return User
	*/
	public function setAdresse($adresse)
	{
		$this->adresse = $adresse;

		return $this;
	}

	/**
	* Get adresse
	*
	* @return string
	*/
	public function getAdresse()
	{
		return $this->adresse;
	}

	/**
	* Set distanceInit
	*
	* @param float $distanceInit
	*
	* @return User
	*/
	public function setDistanceInit($distanceInit)
	{
		$this->distanceInit = $distanceInit;

		return $this;
	}

	/**
	* Get distanceInit
	*
	* @return float
	*/
	public function getDistanceInit()
	{
		return $this->distanceInit;
	}

	/**
	* Set created
	*
	* @param \DateTime $created
	*
	* @return User
	*/
	public function setCreated($created)
	{
		$this->created = $created;

		return $this;
	}

	/**
	* Get created
	*
	* @return \DateTime
	*/
	public function getCreated()
	{
		return $this->created;
	}

	/**
	* Set updated
	*
	* @param \DateTime $updated
	*
	* @return User
	*/
	public function setUpdated($updated)
	{
		$this->updated = $updated;

		return $this;
	}

	/**
	* Get updated
	*
	* @return \DateTime
	*/
	public function getUpdated()
	{
		return $this->updated;
	}

	/**
	* Set service
	*
	* @param \Service $service
	*
	* @return User
	*/
	public function setService($service)
	{
		$this->service = $service;

		return $this;
	}

	/**
	* Get service
	*
	* @return \Service
	*/
	public function getService()
	{
		return $this->service;
	}

	/**
	* Set typeUser
	*
	* @param \TypeUser $typeUser
	*
	* @return User
	*/
	public function setTypeUser($typeUser)
	{
		$this->typeUser = $typeUser;

		return $this;
	}

	/**
	* Get typeUser
	*
	* @return \TypeUser
	*/
	public function getTypeUser()
	{
		return $this->typeUser;
	}

	/**
	* Set societe
	*
	* @param \Societe $societe
	*
	* @return User
	*/
	public function setSociete($societe)
	{
		$this->societe = $societe;

		return $this;
	}

	/**
	* Get societe
	*
	* @return \Societe
	*/
	public function getSociete()
	{
		return $this->societe;
	}

	/**
	* Set ville
	*
	* @param \Ville $ville
	*
	* @return User
	*/
	public function setVille($ville)
	{
		$this->ville = $ville;

		return $this;
	}

	/**
	* Get ville
	*
	* @return \Ville
	*/
	public function getVille()
	{
		return $this->ville;
	}

	public function __toString()
	{
		return $this->nom . " " . $this->prenom;
	}

}

