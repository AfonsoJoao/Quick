<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CidadeModel
 *
 * @author Mateus
 */
class ModelCidade extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * Traz todas as cidades do estado informado onde 
     * o id do estado tem que ser o mesmo que está setado na variavel $idestado.
     */
    public function getCidadeId_Estado($idestado = null){
        return $this->db->get_where ('cidade', array ('id' => $idestado))
                ->order_by('nomeCidade');
                
    }
    
    /**
     * 
     *Monta um select com as cidades selecionadas do estado 
     */
    
    public function selectCidades($idestado = null){
        $cidades = $this->getCidadeId_Estado($idestado);
        $options = "<option value=''>Selecione a Cidade</option>";
        
        
        foreach ($cidades->result() as $cidade){
            $options.= "<option value='{$cidade->idCidade}'> $cidade->nomeCidade </option>".PHP_EOL;
        }
        return $options;
    }
    
}
