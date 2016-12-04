<?php

namespace LGM\UserBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use LGM\UserBundle\Form\RegistrationFormType as BaseType;
use LGM\Form\AdresseType;
class RegistrationEnseignant_ChercheurFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
		$builder
                    ->add('grade')
                    ->add('cINEnseigCh')
                    ->add('nomJeuneFille')
                    ->add('dateNaiss', 'date')
                    ->add('lieuNaiss')
                    ->add('sexe')
                    ->add('etablisement')
                    ->add('fonction')
                    ->add('telMob')
                    ->add('telFixe')
                    
                    ->add('dernierDepObtenu')
                    ->add('dateDepObtenu', 'date')
                    ->add('etabDepObtenu')
                         

        ;
    }
    public function getName()
    {
        return 'lgm_userbundle_registration';
    }
}