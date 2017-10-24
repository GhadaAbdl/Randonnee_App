<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Destination
 *
 * @ORM\Table(name="destination", indexes={@ORM\Index(name="id_localisation", columns={"id_localisation"}), @ORM\Index(name="id_localisation_2", columns={"id_localisation"})})
 * @ORM\Entity
 */
class Destination
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Destination
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
     * Set idLocalisation
     *
     * @param \MyApp\UserBundle\Entity\Localisation $idLocalisation
     *
     * @return Destination
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
}
