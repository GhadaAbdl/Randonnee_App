<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 09/04/2017
 * Time: 22:18
 */

namespace MyApp\UserBundle\Entity;


use Doctrine\ORM\EntityRepository;

class RandonneeRepo extends EntityRepository
{
    public function findByFilter($type,$min,$max,$dest){
        $query=$this->getEntityManager()->createQuery("
            select r from UserBundle:Randonnee r join r.idDestination d join r.idTypeRandonnee t where r.prix < :max and r.prix > :min and d.nom like :dest and t.id like :type and r.dateRando > :date
            ");
        $query->setParameter("max",$max);
        $query->setParameter("min",$min);
        $query->setParameter("dest",'%'.$dest.'%');
        if($type=="all"){
            $type="";
        }
        $query->setParameter("type",'%'.$type.'%');
        $query->setParameter("date",new \DateTime());
        return $query->getResult();
    }

    public function findValidAll(){
        $query=$this->getEntityManager()->createQuery("
            select r from UserBundle:Randonnee r where r.dateRando > :date
            ");
        $query->setParameter("date",new \DateTime());
        return $query->getResult();
    }

}