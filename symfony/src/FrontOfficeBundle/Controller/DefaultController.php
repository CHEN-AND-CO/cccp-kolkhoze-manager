<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BackOfficeBundle\Entity\User;

class DefaultController extends Controller
{
	public function indexAction()
	{
		return $this->render('FrontOfficeBundle:Default:index.html.twig');
	}

	public function indexUserAction(User $user){
		return $this->render('FrontOfficeBundle:Default:index_user.html.twig', array(
			"user" => $user
		));
	}

	public function tripsUserAction(User $user){
		$em = $this->get("doctrine")->getManager();

		$trips = $em->getRepository('BackOfficeBundle:Deplacement')->findByUser($user->getId());

		return $this->render('FrontOfficeBundle:Default:trips_user.html.twig', array(
			"trips" => $trips
		));
	}

	public function tripsCreateUserAction(User $user){
		$em = $this->get("doctrine")->getManager();

		

		return $this->render('FrontOfficeBundle:Default:trips_create_user.html.twig', array(
			//...
		));
	}

	public function tripsUpdateUserAction(User $user, DeplacementJour $id){
		$em = $this->get("doctrine")->getManager();

		

		return $this->render('FrontOfficeBundle:Default:trips_update_user.html.twig', array(
			//...
		));
	}

	public function updateUserAction(User $user){
		$em = $this->get("doctrine")->getManager();

		

		return $this->render('FrontOfficeBundle:Default:update_user.html.twig', array(
			//...
		));
	}
}
