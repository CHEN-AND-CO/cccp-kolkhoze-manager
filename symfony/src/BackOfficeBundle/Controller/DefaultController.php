<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	public function indexAction()
	{
		return $this->render('BackOfficeBundle:Default:index.html.twig');
	}

	public function StatsAction(){
		

		return $this->render('BackOfficeBundle:Default:stats.html.twig');
	}
}
