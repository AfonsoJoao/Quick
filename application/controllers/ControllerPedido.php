<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControllerPedido
 *
 * @author Mateus
 */
class ControllerPedido extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('funcoes');
        $this->load->Model('modelPedido');
    }

    public function pedido() {
        $ped ['pedido'] = $this->modelPedido->getPedidos();

        $this->load->view('estrutura/menuPainel');
        $this->load->view('corpo/Pedido/listaPedidos', $ped);
        $this->load->view('estrutura/rodapePainel');
    }

    public function getPedido($id = NULL) {

        if (!$id) {

            $retorno['erro'] = 58;
            $retorno['msg'] = 'Erro você deve informar um id válido.';
            echo json_encode($retorno);
            exit;
        }

        $query = $this->modelPedido->getPedidoId($id);

        if (!$query) {

            $retorno['erro'] = 59;
            $retorno['msg'] = 'Erro não foi encontrado nenhum pedido com o id informado.';
            echo json_encode($retorno);
            exit;
        }

        switch ($query->status) {
            case 'Enviado':
                $status = 'Enviado';
                break;

            case 'Pagamento Confirmado':
                $status = 'Pagamento Confirmado';
                break;

            case 'Pedido Cancelado':
                $status = 'Pedido Cancelado';
                break;

            default:
                $status = 'Aguardando Pagamento';
                break;
        }

        $retorno['id_pedido'] = $query->idPedido;
        $retorno['status'] = $status;
        $retorno['erro'] = 0;
        echo json_encode($retorno);
        exit;
    }

    public function mudarstatus() {
       
        $id = $this->input->post('idPedido');
        $status = $this->input->post('status');

        $this->modelPedido->mudarStatus($id, $status);
        $dados ['pedido'] = $this->modelPedido->getPedidos();
        $this->load->view('estrutura/menuPainel');
        $this->load->view('corpo/corpoPainel', $dados);
        $this->load->view('estrutura/rodapePainel');
    }

    public function imprimir($id_pedido = NULL) {

        if (!$id_pedido) {
            echo 'Erro você deve informar um id válido.';
            exit;
        }

        $query = $this->modelPedido->getPedidoId($id_pedido);

        if (!$query) {
            echo 'Erro não foi encontrado nenhum pedido com o id informado.';
            exit;
        }

        $ped ['titulo'] = 'Imprimir Pedido [ #' . $query->idPedido . ' ]';
        $ped['pedido'] = $query;
        $ped['item'] = $this->modelPedido->getItensPedido($query->idPedido);
        $ped['cedulas'] = $this->modelPedido->getCedulas($query->idPedido);


        $this->load->view('corpo/Pedido/imprimirPedido', $ped);
    }

     function cancelarPedido() {
        $this->load->Model('modelPedido', '', TRUE);
        $this->modelPedido->cancelarPedido($this->uri->segment(3));
        $this->load->Model('modelHistorico', '', TRUE);
        $dados['historico'] = $this->modelHistorico->getHistorico();
        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/HistoricoCompras/listarHistorico', $dados);
        $this->load->view('estrutura/rodape');
    }
}
