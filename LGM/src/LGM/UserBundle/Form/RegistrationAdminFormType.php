<?php

namespace LGM\UserBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use LGM\UserBundle\Form\RegistrationFormType as BaseType;
use LGM\Form\AdresseType;
class RegistrationAdminFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

		
    ;
    }

    public function getName()
    {
        return 'lgm_userbundle_registration';
    }
}