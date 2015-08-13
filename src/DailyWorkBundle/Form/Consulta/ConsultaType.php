<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConsultaType
 *
 * @author julio
 */

namespace DailyWorkBundle\Form\Consulta;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConsultaType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);

        $builder->add('data','text', array('label' => 'Data da consulta'));
        $builder->add('observacao','textarea', array('label' => 'Observações'));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => '\EntityBundle\Entity\Consulta'
        ));
    }

    public function getName() {
        return 'consultatype';
    }
}
