<?php

namespace App\Form;

use App\Entity\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'required' => true,
                'label' => 'Name: ',
                'row_attr' => ['class' => 'field'],
            ])
            ->add('email', EmailType::class, [
                'required' => true,
                'label' => 'Email: ',
                'row_attr' => ['class' => 'field'],
            ])
            ->add('title', TextType::class, [
                'required' => true,
                'label' => 'Title: ',
                'row_attr' => ['class' => 'field'],
            ])
            ->add('text', TextareaType::class, [
                'required' => true,
                'label' => 'Text: ',
                'row_attr' => ['class' => 'field'],
            ])
            ->add('save', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Form::class
        ]);
    }
}
