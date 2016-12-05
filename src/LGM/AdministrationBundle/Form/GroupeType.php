<?php

namespace LGM\AdministrationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GroupeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
         
              
            ->add('theme', 'entity', array('label' => 'nom De la theme',
                                          'class' => 'LGM\AdministrationBundle\Entity\Theme',
                                          'property' => 'nom'
          
        ))
            ->add('users', 'entity', array('label' => 'Membres',
                                          'required' => true,
                                          'expanded' => false,
                                          'multiple' => true,
                                          'class' => 'LGM\UserBundle\Entity\User',
                                          'property' => function($user) {
                                                        return  $user->getPrenom().' '. $user->getNom();
                                                       }
                                                 ))

                
                ;
    }
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LGM\AdministrationBundle\Entity\Groupe'
        ));
    }
}
