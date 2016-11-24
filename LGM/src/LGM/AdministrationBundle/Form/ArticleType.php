<?php

namespace LGM\AdministrationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('titre')
                ->add('anneePublication')
                ->add('nbAuteur')
                ->add('valeur')
                ->add('nomJournal')
                ->add('indx')
               ->add('vol')
               ->add('num')
               ->add('pp')
               ->add('brochure', new MediaType())
                
               ->add('user', 'entity', array(
                'class' => 'LGM\UserBundle\Entity\User',
                'property' => 'username',
                'multiple' => true,
                'expanded' => false,
))
                
                ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LGM\AdministrationBundle\Entity\Article'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'lgm_administrationbundle_article';
    }


}
