<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as base_user;
/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_8D93D64992FC23A8", columns={"username_canonical"}), @ORM\UniqueConstraint(name="UNIQ_8D93D649A0D96FBF", columns={"email_canonical"}), @ORM\UniqueConstraint(name="login", columns={"login"}), @ORM\UniqueConstraint(name="UNIQ_8D93D649C05FB297", columns={"confirmation_token"})}, indexes={@ORM\Index(name="id_dest_guide", columns={"id_dest_guide"})})
 * @ORM\Entity
 */
class User extends base_user
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255, nullable=true)
     */
    protected $login;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    protected $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naiss", type="date", nullable=true)
     */
    protected $dateNaiss;

    /**
     * @var string
     *
     * @ORM\Column(name="numTel", type="string", length=255, nullable=true)
     */
    protected $numtel;


    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=true)
     */
    protected $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="img_link", type="string", length=255, nullable=true)
     */
    protected $imgLink;

    /**
     * @var float
     *
     * @ORM\Column(name="soldeCompte", type="float", precision=10, scale=0, nullable=true)
     */
    protected $soldecompte;

    /**
     * @var integer
     *
     * @ORM\Column(name="guideDispo", type="integer", nullable=true)
     */
    protected $guidedispo;

    /**
     * @var integer
     *
     * @ORM\Column(name="mail", type="integer", nullable=true)
     */
    protected $mail;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_dest_guide", type="integer", nullable=true)
     */
    protected $idDestGuide;

    /**
     * Set login
     *
     * @param string $login
     *
     * @return User
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set dateNaiss
     *
     * @param \DateTime $dateNaiss
     *
     * @return User
     */
    public function setDateNaiss($dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    /**
     * Get dateNaiss
     *
     * @return \DateTime
     */
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * Set numtel
     *
     * @param string $numtel
     *
     * @return User
     */
    public function setNumtel($numtel)
    {
        $this->numtel = $numtel;

        return $this;
    }

    /**
     * Get numtel
     *
     * @return string
     */
    public function getNumtel()
    {
        return $this->numtel;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     *
     * @return User
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return integer
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set imgLink
     *
     * @param string $imgLink
     *
     * @return User
     */
    public function setImgLink($imgLink)
    {
        $this->imgLink = $imgLink;

        return $this;
    }

    /**
     * Get imgLink
     *
     * @return string
     */
    public function getImgLink()
    {
        return $this->imgLink;
    }

    /**
     * Set soldecompte
     *
     * @param float $soldecompte
     *
     * @return User
     */
    public function setSoldecompte($soldecompte)
    {
        $this->soldecompte = $soldecompte;

        return $this;
    }

    /**
     * Get soldecompte
     *
     * @return float
     */
    public function getSoldecompte()
    {
        return $this->soldecompte;
    }

    /**
     * Set guidedispo
     *
     * @param integer $guidedispo
     *
     * @return User
     */
    public function setGuidedispo($guidedispo)
    {
        $this->guidedispo = $guidedispo;

        return $this;
    }

    /**
     * Get guidedispo
     *
     * @return integer
     */
    public function getGuidedispo()
    {
        return $this->guidedispo;
    }

    /**
     * Set mail
     *
     * @param integer $mail
     *
     * @return User
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return integer
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set idDestGuide
     *
     * @param integer $idDestGuide
     *
     * @return User
     */
    public function setIdDestGuide($idDestGuide)
    {
        $this->idDestGuide = $idDestGuide;

        return $this;
    }

    /**
     * Get idDestGuide
     *
     * @return integer
     */
    public function getIdDestGuide()
    {
        return $this->idDestGuide;
    }
}
