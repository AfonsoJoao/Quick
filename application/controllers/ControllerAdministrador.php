<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControllerAdministrador
 *
 * @author Mateus
 */
class ControllerAdministrador extends CI_Controller {
    
    public function cadadministrador() {
        
        $this->load->Model('modelEstado', '', TRUE);
        $dados ['options_estados'] = $this->modelEstado->selectEstados();
        
        
       // $this->load->Model('modelCidade', '', TRUE);
        //$dados ['options_cidades'] = $this->modelCidade->selectCidades();
        
        
        
        
        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/corpoCadAdministrador', $dados);
        $this->load->view('estrutura/rodape');
    }
}
