<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\CategorySearch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CategorySearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('categorie',EntityType::class,['class' => Categorie::class,
                'choice_label' => 'titre' ,
                'label' => 'Catégorie' ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CategorySearch::class,
        ]);
    }
}
