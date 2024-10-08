<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Rubrique;
use Doctrine\ORM\QueryBuilder;
use App\Repository\RubriqueRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'constraints' => new Length([
                                        'min' => 3, 
                                        'max' => 10,
                                        "minMessage" => "Trop court !!!",
                                        "maxMessage" => "Trop Long !!!"]
                ),
                "help" => "Entrez quelque chose"
            ])
            ->add('image')
            ->add('description', TextType::class, [
            ])
            ->add('prix', MoneyType::class)
            ->add('rubrique', EntityType::class, [
                'class' => Rubrique::class,
                'choice_label' => 'nom',
                // 'expanded' => true,
                'query_builder' => function (RubriqueRepository $er): QueryBuilder {
                    return $er->createQueryBuilder('c')
                        ->where("c.parent is not null")
                        ->orderBy('c.nom', 'ASC');
                },
            ])
            ->add('Enregistrer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
            'attr' => [
                // 'novalidate' => 'novalidate', // comment me to reactivate the html5 validation!  🚥
            ]
        ]);
    }
}