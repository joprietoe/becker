<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ResponsavelType
 *
 * @author julio
 */

namespace DailyWorkBundle\Form\Responsavel_F;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ResponsavelType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);

        $builder
                ->add('nome', 'text')
                ->add('ocupacao')
                ->add('telefContato', 'text',  array('label' => 'Telef de Contato'))
                ->add('email', 'email')
                ->add('nome1', 'text')
                ->add('ocupacao1')
                ->add('telefContato1', 'text',  array('label' => 'Telef de Contato'))
                ->add('email1', 'email');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => null
        ));
    }

    public function getName() {
        return 'becker_entitybundle_responsaveltype';
    }
    

}
