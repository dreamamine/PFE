<?php

namespace LGM\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Cadre_EquivalantType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('qualite')
            ->add('cINDoctorant')
            ->add('nom')
            ->add('prenom')
            ->add('nomJeuneFille')
            ->add('dateNaiss', 'date')
            ->add('lieuNaiss')
            ->add('sexe')
            ->add('telMob')
            ->add('telFixe')
            ->add('eMail')
            ->add('dernierDepObtenu')
            ->add('dateDepObtenu', 'date')
            ->add('etabDepObtenu')
            ->add('intituleSujet','entity', array('label' => 'nom  Sujet',
                                          'class' => 'LGM\UserBundle\Entity\Sujet',
                                          'property' => 'title'))
            ->add('tauxAvancement')
            ->add('anneePremierInscrip', 'date')
            ->add('etbInscrip')
          
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LGM\UserBundle\Entity\Cadre_Equivalant'
        ));
    }
}
