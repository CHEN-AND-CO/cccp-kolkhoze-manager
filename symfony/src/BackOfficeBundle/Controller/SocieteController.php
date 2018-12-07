<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SocieteController extends Controller
{
    public function AddAction()
    {
        return $this->render('BackOfficeBundle:Societe:add.html.twig', array(
            // ...
        ));
    }

    public function ListAction()
    {
        return $this->render('BackOfficeBundle:Societe:list.html.twig', array(
            // ...
        ));
    }

    public function EditAction()
    {
        return $this->render('BackOfficeBundle:Societe:edit.html.twig', array(
            // ...
        ));
    }

    public function DeleteAction()
    {
        return $this->render('BackOfficeBundle:Societe:delete.html.twig', array(
            // ...
        ));
    }

}
