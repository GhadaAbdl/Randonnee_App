<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluation
 *
 * @ORM\Table(name="evaluation", indexes={@ORM\Index(name="id_rando", columns={"id_rando"}), @ORM\Index(name="login_user", columns={"login_user"})})
 * @ORM\Entity
 */
class Evaluation
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
     * @var integer
     *
     * @ORM\Column(name="note_rando", type="integer", nullable=false)
     */
    private $noteRando;

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
     * Set noteRando
     *
     * @param integer $noteRando
     *
     * @return Evaluation
     */
    public function setNoteRando($noteRando)
    {
        $this->noteRando = $noteRando;

        return $this;
    }

    /**
     * Get noteRando
     *
     * @return integer
     */
    public function getNoteRando()
    {
        return $this->noteRando;
    }

    /**
     * Set idRando
     *
     * @param \MyApp\UserBundle\Entity\Randonnee $idRando
     *
     * @return Evaluation
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
     * @return Evaluation
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
