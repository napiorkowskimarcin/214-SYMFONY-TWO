<?php

namespace App\Form;

use App\Entity\Budget;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
//use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class PostBudgetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('healthyFood')
            ->add('unhealthyFood')
            ->add('farmacy')
            ->add('household')
            ->add('clothing',null, [
                'attr' => [
                    'class'=> 'mb-3'
                ]
            ])
            // ->add('createdate', DateTimeType::class, [
            //     'data' => new \DateTime()
            // ])
            ->add('save', SubmitType::class, [
                'attr' => [
                    'class'=> 'btn btn-primary float-end'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Budget::class,
        ]);
    }
}