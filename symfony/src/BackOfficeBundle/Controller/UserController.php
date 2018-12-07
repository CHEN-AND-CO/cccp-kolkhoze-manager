<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function AddAction()
    {
        return $this->render('BackOfficeBundle:User:add.html.twig', array(
            // ...
        ));
    }

    public function ListAction()
    {
        return $this->render('BackOfficeBundle:User:list.html.twig', array(
            // ...
        ));
    }

    public function EditAction()
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

}
