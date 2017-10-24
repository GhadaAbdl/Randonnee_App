<?php

namespace MyApp\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
//        return $this->redirectToRoute("admin_login");
        return $this->redirectToRoute("admin_dashboard");
    }
    public function accessDeniedAction()
    {
        return $this->render("@Admin/accessDenied.html.twig");
    }
//
//    public function loginAction()
//    {
//        return $this->render('AdminBundle::login.html.twig');
//    }
    public function dashboardAction()
    {
        return $this->render('AdminBundle::template.html.twig');
    }
    public function listUsersAction()
    {
        return $this->render('AdminBundle::listUsers.html.twig');
    }
    public function profileAction()
    {
        return $this->render('AdminBundle::profile.html.twig');
    }
}
