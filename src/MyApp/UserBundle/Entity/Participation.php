<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participation
 *
 * @ORM\Table(name="participation", indexes={@ORM\Index(name="login_user", columns={"login_user"}), @ORM\Index(name="id_rando", columns={"id_rando"})})
 * @ORM\Entity
 */
class Participation
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
     * @ORM\Column(name="date_part", type="date", nullable=false)
     */
    private $datePart;

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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="login_user", referencedColumnName="id")
     * })
     */
    private $loginUser;



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
     * Set datePart
     *
     * @param \DateTime $datePart
     *
     * @return Participation
     */
    public function setDatePart($datePart)
    {
        $this->datePart = $datePart;

        return $this;
    }

    /**
     * Get datePart
     *
     * @return \DateTime
     */
    public function getDatePart()
    {
        return $this->datePart;
    }

    /**
     * Set idRando
     *
     * @param \MyApp\UserBundle\Entity\Randonnee $idRando
     *
     * @return Participation
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

    /**
     * Set loginUser
     *
     * @param \MyApp\UserBundle\Entity\User $loginUser
     *
     * @return Participation
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
}
