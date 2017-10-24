<?php

namespace MyApp\UserBundle\Controller;

use MyApp\UserBundle\Entity\Participation;
use MyApp\UserBundle\Entity\Randonnee;
use MyApp\UserBundle\Entity\TypeRandonnee;
use MyApp\UserBundle\Forms\Upload;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{


    /**
     * @Route("/" ,name="index_homepage")
     */
    public function indexAction(Request $req)
    {

        $csrfToken = $this->has('security.csrf.token_manager')
            ? $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue()
            : null;
                    $em=$this->getDoctrine()->getManager();
                    $list =$em->getRepository(Randonnee::class)->findAll();
        return $this->render('@User/index.html.twig',array('csrf_token' => $csrfToken,'list'=>$list));
    }


     /**
     * @Route("/rando/Profil" ,name="Rando_Profil")
     */
    public function ProfilAction()
    {
        return $this->render('@User/Profile.html.twig');
    }

   
}
