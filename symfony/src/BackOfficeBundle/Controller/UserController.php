<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\DateTime;

use BackOfficeBundle\Entity\User;
use BackOfficeBundle\Form\UserType;

use Symfony\Component\HttpFoundation\JsonResponse;

class UserController extends Controller
{
	public function AddAction(Request $request)
	{
		$user = new User();
		$form = $this->createForm(UserType::class, $user)
				->add('save', SubmitType::class, array('label' => 'Créer l\'utilisateur'));

		$form->handleRequest($request);

		if($form->isSubmitted() && $form->isValid()){
			$user = $form->getData();

			$user->setCreated(new \DateTime());
			$user->setUpdated(new \DateTime());

			$em = $this->getDoctrine()->getManager();

			// tells Doctrine you want to (eventually) save the Product (no queries yet)
			$em->persist($user);

			// actually executes the queries (i.e. the INSERT query)
			$em->flush();

			return $this->redirectToRoute('back_office_user_list');
		}

		return $this->render('BackOfficeBundle:User:add.html.twig', array(
			"form" => $form->createView()
		));
	}

	public function ReadAction(Request $request, User $user)
	{
		return $this->render('BackOfficeBundle:User:read.html.twig', array(
			"obj" => $user
		));
	}

	public function EditAction(Request $request, User $user)
	{
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

		return $this->render('BackOfficeBundle:User:edit.html.twig', array(
			"form" => $form->createView(),
			"obj" => $user
		));
	}

	public function DeleteAction(User $user)
	{
		$em = $this->getDoctrine()->getManager();
		$em->remove($user);
		$em->flush();

		return $this->redirectToRoute('back_office_user_list');
	}

	public function ListAction()
	{
		$repo = $this->getDoctrine()->getRepository('BackOfficeBundle:User');
		$em = $this->get("doctrine")->getManager();

		if(!isset($_POST["shape"]) || $_POST["shape"] == ""){
			$users = $repo->findAll();
		} else {
			//$users = $em->getRepository('BackOfficeBundle:User')->findAllThatMatchWith($_POST["shape"]);
			$users = $repo->findAll();
		}

		return $this->render('BackOfficeBundle:User:list.html.twig', array(
			"objs" => $users
		));
	}

}
