<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Randonnee
 *
 * @ORM\Table(name="randonnee", indexes={@ORM\Index(name="id_destination", columns={"id_destination"}), @ORM\Index(name="id_destination_2", columns={"id_destination"}), @ORM\Index(name="id_type_randonnee", columns={"id_type_randonnee"}), @ORM\Index(name="login_organisateur", columns={"login_organisateur"})})
 * @ORM\Entity(repositoryClass="MyApp\UserBundle\Entity\RandonneeRepo")
 */
class Randonnee
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_place_min", type="integer", nullable=false)
     */
    private $nbPlaceMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_place_max", type="integer", nullable=false)
     */
    private $nbPlaceMax;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_rando", type="date", nullable=true)
     */
    private $dateRando;

    /**
     * @var float
     *
     * @ORM\Column(name="nb_kilometres", type="float", precision=10, scale=0, nullable=false)
     */
    private $nbKilometres;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255, nullable=false)
     */
    private $etat;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var \Destination
     *
     * @ORM\ManyToOne(targetEntity="Destination")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_destination", referencedColumnName="id")
     * })
     */
    private $idDestination;

    /**
     * @var \TypeRandonnee
     *
     * @ORM\ManyToOne(targetEntity="TypeRandonnee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_randonnee", referencedColumnName="id")
     * })
     */
    private $idTypeRandonnee;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="login_organisateur", referencedColumnName="id")
     * })
     */
    private $loginOrganisateur;


    /**
     *
     * @ORM\OneToMany(targetEntity="RandonneeImages", mappedBy="idRando")
     */
    private $listImages;


    /**
     *
     * @ORM\OneToMany(targetEntity="Taches", mappedBy="idRando")
     */
    private $listTaches;


    /**
     *
     * @ORM\OneToMany(targetEntity="Commentaire", mappedBy="idRando")
     */
    private $listCommentaire;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Randonnee
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Randonnee
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set nbPlaceMin
     *
     * @param integer $nbPlaceMin
     *
     * @return Randonnee
     */
    public function setNbPlaceMin($nbPlaceMin)
    {
        $this->nbPlaceMin = $nbPlaceMin;

        return $this;
    }

    /**
     * Get nbPlaceMin
     *
     * @return integer
     */
    public function getNbPlaceMin()
    {
        return $this->nbPlaceMin;
    }

    /**
     * Set nbPlaceMax
     *
     * @param integer $nbPlaceMax
     *
     * @return Randonnee
     */
    public function setNbPlaceMax($nbPlaceMax)
    {
        $this->nbPlaceMax = $nbPlaceMax;

        return $this;
    }

    /**
     * Get nbPlaceMax
     *
     * @return integer
     */
    public function getNbPlaceMax()
    {
        return $this->nbPlaceMax;
    }

    /**
     * Set dateRando
     *
     * @param \DateTime $dateRando
     *
     * @return Randonnee
     */
    public function setDateRando($dateRando)
    {
        $this->dateRando = $dateRando;

        return $this;
    }

    /**
     * Get dateRando
     *
     * @return \DateTime
     */
    public function getDateRando()
    {
        return $this->dateRando;
    }

    /**
     * Set nbKilometres
     *
     * @param float $nbKilometres
     *
     * @return Randonnee
     */
    public function setNbKilometres($nbKilometres)
    {
        $this->nbKilometres = $nbKilometres;

        return $this;
    }

    /**
     * Get nbKilometres
     *
     * @return float
     */
    public function getNbKilometres()
    {
        return $this->nbKilometres;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Randonnee
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Randonnee
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set idDestination
     *
     * @param \MyApp\UserBundle\Entity\Destination $idDestination
     *
     * @return Randonnee
     */
    public function setIdDestination(\MyApp\UserBundle\Entity\Destination $idDestination = null)
    {
        $this->idDestination = $idDestination;

        return $this;
    }

    /**
     * Get idDestination
     *
     * @return \MyApp\UserBundle\Entity\Destination
     */
    public function getIdDestination()
    {
        return $this->idDestination;
    }

    /**
     * Set idTypeRandonnee
     *
     * @param \MyApp\UserBundle\Entity\TypeRandonnee $idTypeRandonnee
     *
     * @return Randonnee
     */
    public function setIdTypeRandonnee(\MyApp\UserBundle\Entity\TypeRandonnee $idTypeRandonnee = null)
    {
        $this->idTypeRandonnee = $idTypeRandonnee;

        return $this;
    }

    /**
     * Get idTypeRandonnee
     *
     * @return \MyApp\UserBundle\Entity\TypeRandonnee
     */
    public function getIdTypeRandonnee()
    {
        return $this->idTypeRandonnee;
    }

    /**
     * Set loginOrganisateur
     *
     * @param \MyApp\UserBundle\Entity\User $loginOrganisateur
     *
     * @return Randonnee
     */
    public function setLoginOrganisateur(\MyApp\UserBundle\Entity\User $loginOrganisateur = null)
    {
        $this->loginOrganisateur = $loginOrganisateur;

        return $this;
    }

    /**
     * Get loginOrganisateur
     *
     * @return \MyApp\UserBundle\Entity\User
     */
    public function getLoginOrganisateur()
    {
        return $this->loginOrganisateur;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->listImages = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add listImage
     *
     * @param \MyApp\UserBundle\Entity\RandonneeImages $listImage
     *
     * @return Randonnee
     */
    public function addListImage(\MyApp\UserBundle\Entity\RandonneeImages $listImage)
    {
        $this->listImages[] = $listImage;

        return $this;
    }

    /**
     * Remove listImage
     *
     * @param \MyApp\UserBundle\Entity\RandonneeImages $listImage
     */
    public function removeListImage(\MyApp\UserBundle\Entity\RandonneeImages $listImage)
    {
        $this->listImages->removeElement($listImage);
    }

    /**
     * Get listImages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListImages()
    {
        return $this->listImages;
    }

    /**
     * Add listTach
     *
     * @param \MyApp\UserBundle\Entity\Taches $listTach
     *
     * @return Randonnee
     */
    public function addListTach(\MyApp\UserBundle\Entity\Taches $listTach)
    {
        $this->listTaches[] = $listTach;

        return $this;
    }

    /**
     * Remove listTach
     *
     * @param \MyApp\UserBundle\Entity\Taches $listTach
     */
    public function removeListTach(\MyApp\UserBundle\Entity\Taches $listTach)
    {
        $this->listTaches->removeElement($listTach);
    }

    /**
     * Get listTaches
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListTaches()
    {
        return $this->listTaches;
    }










    /**
     * Add listCoommentaire
     *
     * @param \MyApp\UserBundle\Entity\Commentaire $listCommentaire
     *
     * @return Randonnee
     */
    public function addListCommentaire(\MyApp\UserBundle\Entity\Commentaire $listCommentaire)
    {
        $this->listCommentaire[] = $listCommentaire;

        return $this;
    }

    /**
     * Remove listCommentaire
     *
     * @param \MyApp\UserBundle\Entity\Commentaire $listCommentaire
     */
    public function removeListCommentaire(\MyApp\UserBundle\Entity\Commentaire $listCommentaire)
    {
        $this->listTaches->removeElement($listCommentaire);
    }

    /**
     * Get listCommentaire
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListCommentaire()
    {
        return $this->listCommentaire;
    }



}
