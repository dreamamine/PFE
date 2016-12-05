<?php

namespace LGM\UserBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use LGM\UserBundle\Form\RegistrationFormType as BaseType;




class RegistrationChercheur_JuniorFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
		$builder
                    ->add('qualite','choice', array(
                'choices' => array(
 		'Cadre Equivalant' => 'Cadre Equivalant',
 		'Doctorant' => 'Doctorant',
 		'Eleve Mastere' => 'Eleve Mastere',
 		
                )
                ))
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
                    ->add('intituleSujet','entity', array('label' => 'nom De Sujet',
                                          'class' => 'LGM\UserBundle\Entity\Sujet',
                                          'property' => 'title'))
                    ->add('encadrant','entity', array('label' => 'Directeur',
                                          'required' => true,
                                          'expanded' => false,
                                          'multiple' => false,
                                          'class' => 'LGM\UserBundle\Entity\Enseignant_Chercheur',
                                          'property' => function($user) {
                                                        return  $user->getPrenom().' '. $user->getNom();
                                                       }
                                                 ))
                                                                                                                        
                    ->add('coencadrant','entity', array('label' => 'CO-Directeur',
                                          'class' => 'LGM\UserBundle\Entity\Enseignant_Chercheur',
                                          'property' => 'nom',
                                          'multiple' => false,
                                          'expanded' => false,
                                          'required' => true,))
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