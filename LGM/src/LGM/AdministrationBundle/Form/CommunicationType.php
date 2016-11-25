<?php

namespace LGM\AdministrationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommunicationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
   public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('titre')
        ->add('anneePublication','date', [
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'attr' => [
                'class' => 'form-control input-inline datepicker',
                'data-provide' => 'datepicker',
                'data-date-format' => 'dd-mm-yyyy']]
                )
            ->add('nbAuteur')
            ->add('valeur')
            ->add('nomCongrer')
            ->add('indx')
            ->add('vol')
            ->add('num')
            ->add('pp')
            ->add('brochure', new MediaType())        
            ->add('users', 'entity', array(
                'class' => 'LGM\UserBundle\Entity\User',
                'property' => 'username',
                'multiple' => true,
                'expanded' => false,
    ))            
                ;
    }
   
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LGM\AdministrationBundle\Entity\Communication'
        ));
    }
}
