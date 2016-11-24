<?php

namespace LGM\AdministrationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjetType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('nomChef')
            ->add('sujet')
            ->add('dateFinProjet','date', [
    'widget' => 'single_text',
    'format' => 'dd-MM-yyyy',
    'attr' => [
        'class' => 'form-control input-inline datepicker',
        'data-provide' => 'datepicker',
        'data-date-format' => 'dd-mm-yyyy'
    ]
]
                )                
             ->add('equipe', 'entity', array('label' => 'nom De Equipe',
                                          'class' => 'LGM\AdministrationBundle\Entity\Equipe',
                                          'property' => 'nom'
            
          
        ));
            
          
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LGM\AdministrationBundle\Entity\Projet'
        ));
    }
}
