<?php

namespace MyApp\UserBundle\Forms;

use MyApp\UserBundle\Entity\RandonneeImages;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class Upload extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add($builder->create(
            'imagesJointes', FileType::class, [
                "required" => false,
                'multiple' => true,
                "attr" => array(

                    "multiple data-show-upload"=>"false",
                    "data-show-caption"=>"false",
                    "data-show-remove"=>"false",


                    "class" => "form-control file"),
                "label" => "Images à joindre"
            ]
        )->addModelTransformer(new ImagesTransformer()))
        ->add("submit",SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => null
        ));
    }

    public function getBlockPrefix()
    {
        return 'user_bundle_upload';
    }
}

class ImagesTransformer implements DataTransformerInterface
{
    public function transform($value)
    {
        // TODO: Implement transform() method.
    }
    public function reverseTransform($images)
    {
        $images_joint = [];
        foreach ($images as $image) {
            $img = new RandonneeImages();
            $img->setImageFile($image);
            $images_joint[] = $img;
        }
        return $images_joint;
    }
}
