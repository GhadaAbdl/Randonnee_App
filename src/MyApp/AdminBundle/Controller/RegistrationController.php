<?php

namespace MyApp\AdminBundle\Controller;

use MyApp\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Controller\RegistrationController as baseC;
use Symfony\Component\HttpFoundation\Request;

class RegistrationController extends baseC
{
    public function registerAction(Request $req)
    {

        $u= new User();
        if($req->isMethod("post")){
            $u->setUsername($req->get("login"));
            $u->setPlainPassword($req->get("password"));
            $u->setEmail($u->getUsername());
            $u->setEnabled(true);
            $u->setRoles(array("ROLE_ADMIN"));
            $this->getDoctrine()->getManager()->persist($u);
            $this->getDoctrine()->getManager()->flush();
        }
        return $this->redirectToRoute("admin_index");

    }
}
