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

    //private $responsavels = null;

  //  public function __construct(Responsavel $resp = null) {
   //     $this->responsavels = $resp;
 //   }

    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);

        $builder
        ->add('nome', 'text', array('max_length' => 100, 'label' => 'Nome'))
        ->add('data_nascimento', 'text', array('required' => false))
        ->add('tipoSanguineo', 'entity', array('class' => 'EntityBundle:TipoSanguineo',
        'multiple' => false,
        'required' => false))
        ->add('problemas_gravidez', 'textarea', array('required' => false))
        ->add('leite_artificial', 'checkbox', array('required' => false))
        ->add('depressao_puerperal', 'textarea', array('required' => false))
        ->add('problemas_posparto', 'textarea', array('required' => false))
        ->add('leite_materno_exclusivo', 'checkbox', array('required' => false))
        ->add('leite_materno_idade', 'number', array('required' => false))
        //->add('ntipoparto')
        //->add('ntiposanguineo')
        ->add('endereco', new Endereco\EnderecoType(), array(
        'label' => 'CEP',
        'by_reference' => false,
        'required' => false
        ))
        //->add('endereco', 'collection', array('type' => new Endereco\EnderecoType()))
        /* ->add('responsavel', new Responsavel_F\ResponsavelType(), array(
          //'label'          => 'Direcciones',
          'by_reference'   => false,
          'required'=> false
          ))
          /*->add('responsavel', new Responsavel_F\ResponsavelType(), array(
          //'label'          => 'Direcciones',
          'by_reference'   => false,
          'required'=> false
          )) */
        /* ->add('responsavels', 'collection', array(
          'type'           => new Responsavel_F\ResponsavelType(),
          //'label'          => 'Responsavels',
          'by_reference'   => false,
          'data'           => $this->responsavels,
          'mapped'         => false,
          'required'       => false
          //'prototype_data' => new \EntityBundle\Entity\Responsavel()
          //'allow_delete'   => true,
          //'allow_add'      => true,
          //'attr'           => array(
          //   'class' => 'row addresses'
          //)
          )) */
        ->add('responsavels', 'collection', array(
            'type'  => new Responsavel_F\ResponsavelType(),
            'label' => false,
            'required' => false
            //'mapped' => false
            
           // 'data' => $this->responsavels
        ))
        /* ->add('ordenresponsavels', ''new Responsavel_F\ResponsavelType(), array(
          //'label'          => 'Direcciones',
          'by_reference'   => false,
          'required'=> false
          )) */
        /* ->add('tipoParto', new TipoParto\TipoPartoType(), array(
          'label'          => 'Tipo de parto',
          'by_reference'   => false,
          'required'=> false
          )) */
        ->add('tipoParto', 'entity', array('class' => 'EntityBundle:TipoParto', 'by_reference' => false,
                    'multiple' => false,
                    'required' => false
                ))
        
        ->add('paciente_problemasSaude', 'collection', array(
            'type'  => new ProblemasSaude\Paciente_ProblemasSaudeType(),
            'label' => false,
            'required' => false
            //'mapped' => false

           // 'data' => $this->responsavels
        ))
        /*->add('problemasSaude', 'entity', array('class' => 'EntityBundle:ProblemasSaude',
                    'multiple' => true,
                    'required' => false))*/
        ->add('nCuidados', 'entity', array('class' => 'EntityBundle:Cuidados',
                    'multiple' => true,
                    'required' => false));
        //        new Responsavel\ResponsavelType(), array('label' => ' '));*/
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => '\EntityBundle\Entity\Paciente'
        ));
    }

    public function getName() {
        return '';
    }

}
