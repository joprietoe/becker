<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Paciente_ProblemasSaudeType
 *
 * @author julio
 */

namespace DailyWorkBundle\Form\ProblemasSaude;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class Paciente_ProblemasSaudeType extends AbstractType{
    
     public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);

        $builder
                ->add('edadeDiagnostico')
                ->add('detalhes_psalud')
                ->add('problemaSaude', new ProblemasSaudeType(),array(
                    'by_reference' => false,
                    'required' => false
                ));
                
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => '\EntityBundle\Entity\Paciente_ProblemasSaude'
        ));
    }

    public function getName() {
        return 'paciente_problemassaudetype';
    }
}
