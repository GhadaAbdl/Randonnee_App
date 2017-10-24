<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 17/05/2017
 * Time: 20:28
 */

namespace MyApp\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\UserBundle\Entity\Reclamation;

class ReclamationController extends Controller
{

    public function adminReclamAction()
    {
        $em=$this->getDoctrine()->getManager();//em objet de type manager
        $reclamations=$em->getRepository(Reclamation::class)->findAll();//$modeles est un objet
        return $this->render('@Admin/reclamAdmin.html.twig',array("reclamations"=>$reclamations));
    }


    public function traiterRecAction($id) {
        $rec= new Reclamation();
        $em = $this->getDoctrine()->getManager();
        $rec = $em->getRepository(Reclamation::class)->find($id);
        $rec->setEtat(1);
        $em->persist($rec);
        $em->flush();
        return $this->redirect($this->generateUrl('admin_recalam'));
    }


    public function  suppReclamAdminAction($id){
        $em=$this->getDoctrine()->getManager();
        $reclam=$em->getRepository(Reclamation::class)->find($id);
        $em->remove($reclam);
        $em->flush();
        return $this->redirectToRoute('admin_recalam');
    }


}