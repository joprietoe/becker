<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PacienteType
 *
 * @author julio
 */
namespace DailyWorkBundle\Form\Paciente;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use \DailyWorkBundle\Form\Endereco;
use \DailyWorkBundle\Form\Responsavel_F;
use EntityBundle\Entity\Responsavel;
use \DailyWorkBundle\Form\ProblemasSaude;
use \DailyWorkBundle\Form\Cuidado;
use EntityBundle\Entity\NProblemasSaude;
use \DailyWorkBundle\Form\TipoParto;
use EntityBundle\Entity\NTipoParto;

class PacienteType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);

        $builder
                ->add('nome', 'text', array('max_length' => 100, 'label'=>'Nome'))
                ->add('data_nascimento', 'text')
                ->add('factor_rh')
                ->add('problemas_gravidez', 'textarea')
                ->add('leite_artificial', 'checkbox')
                ->add('depressao_puerperal', 'textarea')
                ->add('problemas_posparto', 'textarea')
                ->add('leite_materno_exclusivo', 'checkbox')
                ->add('leite_materno_idade')
                //->add('ntipoparto')
                //->add('ntiposanguineo')
                ->add('endereco', new Endereco\EnderecoType(), array(
                'label'          => 'CEP',
                'by_reference'   => false
                 ))
                //->add('endereco', 'collection', array('type' => new Endereco\EnderecoType()))
                ->add('responsavel', new Responsavel_F\ResponsavelType(), array(
                 //'label'          => 'Direcciones',
                'by_reference'   => false
                ))
                ->add('responsavel', new Responsavel_F\ResponsavelType(), array(
                 //'label'          => 'Direcciones',
                'by_reference'   => false
                ))
                
                ->add('nTipoParto', new TipoParto\TipoPartoType(), array(
                'label'          => 'Tipo de parto',
                'by_reference'   => false
                 ))
                
                ->add('nProblemasSaude', 'entity', array('class'=> 'EntityBundle:NProblemasSaude', 'multiple' => true))
                ->add('nCuidados',  'entity', array('class' => 'EntityBundle:NCuidados', 'multiple' => true)); 
                //        new Responsavel\ResponsavelType(), array('label' => ' '));
               
    }

//    public function setDefaultOptions(OptionsResolverInterface $resolver) {
//        $resolver->setDefaults(array(
//            'data_class' => '\EntityBundle\Entity\Paciente'
//        ));
//    }

    public function getName() {
        return '';
    }

}
