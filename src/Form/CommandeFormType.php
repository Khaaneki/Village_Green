<?php

namespace App\Form;

use App\Entity\Commande;
use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date_commande', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de la commande',
                'required' => true,
                'disabled' => true,
            ])
            ->add('moyen_paiement', ChoiceType::class, [
                'choices' => [
                    'Carte Bancaire' => 'Carte Bancaire',
                ],
                'label' => 'Moyen de paiement',
            ])
            ->add('adresse_facturation', TextType::class, [
                'label' => 'Adresse de facturation',
                'required' => true,
            ])
            ->add('ville_facturation', TextType::class, [
                'label' => 'Ville de facturation',
                'required' => true,
            ])
            ->add('telephone_facturation', TelType::class, [
                'label' => 'Téléphone',
                'required' => true,
            ])
            ->add('mail_facturation', EmailType::class, [
                'label' => 'Email de facturation',
                'required' => true,
            ])
            ->add('adresse_livraison', TextType::class, [
                'label' => 'Adresse de livraison',
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}
