<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelRelatorio
 *
 * @author Mateus
 */
class ModelRelatorio extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->helper('funcoes');
    }
   
    public function getPedido(){
        
        $this->db->where('data_Pedido', dataDiaDB());
        return $this->db->get('pedido')->result();
        
    }
    
}
