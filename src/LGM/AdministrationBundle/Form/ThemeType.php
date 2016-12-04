<?php

namespace LGM\AdministrationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ThemeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('sujet')
                
                ->add('projet', 'entity', array('label' => 'nom Du Projet',
                                          'class' => 'LGM\AdministrationBundle\Entity\Projet',
                                          'property' => 'nom'
            
          
        ));
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LGM\AdministrationBundle\Entity\Theme'
        ));
    }
}
