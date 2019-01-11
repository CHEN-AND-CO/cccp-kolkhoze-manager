<?php

/**
 * Controller de Société CRUD
 * @author	Mathias C-D
 * @version	1.0.0
 */

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\DateTime;

use BackOfficeBundle\Entity\Societe;
use BackOfficeBundle\Form\SocieteType;

use Symfony\Component\HttpFoundation\JsonResponse;

class SocieteController extends Controller
{
	public function AddAction(Request $request)
	{
		$societe = new Societe();
		$form = $this->createForm(SocieteType::class, $societe)
				->add('save', SubmitType::class, array('label' => 'Créer la société'));

		$form->handleRequest($request);

		if($form->isSubmitted() && $form->isValid()){
			$societe = $form->getData();

			$em = $this->getDoctrine()->getManager();

			// tells Doctrine you want to (eventually) save the Product (no queries yet)
			$em->persist($societe);

			// actually executes the queries (i.e. the INSERT query)
			$em->flush();

			return $this->redirectToRoute('back_office_societe_list');
		}

		return $this->render('BackOfficeBundle:Societe:add.html.twig', array(
			"form" => $form->createView()
		));
	}

	public function ReadAction(Request $request, Societe $societe)
	{
		return $this->render('BackOfficeBundle:Societe:read.html.twig', array(
			"obj" => $societe
		));
	}

	public function EditAction(Request $request, Societe $societe)
	{
		$form = $this->createForm(SocieteType::class, $societe)
				->add('save', SubmitType::class, array('label' => 'Modifier la société'));

		$form->handleRequest($request);

		if($form->isSubmitted() && $form->isValid()){
			$societe = $form->getData();

			$em = $this->getDoctrine()->getManager();

			// tells Doctrine you want to (eventually) save the Product (no queries yet)
			$em->persist($societe);

			// actually executes the queries (i.e. the INSERT query)
			$em->flush();

			return $this->redirectToRoute('back_office_societe_list');
		}

		return $this->render('BackOfficeBundle:Societe:edit.html.twig', array(
			"form" => $form->createView(),
			"obj" => $societe
		));
	}

	public function DeleteAction(Societe $societe)
	{
		$em = $this->getDoctrine()->getManager();
		$em->remove($societe);
		$em->flush();

		return $this->redirectToRoute('back_office_societe_list');
	}

	public function ListAction()
	{
		$repo = $this->getDoctrine()->getRepository('BackOfficeBundle:Societe');
		$em = $this->get("doctrine")->getManager();

		if(!isset($_POST["shape"]) || $_POST["shape"] == ""){
			$societes = $repo->findAll();
		} else {
			//$societes = $em->getRepository('BackOfficeBundle:Societe')->findAllThatMatchWith($_POST["shape"]);
			$societes = $repo->findAll();
		}

		return $this->render('BackOfficeBundle:Societe:list.html.twig', array(
			"objs" => $societes
		));
	}

}
