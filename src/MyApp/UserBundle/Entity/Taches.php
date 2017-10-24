<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taches
 *
 * @ORM\Table(name="taches", indexes={@ORM\Index(name="id_localisation", columns={"id_localisation"}), @ORM\Index(name="id_rando", columns={"id_rando"})})
 * @ORM\Entity
 */
class Taches
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
     * @ORM\Column(name="heure_debut", type="datetime", nullable=false)
     */
    private $heureDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_fin", type="datetime", nullable=false)
     */
    private $heureFin;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var \Localisation
     *
     * @ORM\ManyToOne(targetEntity="Localisation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_localisation", referencedColumnName="id")
     * })
     */
    private $idLocalisation;

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
     * Set heureDebut
     *
     * @param \DateTime $heureDebut
     *
     * @return Taches
     */
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    /**
     * Get heureDebut
     *
     * @return \DateTime
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set heureFin
     *
     * @param \DateTime $heureFin
     *
     * @return Taches
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    /**
     * Get heureFin
     *
     * @return \DateTime
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Taches
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
     * Set idLocalisation
     *
     * @param \MyApp\UserBundle\Entity\Localisation $idLocalisation
     *
     * @return Taches
     */
    public function setIdLocalisation(\MyApp\UserBundle\Entity\Localisation $idLocalisation = null)
    {
        $this->idLocalisation = $idLocalisation;

        return $this;
    }

    /**
     * Get idLocalisation
     *
     * @return \MyApp\UserBundle\Entity\Localisation
     */
    public function getIdLocalisation()
    {
        return $this->idLocalisation;
    }

    /**
     * Set idRando
     *
     * @param \MyApp\UserBundle\Entity\Randonnee $idRando
     *
     * @return Taches
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
