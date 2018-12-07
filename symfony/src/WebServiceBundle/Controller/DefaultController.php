<?php

namespace WebServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	public function indexAction(){
		return $this->render('WebServiceBundle:Default:index.html.twig');
	}

	public function getdepApiAction(){
		
	}

	public function getdepUserApiAction($user){
		
	}

	public function getdepUserDateApiAction($user, $year, $month){
		
	}
}
