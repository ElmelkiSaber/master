<?php
// src/AppBundle/Form/RegistrationType.php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Doctrine\ORM\EntityRepository;


class PrestataireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('denomination')
        ->add('agreation')
        ->add('secteuractivite')
        ->add('fonction')
        ->add('telephone')
        ->add('categorieprestatire')
        ->add('categoriesponsorise')
        ->add('categorieusage')
        ->add('addresse')
        ->add('ville')
        ->add('postalcode')
        ->add('pays')
        ->add('daterdv1')
        -add('daterdv2')
        -add('payslegalisation')
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
