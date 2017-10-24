<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="id_rando", columns={"id_rando"}), @ORM\Index(name="login_user", columns={"login_user"}), @ORM\Index(name="login_user_2", columns={"login_user"})})
 * @ORM\Entity
 */
class Commentaire
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255, nullable=false)
     */
    private $contenu;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="login_user", referencedColumnName="id")
     * })
     */
    private $loginUser;

    /**
     * @var \Randonnee
     *
     * @ORM\ManyToOne(targetEntity="Randonnee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rando", referencedColumnName="id")
     * })
     */
    private $idRando;



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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Commentaire
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Commentaire
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set loginUser
     *
     * @param \MyApp\UserBundle\Entity\User $loginUser
     *
     * @return Commentaire
     */
    public function setLoginUser(\MyApp\UserBundle\Entity\User $loginUser = null)
    {
        $this->loginUser = $loginUser;

        return $this;
    }

    /**
     * Get loginUser
     *
     * @return \MyApp\UserBundle\Entity\User
     */
    public function getLoginUser()
    {
        return $this->loginUser;
    }

    /**
     * Set idRando
     *
     * @param \MyApp\UserBundle\Entity\Randonnee $idRando
     *
     * @return Commentaire
     */
    public function setIdRando(\MyApp\UserBundle\Entity\Randonnee $idRando = null)
    {
        $this->idRando = $idRando;

        return $this;
    }

    /**
     * Get idRando
     *
     * @return \MyApp\UserBundle\Entity\Randonnee
     */
    public function getIdRando()
    {
        return $this->idRando;
    }
}
