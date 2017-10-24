<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 17/05/2017
 * Time: 21:33
 */

namespace MyApp\UserBundle\Controller;

use MyApp\UserBundle\Entity\Reclamation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class ReclamationController extends Controller
{
    /**
     * @Route("/reclam" ,name="Rando_Raclam")
     */
    public function addReclamation2Action(Request $request)
    {
        $reclamation = new Reclamation();
        $reclamation->setEtat(0);
        $reclamation->setLoginUser($this->getUser());
        $em = $this->getDoctrine()->getManager();
        if ($request->isMethod('POST')) {
            $reclamation->setObjet($request->get('objet'));
            $reclamation->setMessage($request->get('message'));
            $em->persist($reclamation);
            $em->flush();
            return $this->redirectToRoute('Rando_list');
        }

        return $this->render('@User/addReclam.html.twig');
    }


}