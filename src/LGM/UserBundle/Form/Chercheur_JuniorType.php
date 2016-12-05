<?php

namespace LGM\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Chercheur_JuniorType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('qualite')
                ->add('cINChercheur_Junior')
                ->add('nomJeuneFille')
                ->add('dateNaiss')
                ->add('lieuNaiss')
                ->add('sexe')
                ->add('telMob')
                ->add('telFixe')
                ->add('dernierDepObtenu')
                ->add('dateDepObtenu')
                ->add('etabDepObtenu')
                ->add('intituleSujet')
                ->add('tauxAvancement')
                ->add('encadrant')
                ->add('coencadrant')
                ->add('anneePremierInscrip')
                ->add('etbInscrip')
                ->add('etabInscrip2')
                      ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LGM\UserBundle\Entity\Chercheur_Junior'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'lgm_userbundle_chercheur_junior';
    }


}
