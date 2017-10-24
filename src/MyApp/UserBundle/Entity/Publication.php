<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publication
 *
 * @ORM\Table(name="publication", indexes={@ORM\Index(name="login_user", columns={"login_user"}), @ORM\Index(name="id_rando", columns={"id_rando"})})
 * @ORM\Entity
 */
class Publication
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
     * @ORM\Column(name="path", type="string", length=255, nullable=false)
     */
    private $path;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_rando", type="integer", nullable=false)
     */
    private $idRando;

    /**
     * @var string
     *
     * @ORM\Column(name="type_pub", type="string", length=255, nullable=false)
     */
    private $typePub;

    /**
     * @var string
     *
     * @ORM\Column(name="login_user", type="string", length=255, nullable=false)
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
     * Set path
     *
     * @param string $path
     *
     * @return Publication
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set idRando
     *
     * @param integer $idRando
     *
     * @return Publication
     */
    public function setIdRando($idRando)
    {
        $this->idRando = $idRando;

        return $this;
    }

    /**
     * Get idRando
     *
     * @return integer
     */
    public function getIdRando()
    {
        return $this->idRando;
    }

    /**
     * Set typePub
     *
     * @param string $typePub
     *
     * @return Publication
     */
    public function setTypePub($typePub)
    {
        $this->typePub = $typePub;

        return $this;
    }

    /**
     * Get typePub
     *
     * @return string
     */
    public function getTypePub()
    {
        return $this->typePub;
    }

    /**
     * Set loginUser
     *
     * @param string $loginUser
     *
     * @return Publication
     */
    public function setLoginUser($loginUser)
    {
        $this->loginUser = $loginUser;

        return $this;
    }

    /**
     * Get loginUser
     *
     * @return string
     */
    public function getLoginUser()
    {
        return $this->loginUser;
    }
}
