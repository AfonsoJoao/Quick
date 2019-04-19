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
        $this->load->Model('modelRelatorio');
    }
    

    public function mensal() {

        $data ['titulo'] = 'Imprimir Relatório Mensal';
        $data['item'] = $this->modelRelatorio->getPedido();

        $this->load->view('corpo/Relatorio/imprimirRelatorio', $data);
    }

}
