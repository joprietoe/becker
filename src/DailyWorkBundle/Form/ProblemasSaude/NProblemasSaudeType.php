<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NProblemasSaudeType
 *
 * @author julio
 */

namespace DailyWorkBundle\Form\ProblemasSaude;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NProblemasSaudeType extends AbstractType{
    
    
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);

        $builder->add('form-field-select-4', 'entity', array('class'=> 'EntityBundle:NProblemasSaude', 'multiple' => true));      
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => null,
//            'attr' => ['id' => 'form-field-select-3', 'class' => 'chosen-select']
        ));
    }

    public function getName() {
        return '';
    }
    
    
    
    
    
    
}
