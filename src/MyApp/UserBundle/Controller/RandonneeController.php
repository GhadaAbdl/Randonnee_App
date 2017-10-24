<?php

namespace MyApp\UserBundle\Controller;

use MyApp\UserBundle\Entity\Commentaire;
use MyApp\UserBundle\Entity\Destination;
use MyApp\UserBundle\Entity\Localisation;
use MyApp\UserBundle\Entity\Randonnee;
use MyApp\UserBundle\Entity\Participation;
use MyApp\UserBundle\Entity\RandonneeImages;
use MyApp\UserBundle\Entity\Taches;
use MyApp\UserBundle\Entity\User;
use MyApp\UserBundle\Entity\TypeRandonnee;
use MyApp\UserBundle\Forms\Upload;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Date;


class RandonneeController extends Controller
{

     /**
     * @Route("/rando/ajout" ,name="Rando_ajout")
     */
//    public function ajoutAction()
//  {
//
//        $em=$this->getDoctrine()->getManager();
//        $list_rando_type=$em->getRepository(TypeRandonnee::class)->findAll();
//
//        $form=$this->createForm(Upload::class,null);
//
//        return $this->render('@User/ajout.html.twig',array("list_rando_type"=>$list_rando_type,"form"=>$form->createView()));
//    }


    /**
     * @Route("/randonnee/create" ,name="ajoutRando")
     */
    public function createAction(Request $req)
    {

        $em=$this->getDoctrine()->getManager();
        $list_rando_type=$em->getRepository(TypeRandonnee::class)->findAll();

        $form=$this->createForm(Upload::class,null);
        $form->handleRequest($req);

        
        if($req->isMethod("POST")){
            $rando =new Randonnee();
            
            $data=$form->getData();

            $typeRando=$this->getDoctrine()->getManager()->getRepository(TypeRandonnee::class)
                            ->find($req->get("rando_type"));
            $rando->setEtat("0");
            $rando->setTitre($req->get("titre"));
            $rando->setNbPlaceMin($req->get("nbPlaceMin"));
            $rando->setNbPlaceMax($req->get("nbPlaceMax"));
            if($req->get("nbPlaceMax")<$req->get("nbPlaceMin")){
                $rando->setNbPlaceMax( $rando->getNbPlaceMin());
            }
            $rando->setNbKilometres($req->get("nbKilometres"));
            $rando->setPrix($req->get("prix"));
            $rando->setDescription($req->get("description"));
            $rando->setIdTypeRandonnee($typeRando);
            $rando->setLoginOrganisateur($this->getUser());

            $rando->setDateRando(new \DateTime($req->get("datedep")));


            $dest= new Destination();
            $dest->setNom($req->get("destination"));

            $localisation =new Localisation();
            $localisation->setLattitude($req->get("lat"));
            $localisation->setLongitude($req->get("lng"));
            $this->getDoctrine()->getManager()->persist($localisation);

            $dest->setIdLocalisation($localisation);
            $this->getDoctrine()->getManager()->persist($dest);

            $rando->setIdDestination($dest);
            $this->getDoctrine()->getManager()->persist($rando);

            $tache=new Taches();
            $tache->setDescription("rassemblement");
            $tache->setHeureDebut($rando->getDateRando());
            $tache->setHeureFin($rando->getDateRando());
            $tache->setIdLocalisation($localisation);
            $tache->setIdRando($rando);
            $this->getDoctrine()->getManager()->persist($tache);



            foreach ($data['imagesJointes'] as $item) {
                $item->setIdRando($rando);
                $this->getDoctrine()->getManager()->persist($item);
            }

            $this->getDoctrine()->getManager()->flush();
             return $this->redirectToRoute("Rando_details",array("id"=>$rando->getId()));
        }
       
return $this->render('@User/ajout.html.twig',array("list_rando_type"=>$list_rando_type,"form"=>$form->createView()));
    }


    /**
     * @Route("/rando/update/{id}" ,name="Rando_update")
     */
    public function updateAction(Request $req,Randonnee $rando)
    {
        if($rando->getLoginOrganisateur()!=$this->getUser() and $this->getUser()->getRoles()[0]!="ROLE_ADMIN"  ){
            return $this->redirectToRoute("Rando_list");
        }
        $em=$this->getDoctrine()->getManager();
        $list_rando_type=$em->getRepository(TypeRandonnee::class)->findAll();
        if($req->isMethod("POST")){
            $typeRando=$this->getDoctrine()->getManager()->getRepository(TypeRandonnee::class)
                ->find($req->get("rando_type"));

            $rando->setTitre($req->get("titre"));
            $rando->setNbPlaceMin($req->get("nbPlaceMin"));
            $rando->setNbPlaceMax($req->get("nbPlaceMax"));
            $rando->setNbKilometres($req->get("nbKilometres"));
            $rando->setPrix($req->get("prix"));
            $rando->setDescription($req->get("description"));
            $rando->setIdTypeRandonnee($typeRando);
            $dest=$rando->getIdDestination();

            $dest->setNom($req->get("destination"));
            $localisation=$dest->getIdLocalisation();

            $localisation->setLattitude($req->get("lat"));
            $localisation->setLongitude($req->get("lng"));


            $this->getDoctrine()->getManager()->persist($localisation);
            $this->getDoctrine()->getManager()->persist($dest);
            $this->getDoctrine()->getManager()->persist($rando);


            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute("Rando_details",array("id"=>$rando->getId()));
        }
       return $this->render("@User/update_rando.html.twig",array("item"=>$rando,"list_rando_type"=>$list_rando_type));
    }

   
    /**
     * @Route("/rando/delete/{id}" ,name="Rando_delete")
     */
    function deleteAction(Randonnee $rando){
        if($rando->getLoginOrganisateur()!=$this->getUser() and $this->getUser()->getRoles()[0]!="ROLE_ADMIN"){
            return $this->redirectToRoute("Rando_list");
        }

        $this->getDoctrine()->getManager()->remove($rando);
        $this->getDoctrine()->getManager()->flush();

        return $this->redirectToRoute("Rando_list");
    }


    /**
     * @Route("/rando/my" ,name="Rando_mine")
     */
    function listMyAction(){

        $list=$this->getDoctrine()->getRepository(Randonnee::class)->findBy(array("loginOrganisateur"=>$this->getUser()));
        return $this->render("@User/meRandonnee.html.twig",array("list_rando"=>$list));


    }

    /**
     * @Route("/rando/details/{id}" ,name="Rando_details")
     */
    public function detailsAction(Randonnee $rando)
    {
        $exist=false;
        $valid=true;
        $valid_msg="";


if(sizeof($this->getDoctrine()->getRepository(Participation::class)->findBy(array("idRando"=>$rando)))>=$rando->getNbPlaceMax()){
    $valid=false;
    $valid_msg="pas de Places";
}


$participation=$this->getDoctrine()->getRepository(Participation::class)->findBy(array("idRando"=>$rando,"loginUser"=>$this->getUser()));
if($participation!=null){
$valid=true;
   $exist=true;
}
if($rando->getDateRando()->getTimestamp()-(new \DateTime())->getTimestamp()<=0){
    $valid=false;
    $valid_msg="date expirer";
}


$data=$rando->getDateRando()->getTimestamp()-(new \DateTime())->getTimestamp();

        return $this->render('@User/details.html.twig',array(
            
            "item"=>$rando,
            "exist"=>$exist,
            "valid"=>$valid,
            "valid_msg"=>$valid_msg,
            "data"=>$data,
            "size"=>sizeof($this->getDoctrine()->getRepository(Participation::class)->findBy(array("idRando"=>$rando)))));
    }


    /**
     * @Route("/rando/list" ,name="Rando_list")
     */
    public function listAction(Request $req)
    {
        $em=$this->getDoctrine()->getManager();

        $list_rando_type=$em->getRepository(TypeRandonnee::class)->findAll();

        if($req->isMethod("post")){

            $list_rando=$this->getDoctrine()->getManager()->getRepository(Randonnee::class)->findByFilter($req->get("type"),$req->get("prixmin"),$req->get("prixmax"),$req->get("destination"));

//            if($req->get("type")=="all"){
//                $list_rando=$em->getRepository(Randonnee::class)->findAll();
//            }else{
//                $list_rando=$em->getRepository(Randonnee::class)->findBy(array("idTypeRandonnee"=>$req->get("type")));
//            }
        }else{
            $list_rando=$em->getRepository(Randonnee::class)->findValidAll();
        }

        return $this->render('@User/list.html.twig',array("list_rando"=>$list_rando,"list_rando_type"=>$list_rando_type));
    }


    /**
     * @Route("/rando/aj_com/{id}" ,name="ajout_com")
     */
    public function ajoutComAction(Request $req,Randonnee $rando){

        $com=new Commentaire();
        $com->setLoginUser($this->getUser());
        $com->setIdRando($rando);
        $com->setDate(new \DateTime());
        $com->setContenu($req->get('contenu'));
        $em = $this->getDoctrine()->getManager();
        $em->persist($com);
        $em->flush();

        return $this->redirectToRoute('Rando_details',array("id"=>$rando->getId()));
    }


}
