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
                ->add('nomJournal')
                ->add('indxType', 'choice', array(
                'choices' => array(
 		'Article IF' => 'Article IF',
 		'Article ID' => 'Article ID',
 		'Article N ID' => 'Article N ID',
 		
                )
                ))
               ->add('vol')
               ->add('num')
               ->add('pp')
               ->add('brochure', new MediaType())
                
               ->add('users', 'entity', array(
                'class' => 'LGM\UserBundle\Entity\User',
                'property' => 'username',
                'multiple' => true,
                'expanded' => false,
                'required' => false,
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
