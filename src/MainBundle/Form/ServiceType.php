<?php

namespace MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;



class ServiceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name');
            $builder ->add('type' ,ChoiceType::class, array(
            'choices'  => array(
                'choisir un service' => null,
                'service pro' => 1,
                'service particulier' => 2,
            )));
   if(is_null($options['data']->getId())  ){
    $builder->add('parentId',  EntityType::class, array(
            'class' => 'MainBundle:Service',        
            'choice_label' => 'name',
            'placeholder' => 'selectionner une categorie parent',
        ));
    } else {
    $builder->add('parentId', EntityType::class, array(
        'class' => 'MainBundle:Service',
        'query_builder' => function (EntityRepository $er, $options)  {
            return $er->createQueryBuilder('s') 
                ->orderBy('s.name', 'ASC')
                ->where('s.id !=', $options['data']->getId());
        },
        'choice_label' => 'name',
        'placeholder' => 'selectionner une categorie parent',
    ));
  }}

     /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MainBundle\Entity\Service'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'mainbundle_service';
    }


}
