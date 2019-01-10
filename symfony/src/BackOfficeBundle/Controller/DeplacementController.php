<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\DateTime;

use BackOfficeBundle\Entity\Deplacement;
use BackOfficeBundle\Entity\User;
use BackOfficeBundle\Form\DeplacementType;

use Symfony\Component\HttpFoundation\JsonResponse;

class DeplacementController extends Controller
{

	public function ReadAction(Request $request, User $id, Deplacement $deplacement)
	{
		return $this->render('BackOfficeBundle:Deplacement:read.html.twig', array(
			"obj" => $deplacement,
			"user" => $id
		));
	}

	public function EditAction(Request $request, User $id, Deplacement $deplacement)
	{
		$form = $this->createForm(DeplacementType::class, $deplacement)
				->add('save', SubmitType::class, array('label' => 'Modifier le déplacement'));

		$form->handleRequest($request);

		$user = $id;

		if($form->isSubmitted() && $form->isValid()){
			$deplacement = $form->getData();

			$repo = $this->getDoctrine()->getRepository('BackOfficeBundle:User');
			$em = $this->get("doctrine")->getManager();

			if($user->getService() == "Administration"){
				$deplacement->setDateValidation(new \DateTime());
				$deplacement->setUser1($user);
			}

			$em = $this->getDoctrine()->getManager();

			// tells Doctrine you want to (eventually) save the Product (no queries yet)
			$em->persist($deplacement);

			// actually executes the queries (i.e. the INSERT query)
			$em->flush();

			return $this->redirectToRoute('back_office_deplacement_list', array("id" => $user->getId()));
		}

		if($user->getService() == "Administration"){
			return $this->render('BackOfficeBundle:Deplacement:edit.html.twig', array(
				"form" => $form->createView(),
				"obj" => $deplacement,
				"user" => $id
			));
		} else {
			return $this->redirectToRoute('back_office_deplacement_read', array(
																					"id" => $user->getId(),
																					"deplacement" => $deplacement->getId()
																				));
		}
	}

	public function ListAction(User $id)
	{
		$repo = $this->getDoctrine()->getRepository('BackOfficeBundle:Deplacement');
		$em = $this->get("doctrine")->getManager();

		$deplacements = $repo->findAll();

		return $this->render('BackOfficeBundle:Deplacement:list.html.twig', array(
			"objs" => $deplacements,
			"user" => $id
		));
	}
}
