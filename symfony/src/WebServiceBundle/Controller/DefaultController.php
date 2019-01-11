<?php

namespace WebServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

use BackOfficeBundle\Entity\User;
use BackOfficeBundle\Entity\Deplacement;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
	public function indexAction(){
		return $this->render('WebServiceBundle:Default:index.html.twig');
	}

	public function TripsApiAction(){
		$em = $this->getDoctrine()->getManager();

		$trips = $em->getRepository('BackOfficeBundle:Deplacement')->findAllApi();

		$answer = new Response(
								'Content',
								Response::HTTP_OK,
								array(
									'content-type' => 'application/json',
									'access-control-allow-origin' => '*'
									)
								);

		$answer->setContent(json_encode($trips));

		return $answer;
	}

	public function TripsUserApiAction(User $user){
		$em = $this->getDoctrine()->getManager();

		$trips = $em->getRepository('BackOfficeBundle:Deplacement')->findByUserApi($user->getId());

		return new JsonResponse(array(
			$trips
		));
	}

	public function TripsUserDateApiAction(User $user, $year, $month){
		
	}

	public function UserApiAction(User $user){
		$em = $this->getDoctrine()->getManager();

		$users = $em->getRepository('BackOfficeBundle:User')->findByIdApi($user->getId());

		$answer = new Response(
								'Content',
								Response::HTTP_OK,
								array(
									'content-type' => 'application/json',
									'access-control-allow-origin' => '*'
									)
								);

		$answer->setContent(json_encode($users));

		return $answer;
		/*return new JsonResponse(array(
			$users
		));*/
	}
}
