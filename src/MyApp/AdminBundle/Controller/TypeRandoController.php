<?php

namespace MyApp\AdminBundle\Controller;

use MyApp\UserBundle\Entity\TypeRandonnee;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TypeRandoController extends Controller
{


    public function listAction()
    {
        $listTypeRando=$this->getDoctrine()->getManager()->getRepository(TypeRandonnee::class)->findAll();
        return $this->render('AdminBundle::TypeRando.html.twig', array('listTypeRando' =>$listTypeRando));
    }

    public function deleteAction(TypeRandonnee $typeRandonnee)
    {
        $this->getDoctrine()->getManager()->remove($typeRandonnee);
        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute("admin_type_rando");
    }

    public function createAction(Request $req)
    {
        $typeRando=new TypeRandonnee();
        if($req->isMethod("post")){
            $typeRando->setType($req->get("type_name"));
            $this->getDoctrine()->getManager()->persist($typeRando);
            $this->getDoctrine()->getManager()->flush();
        }

        return $this->redirectToRoute("admin_type_rando");
    }
    public function updateAction(Request $req,TypeRandonnee $typeRandonnee)
    {
        if($req->isMethod("post")){
            $typeRandonnee->setType($req->get("type_name"));
            $this->getDoctrine()->getManager()->persist($typeRandonnee);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute("admin_type_rando");
        }
        return $this->render("@Admin/updateTypeRando.html.twig",array("type"=>$typeRandonnee));

    }
}
