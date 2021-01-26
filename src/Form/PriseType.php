<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Prise;
use App\Entity\Espece;

class PriseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('espece', EntityType::class, [
              'class' => Espece::class,
              'choices' => $options['especeList'],
              'choice_label' => 'nom'
            ])
            ->add('contenu')
            ->add('taille')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Prise::class,
            'especeList' => []
        ]);
    }
}
