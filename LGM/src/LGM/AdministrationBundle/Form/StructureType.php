<?php

namespace LGM\AdministrationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class StructureType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('codeStructure', 'number', array(
                'label' => 'Code De La structure',
                'required' => true,
                'attr' => array(
                    'class' => 'form-control'
                ),
                    ))
                
            
                ->add('universite')
                ->add('etablissement')
                ->add('denomination')
                ->add('cinResp')
                ->add('nomResp')
                ->add('prenomResp')
                ->add('website')
                ->add('dateCreation', 'date', [
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy',
                    'attr' => [
                        'class' => 'form-control input-inline datepicker',
                        'data-provide' => 'datepicker',
                        'data-date-format' => 'dd-mm-yyyy'
                    ]
                        ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LGM\AdministrationBundle\Entity\Structure'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'lgm_administrationbundle_structure';
    }


}
