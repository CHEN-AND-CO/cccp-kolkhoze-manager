<?php

/**
 * Entité Société
 * @author	Mathias C-D
 * @version	1.0.0
 */

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Societe
 *
 * @ORM\Table(name="societe", indexes={@ORM\Index(name="fk_societe_ville1_idx", columns={"ville_id"})})
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Repository\SocieteRepository")
 */
class Societe
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
	* @ORM\Column(name="societe", type="string", length=45, nullable=true)
	*/
	private $societe;

	/**
	* @var string
	*
	* @ORM\Column(name="adresse", type="string", length=255, nullable=true)
	*/
	private $adresse;

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
	* @return integer
	*/
	public function getId()
	{
		return $this->id;
	}

	/**
	* Set societe
	*
	* @param string $societe
	*
	* @return Societe
	*/
	public function setSociete($societe)
	{
		$this->societe = $societe;

		return $this;
	}

	/**
	* Get societe
	*
	* @return string
	*/
	public function getSociete()
	{
		return $this->societe;
	}

	/**
	* Set adresse
	*
	* @param string $adresse
	*
	* @return Societe
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
	* Set ville
	*
	* @param \Ville $ville
	*
	* @return Societe
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

	function __toString(){
		return $this->societe;
	}
}

