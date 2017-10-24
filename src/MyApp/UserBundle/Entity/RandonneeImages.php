<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * RandonneeImages
 *
 * @ORM\Table(name="randonnee_images", indexes={@ORM\Index(name="id_rando", columns={"id_rando"})})
 * @ORM\Entity
 * @Vich\Uploadable
 */
class RandonneeImages
{
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="product_image", fileNameProperty="path")
     *
     * @var File
     */
    private $imageFile;


    /**
     * @return File|null
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return RandonneeImages
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;
        if ($image) {
            $this->setPath($image->getBasename());
        }
        return $this;
    }



























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
     * Set path
     *
     * @param string $path
     *
     * @return RandonneeImages
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
     * @param \MyApp\UserBundle\Entity\Randonnee $idRando
     *
     * @return RandonneeImages
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
