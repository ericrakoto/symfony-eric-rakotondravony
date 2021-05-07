<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Auteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;  //ajouté
use Symfony\Component\Form\Extension\Core\Type\FileType; //ajouté
use Symfony\Component\HttpFoundation\File; //ajouté
use Symfony\Component\HttpFoundation\UploadedFile; //ajouté

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Titre')
            ->add('Texte')
            ->add('image', FileType::class, [
                    //
                    'mapped'=> false,
                    //le message
                    'label'=>'insérez une image'
                    ])
            ->add('auteur', EntityType::class, [
            'class' => Auteur::class,
            'choice_label' => 'auteur'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
