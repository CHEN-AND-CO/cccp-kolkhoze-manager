<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ServiceController extends Controller
{
    public function AddAction()
    {
        return $this->render('BackOfficeBundle:Service:add.html.twig', array(
            // ...
        ));
    }

    public function ListAction()
    {
        return $this->render('BackOfficeBundle:Service:list.html.twig', array(
            // ...
        ));
    }

    public function EditAction()
    {
        return $this->render('BackOfficeBundle:Service:edit.html.twig', array(
            // ...
        ));
    }

    public function DeleteAction()
    {
        return $this->render('BackOfficeBundle:Service:delete.html.twig', array(
            // ...
        ));
    }

}
