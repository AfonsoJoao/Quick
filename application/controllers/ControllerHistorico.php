<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControllerHistorico
 *
 * @author Mateus
 */
class ControllerHistorico extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('funcoes');
    }

    public function historico() {
        $this->load->Model('modelHistorico', '', TRUE);
        $dados['historico'] = $this->modelHistorico->getHistorico();

        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/HistoricoCompras/listarHistorico', $dados);
        $this->load->view('estrutura/rodape');
    }

    public function getItensCompra($id_pedido = NULL) {
        $this->load->Model('modelHistorico', '', TRUE);

        if (!$id_pedido) {
            echo 'Erro você deve informar um id válido.';
            exit;
        }

        $ped['item'] = $this->modelHistorico->getDadosItens($id_pedido);


        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/ItensCompra/listarItens', $ped);
        $this->load->view('estrutura/rodape');
    }

}
