<?php

namespace MyApp\UserBundle\Controller;

use MyApp\UserBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MyApp\UserBundle\Entity\Participation;
use MyApp\UserBundle\Entity\Randonnee;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ParticipationController extends Controller
{
    /**
     * @Route("/rando/{id}/participer", name="Rando_participer")
     *
     */
    public function ajoutAction(Randonnee $rando)
    {

//        RETURN $this->render("testInterface.twig",array("data"=>));
        if(sizeof($this->getDoctrine()->getRepository(Participation::class)->findBy(array("idRando"=>$rando)))<$rando->getNbPlaceMax()&&$rando->getDateRando()->getTimestamp()-(new \DateTime())->getTimestamp()>0){
            $participation=$this->getDoctrine()->getRepository(Participation::class)->findBy(array("idRando"=>$rando,"loginUser"=>$this->getUser()));
            if($participation==null){
                $participation=new Participation();
                $participation->setIdRando($rando);
                $participation->setLoginUser($this->getUser());
                $participation->setDatePart(new \DateTime());

                $this->getDoctrine()->getManager()->persist($participation);
                $this->getDoctrine()->getManager()->flush();
            }
        }
        return $this->redirectToRoute("Rando_details",array("id"=>$rando->getId()));
    }

    /**
     * @Route("/participation/supp/{id}", name="Rando_annParticipation")
     *
     */
    public function supprimerAction(Randonnee $rando)
    {
        $participation=$this->getDoctrine()->getRepository(Participation::class)->findBy(array("idRando"=>$rando,"loginUser"=>$this->getUser()));

        if($participation==null){


        }else{

            $this->getDoctrine()->getManager()->remove($participation[0]);
            $this->getDoctrine()->getManager()->flush();
        }
        return $this->redirectToRoute("Rando_details",array("id"=>$rando->getId()));
    }

    /**
     * @Route("/listMy/participation/", name="Part_listMy")
     */
    function listMyPartAction(){
        //with dql

        $randos=array();
        foreach ($this->getDoctrine()->getRepository(Participation::class)->findBy(array("loginUser"=>$this->getUser())) as $item){
            $randos[] =$item->getIdRando();
        }

        return $this->render("@User/meParticipation.html.twig",array("list_rando"=>$randos));
    }

}
