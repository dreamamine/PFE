<?php

namespace LGM\UserBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use LGM\UserBundle\Form\RegistrationFormType as BaseType;
use LGM\Form\AdresseType;
class RegistrationChercheur_JuniorFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
		$builder
                    ->add('qualite')
                    ->add('cINChercheur_Junior')
                    ->add('nomJeuneFille')
                    ->add('dateNaiss', 'date')
                    ->add('lieuNaiss')
                    ->add('sexe')
                    ->add('telMob')
                    ->add('telFixe')
                  
                    ->add('dernierDepObtenu')
                    ->add('dateDepObtenu', 'date')
                    ->add('etabDepObtenu')
                    ->add('intituleSujet')
                    ->add('tauxAvancement')
                    ->add('anneePremierInscrip', 'date')
                    ->add('etbInscrip')
                    ->add('etabInscrip2')
                        

        ;
    }
    public function getName()
    {
        return 'lgm_userbundle_registration';
    }
}