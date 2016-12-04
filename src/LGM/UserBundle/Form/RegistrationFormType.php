<?php

namespace LGM\UserBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use LGM\AdministrationBundle\Form\MediaType;

use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
                ->add('nom')
                ->add('prenom')
                
                ->add('image', new MediaType())  
		
    ;
    }

    public function getName()
    {
        return 'lgm_userbundle_registration';
    }
}