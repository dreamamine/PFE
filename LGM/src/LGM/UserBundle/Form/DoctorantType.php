<?php

namespace LGM\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DoctorantType extends AbstractType
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
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LGM\UserBundle\Entity\Doctorant'
        ));
    }
}
