<?php

namespace LGM\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Enseignant_ChercheurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('grade')
            ->add('cINEnseigCh')
            ->add('nom')
            ->add('prenom')
            ->add('nomJeuneFille')
            ->add('dateNaiss', 'date')
            ->add('lieuNaiss')
            ->add('sexe','choice', array('choices' => array('F'=>'Féminin','M'=>'Masculin')))
            ->add('etablisement')
            ->add('fonction')
            ->add('telMob')
            ->add('telFixe')
            ->add('eMail')
            ->add('dernierDepObtenu')
            ->add('dateDepObtenu', 'date')
            ->add('etabDepObtenu')
                
          
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LGM\UserBundle\Entity\Enseignant_Chercheur'
        ));
    }
}
