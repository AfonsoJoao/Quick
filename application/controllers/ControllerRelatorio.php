<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControllerRelatorio
 *
 * @author Mateus
 */
class ControllerRelatorio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('funcoes');
    }
    

    public function mensal() {
        $this->load->Model('modelRelatorio');
        $getData = date('Y-m-d');   
        
        $data ['titulo'] = 'Imprimir Relatório de Pedidos Diário';
        $data['item'] = $this->modelRelatorio->getPedido($getData);

        $this->load->view('corpo/Relatorio/imprimirRelatorio', $data);
    }

}
