<?php

/**
 * Controller de Service CRUD
 * @author	Mathias C-D
 * @version	1.0.0
 */

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\DateTime;

use BackOfficeBundle\Entity\Service;
use BackOfficeBundle\Form\ServiceType;

use Symfony\Component\HttpFoundation\JsonResponse;

class ServiceController extends Controller
{
	public function AddAction(Request $request)
	{
		$service = new Service();
		$form = $this->createForm(ServiceType::class, $service)
				->add('save', SubmitType::class, array('label' => 'Créer le service'));

		$form->handleRequest($request);

		if($form->isSubmitted() && $form->isValid()){
			$service = $form->getData();

			$em = $this->getDoctrine()->getManager();

			// tells Doctrine you want to (eventually) save the Product (no queries yet)
			$em->persist($service);

			// actually executes the queries (i.e. the INSERT query)
			$em->flush();

			return $this->redirectToRoute('back_office_service_list');
		}

		return $this->render('BackOfficeBundle:Service:add.html.twig', array(
			"form" => $form->createView()
		));
	}

	public function ReadAction(Request $request, Service $service)
	{
		return $this->render('BackOfficeBundle:Service:read.html.twig', array(
			"obj" => $service
		));
	}

	public function EditAction(Request $request, Service $service)
	{
		$form = $this->createForm(ServiceType::class, $service)
				->add('save', SubmitType::class, array('label' => 'Modifier le service'));

		$form->handleRequest($request);

		if($form->isSubmitted() && $form->isValid()){
			$service = $form->getData();

			$service->setUpdated(new \DateTime());

			$em = $this->getDoctrine()->getManager();

			// tells Doctrine you want to (eventually) save the Product (no queries yet)
			$em->persist($service);

			// actually executes the queries (i.e. the INSERT query)
			$em->flush();

			return $this->redirectToRoute('back_office_service_list');
		}

		return $this->render('BackOfficeBundle:Service:edit.html.twig', array(
			"form" => $form->createView(),
			"obj" => $service
		));
	}

	public function DeleteAction(Service $service)
	{
		$em = $this->getDoctrine()->getManager();
		$em->remove($service);
		$em->flush();

		return $this->redirectToRoute('back_office_service_list');
	}

	public function ListAction()
	{
		$repo = $this->getDoctrine()->getRepository('BackOfficeBundle:Service');
		$em = $this->get("doctrine")->getManager();

		if(!isset($_POST["shape"]) || $_POST["shape"] == ""){
			$services = $repo->findAll();
		} else {
			//$services = $em->getRepository('BackOfficeBundle:Service')->findAllThatMatchWith($_POST["shape"]);
			$services = $repo->findAll();
		}

		return $this->render('BackOfficeBundle:Service:list.html.twig', array(
			"objs" => $services
		));
	}

}
