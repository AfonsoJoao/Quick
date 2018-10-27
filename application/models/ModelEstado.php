<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelEstado
 *
 * @author Mateus
 */
class ModelEstado extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /**
     * Traz todos os estados cadastrados no banco de dados por ordem de nome
      Utilizar o foreach no metodo de selecionar os produtos do banco para fazer o carrinho
     * */
    public function getEstado() {
        return $this->db->order_by('nome')
                        ->get('estado');
    }
    
    /**
     * Monta um select de options com os estados cadastrados.
     * 
     */

    public function selectEstados() {
        $options = "<option value=''>Selecione o Estado</option>".PHP_EOL;
        $estados = $this->getEstado();

        foreach ($estados->result() as $estado) {
            $options .= "<option value='{$estado->id}'>{$estado->nome}</option>".PHP_EOL;
        }
        return $options;
    }

}
