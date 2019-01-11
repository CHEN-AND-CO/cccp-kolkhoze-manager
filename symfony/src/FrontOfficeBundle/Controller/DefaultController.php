<?php

/**
 * Controller principal du FrontOffice
 * @author	Mathias C-D & Gwenolé Leroy-Ferrec
 * @version	1.0.0
 */

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\DateTime;

use BackOfficeBundle\Entity\User;
use BackOfficeBundle\Form\UserType;

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
			"trips" => $trips,
			"user" => $user
		));
	}

	public function tripsCreateUserAction(User $user){
		$em = $this->get("doctrine")->getManager();

		//here

		return $this->render('FrontOfficeBundle:Default:trips_create_user.html.twig', array(
			"user" => $user
		));
	}

	public function tripsUpdateUserAction(User $user, DeplacementJour $id){
		$em = $this->get("doctrine")->getManager();

		//here

		return $this->render('FrontOfficeBundle:Default:trips_update_user.html.twig', array(
			"user" => $user
		));
	}

	public function updateUserAction(Request $request, User $user){
		$form = $this->createForm(UserType::class, $user)
				->add('save', SubmitType::class, array('label' => 'Modifier l\'utilisateur'));

		$form->handleRequest($request);

		if($form->isSubmitted() && $form->isValid()){
			$user = $form->getData();

			$user->setUpdated(new \DateTime());

			$em = $this->getDoctrine()->getManager();

			// tells Doctrine you want to (eventually) save the Product (no queries yet)
			$em->persist($user);

			// actually executes the queries (i.e. the INSERT query)
			$em->flush();

			return $this->redirectToRoute('back_office_user_list');
		}

		return $this->render('FrontOfficeBundle:Default:update_user.html.twig', array(
			"form" => $form->createView(),
			"user" => $user
		));
	}
}
