<?php

namespace App\Form;

use App\Entity\Session;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class SessionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
                'date_debut',
                DateType::class,
                [
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd',
                    'attr' => [
                        'class' => 'js-datepicker',
                        'data-provide' => 'datepicker',
                        'data-date-format' => 'yyyy-mm-dd',
                        'data-date-language' => 'fr',
                        'data-date-autoclose' => 'true',
                    ],
                ]
            )
            ->add(
                'date_fin',
                DateType::class,
                [
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd',
                    'attr' => [
                        'class' => 'js-datepicker',
                        'data-provide' => 'datepicker',
                        'data-date-format' => 'yyyy-mm-dd',
                        'data-date-language' => 'fr',
                        'data-date-autoclose' => 'true',
                    ],
                ]
            )
            ->add('nom')
            ->add('promotion')
            ->add('formateurs')
            ->add('salle');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Session::class,
        ]);
    }
}
