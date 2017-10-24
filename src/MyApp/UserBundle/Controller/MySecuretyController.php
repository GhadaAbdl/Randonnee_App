<?php

namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Controller\SecurityController as securety;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MySecuretyController extends securety
{
    /**
     * @Route("/login_to_app" ,name="Rando_login")
     */
    public function loginAction(Request $request)
    {

       return parent::loginAction($request);
    }

    protected function renderLogin(array $data)
    {
        return $this->redirectToRoute("index_homepage");
    }


}
