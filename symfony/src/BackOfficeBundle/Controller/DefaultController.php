<?php

/**
 * Controller par défaut
 * @author	Mathias C-D
 * @version	1.0.0
 */

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BackOfficeBundle\Entity\User;
use BackOfficeBundle\Entity\Ville;

class DefaultController extends Controller
{
	public function indexAction()
	{
		return $this->render('BackOfficeBundle:Default:index.html.twig');
	}

	public function StatsAction(){
		$em = $this->get("doctrine")->getManager();

		$nbUsersPerCity = $em->getRepository('BackOfficeBundle:Ville')->getNbUsersPerCity();

		$kmPerSociety = $em->getRepository('BackOfficeBundle:Societe')->getKmPerSociety();
		$nbUsersPerSociety = $em->getRepository('BackOfficeBundle:Societe')->getNbUsersPerSociety();

		$users = $em->getRepository('BackOfficeBundle:User')->findAll();

		$i = 0;
		foreach($users as $user){
			$kmPerMonth[$i] = $em->getRepository('BackOfficeBundle:User')->getKmPerMonth(2019, $user->getId());
			$i++;
		}

		$months = array(
			"Janvier",
			"Février",
			"Mars",
			"Avril",
			"Mai",
			"Juin",
			"Juillet",
			"Août",
			"Septembre",
			"Octobre",
			"Novembre",
			"Décembre"
		);

		return $this->render('BackOfficeBundle:Default:stats.html.twig', array(
			"city_users" => $nbUsersPerCity,
			"societe_kms" => $kmPerSociety,
			"societe_users" => $nbUsersPerSociety,
			"km_months" => $kmPerMonth,
			"months" => $months
		));
	}
}
