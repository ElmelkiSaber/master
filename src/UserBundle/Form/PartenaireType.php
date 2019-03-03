<?php
// src/AppBundle/Form/RegistrationType.php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Doctrine\ORM\EntityRepository;


class PartenaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('localite_id', EntityType::class, [
            'class' => 'MainBundle:Localite',
            'choice_label' => 'name',
        ])
        ->add('sponsor')
        ->add('birthday', DateType::class, [
            'widget' => 'single_text',
            'format' => 'yyyy-MM-dd',
        ])
        ->add('addresse')
        ->add('ville')
        ->add('region')
        ->add('postal_code')
        ->add('status_social', EntityType::class, [
            'class' => 'MainBundle:StatutSocial',
            'choice_label' => 'name',
        ])
        ->add('futureactivite')
        ->add('pays')
        ->add('assurance', EntityType::class, [
            'class' => 'MainBundle:Assurance',
            'choice_label' => 'name',
        ])
        ->add('prestation')
        ->add('tarif')
        ;
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}
