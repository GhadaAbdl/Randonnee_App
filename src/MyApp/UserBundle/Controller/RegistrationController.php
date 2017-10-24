<?php

namespace MyApp\UserBundle\Controller;

use MyApp\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Controller\RegistrationController as baseC;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class RegistrationController extends baseC
{

    /**
     * @Route("/register" ,name="register")
     */
    public function registerAction(Request $req)
    {

        $u= new User();
        if($req->isMethod("post")){
            $u->setUsername($req->get("login"));
            $u->setPlainPassword($req->get("password"));
            $u->setEmail($u->getUsername());
            $u->setEnabled(true);
            $u->setRoles(array("ROLE_USER"));
            $u->setImgLink("avatar.png");
            $this->getDoctrine()->getManager()->persist($u);
            $this->getDoctrine()->getManager()->flush();

        }
        return $this->redirectToRoute("index_homepage");
    }
}
