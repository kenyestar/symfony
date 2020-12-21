<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PollType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('masquerade', ChoiceType::class, [
                'choices' => [
                    'За' => 'За',
                    'Против' => 'Против',
                ],
                'label' => 'Маскарад: ',
                'required' => true,
                'row_attr' => ['class' => 'poll-items'],
                'expanded' => true
            ])
            ->add('event', ChoiceType::class, [
                'choices' => [
                    'За' => 'За',
                    'Против' => 'Против',
                ],
                'label' => 'Нужен ли ведущий мероприятия?: ',
                'required' => true,
                'row_attr' => ['class' => 'poll-items'],
                'expanded' => true
            ])
            ->add('competition', ChoiceType::class, [
                'choices' => [
                    'За' =>  'За',
                    'Против' =>  'Против',
                ],
                'label' => 'Нужны ли конкурсы?: ',
                'required' => true,
                'row_attr' => ['class' => 'poll-items'],
                'expanded' => true
            ])
            ->add('title', TextType::class, [
                'required' => true,
                'label' => 'Перечислите, на что алергия?: ',
                'row_attr' => ['class' => 'poll-items'],
            ])
            ->add('competition', ChoiceType::class, [
                'choices' => [
                    'Водка' => 'vodka',
                    'Бренди' => 'brendy',
                    'Виски' => 'visky',
                    'Мартини' => 'martini',
                ],
                'label' => 'Какой из алкогольных напитков не может отсутствовать?: ',
                'required' => true,
                'row_attr' => ['class' => 'poll-items'],
                'expanded' => true
            ])
            ->add('email', EmailType::class, [
                'required' => true,
                'label' => 'E-mail для отправки пригласительного ',
                'row_attr' => ['class' => 'poll-items'],
            ])
            ->add('offer', TextareaType::class, [
                'required' => true,
                'label' => 'Ваши предложения:',
                'row_attr' => ['class' => 'poll-items'],
                'attr' => ['rows' => 15, 'cols' => 100],
            ])
            ->add('save', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
        ]);
    }
}

