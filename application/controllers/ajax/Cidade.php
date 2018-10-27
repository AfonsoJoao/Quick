<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cidade
 *
 * @author Mateus
 */
class Cidade extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getCidades(){
        $this->load->model('modelCidade', '', TRUE);
        $idestado = $this->input->post('idestado');
        echo $this->modelCidade->selectCidades($idestado);
    }
    
    
}
