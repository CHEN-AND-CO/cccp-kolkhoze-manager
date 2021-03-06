<?php

/**
 * Entité TypeUser
 * @author	Mathias C-D
 * @version	1.0.0
 */

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeUser
 *
 * @ORM\Table(name="type_user")
 * @ORM\Entity
 */
class TypeUser
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
	* @ORM\Column(name="type_user", type="string", length=45, nullable=true)
	*/
	private $typeUser;

	function __toString(){
		return $this->typeUser;
	}
}

