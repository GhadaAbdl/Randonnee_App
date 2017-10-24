<?php

namespace MyApp\UserBundle\Controller;

use MyApp\UserBundle\Entity\Randonnee;
use MyApp\UserBundle\Entity\Taches;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TacheController extends Controller
{
    /**
     * @Route("/tache/{id}" ,name="Ajout_Tache")
     */
    function ajoutAction(Request $req ,Randonnee $rando){


        if($req->isMethod("post")){
            $tache=new Taches();
            $tache->setDescription($req->get("description"));
            $tache->setHeureDebut(new \DateTime($req->get("date1")));
            $tache->setHeureFin(new \DateTime($req->get("date2")));

            $tache->setIdRando($rando);

            $this->getDoctrine()->getManager()->persist($tache);
            $this->getDoctrine()->getManager()->flush();
            $returnString='<div class="row planning_rando" style="padding-top: 10px;padding-bottom: 10px" >
                            <div class="col-md-1">'.sizeof($rando->getlistTaches()).'</div>
                            <div class="col-md-3">'.$tache->getHeureDebut().'</div>
                            <div class="col-md-3">'.$tache->getHeureFin().'</div>
                            <div class="col-md-4">'.$tache->getDescription().'</div>
                            <div class="col-md-1"> <button onclick="remove_item('.$tache->getId().',this)" class="btn btn-danger btn-sm glyphicon glyphicon-remove"><i></i></button></div>
                        </div>';
            return new Response($returnString);
}
        return new Response(null);
    }


    /**
     * @Route("/deltache/{id}" ,name="del_Tache")
     */
    function deleteAction(Request $req ,Taches $ta){


        if($req->isMethod("post")){
            $this->getDoctrine()->getManager()->remove($ta);
            $this->getDoctrine()->getManager()->flush();
            return new Response("ok");
        }

            return new Response("non ok");

    }
}
