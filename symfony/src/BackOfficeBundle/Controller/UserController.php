<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use BackOfficeBundle\Entity\User;
//use BackOfficeBundle\Form\InternauteType;

use Symfony\Component\HttpFoundation\JsonResponse;

class UserController extends Controller
{
	public function AddAction()
	{
		return $this->render('BackOfficeBundle:User:add.html.twig', array(
			// ...
		));
	}

	public function ReadAction()
	{
		return $this->render('BackOfficeBundle:User:read.html.twig', array(
			
		));
	}

	public function EditAction(User $user)
	{
		return $this->render('BackOfficeBundle:User:edit.html.twig', array(
			// ...
		));
	}

	public function DeleteAction()
	{
		return $this->render('BackOfficeBundle:User:delete.html.twig', array(
			// ...
		));
	}

	public function ListAction()
	{
		$repo = $this->getDoctrine()->getRepository('BackOfficeBundle:User');
		$em = $this->get("doctrine")->getManager();

		if(!isset($_POST["shape"]) || $_POST["shape"] == ""){
			$users = $repo->findAll();
		} else {
			$users = $em->getRepository('BackOfficeBundle:User')->findAllThatMatchWith($_POST["shape"]);
		}

		return $this->render('BackOfficeBundle:User:list.html.twig', array(
			"objs" => $users
		));
	}

}
