<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ReportsBundle\Classes;

use ReportsBundle\Classes\Filter;

/**
 * Description of TBFilter
 *
 * @author alain
 */
class TBFilter extends Filter{
    
    protected $id;
    protected $name;
    function __construct($session) {
        $this->session = $session;
        if($this->session->has('id_tb') && trim($this->session->get('id_tb')) != ''){
            $this->id = $this->session->get('id_tb');
        }
        else{
            $this->id = null;
        }
        if($this->session->has('name_tb') && trim($this->session->get('name_tb')) != ''){
            $this->name = $this->session->get('name_tb');
        }
        else{
            $this->name = null;
        }
    }
    public function getIdTB(){
        return $this->id;
    }
    
    public function setIdTB($id){
        if($id == null){
            $this->session->remove('id_tb');
            $this->id = null;
        }
        else{
            $this->id = $id;
            $this->session->set('id_tb', $id);
        }
    }
    public function setName($filter_name){
        if($filter_name == null){
            $this->session->remove('name_tb');
            $this->name = null;
        }
        else{
            $this->name = $filter_name;
            $this->session->set('name_tb', $filter_name);
        }
    }
    # Para uso de quitar filtro
    public function genActiveFilter(){
        if($this->id != null){
            
            return array (
                array ('name' => $this->name,'id' => 'filtBlood','onclick' => 'bloodDelete')
            );
        }
         
        return Array();
    }
    public function hasMatch(){
        if($this->name != null && trim($this->name)!=''){
            return true;
        }
        return false;
    } 
    public function fromDQL($obj){
        return "";
        # JOIN ...
    }
    public function whereDQL($obj){
        return $obj.'.'.'tipoSanguineo = :id ';
    }
    public function setFilter($query){                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
        if($this->name != null){
            $query->setParameter('id', $this->id);
        }
        return $query;
    }
    public function filtercount(){
        if(hasMatch()){
            return 1;
        }
        return 0;
    }
    public function getOnclik(){
        return 'bloodDelete';
    }
    public function filterValues($doctrine){
        //$repositoryP = $doctrine->getManager()->getRepository('EntityBundle:Paciente');
        
        $repositoryTB = $doctrine->getManager()->getRepository('EntityBundle:TipoSanguineo');
        
        $tblood = $repositoryTB->findAll();
        $res = Array();
        foreach ($tblood as $tb){
            $elem = Array('id' => $tb->getIdTipoSanguineo(), 'text' => $tb->getNome());
            array_push($res, $elem);
        }
        
        return $res;
    }
}
