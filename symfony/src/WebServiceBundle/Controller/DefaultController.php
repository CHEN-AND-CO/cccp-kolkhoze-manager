<?php

namespace WebServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

use BackOfficeBundle\Entity\User;
use BackOfficeBundle\Entity\Deplacement;

use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
	public function indexAction(){
		return $this->render('WebServiceBundle:Default:index.html.twig');
	}

	public function TripsApiAction(){
		$em = $this->getDoctrine()->getManager();

		$trips = $em->getRepository('BackOfficeBundle:Deplacement')->findAllApi();

		return new JsonResponse(array(
			$trips
		));
	}

	public function TripsUserApiAction(User $user){
		
	}

	public function TripsUserDateApiAction(User $user, $year, $month){
		
	}

	public function UserApiAction(User $user){
		$em = $this->getDoctrine()->getManager();

		$users = $em->getRepository('BackOfficeBundle:User')->findByIdApi($user->getId());

		return new JsonResponse(array(
			$users
		));
	}
}
