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
            case 1:
                $status = 'Enviado';
                break;

            case 2:
                $status = 'Pagamento Confirmado';
                break;

            case 3:
                $status = 'Cancelado';
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

        if ($this->input->post('input_status')) {
            
            $id_pedido = $this->input->post('input_id');
            $pedido['status'] = $this->input->post('input_status');
            $this->modelPedido->doUpdate($pedido, $id_pedido);
            
            $retorno['erro'] = 0;
            $retorno['msg'] = 'Pedido Atualizado Com Sucesso.';
            echo json_encode($retorno);
            exit;
            
        } else {
            $retorno['erro'] = 60;
            $retorno['msg'] = 'O Campo Status é Obrigatório.';
            echo json_encode($retorno);
            exit;
        }
    }
    
    
    public function imprimir($id_pedido=NULL){
        
        if (!$id_pedido) {
            echo 'Erro você deve informar um id válido.';
            exit;
        }

        $query = $this->modelPedido->getPedidoId($id_pedido);

        if (!$query) {
            echo 'Erro não foi encontrado nenhum pedido com o id informado.';
            exit;
        }
        
        $ped ['titulo'] = 'Imprimir Pedido [ #'. $query->idPedido .' ]';
        $ped['pedido'] = $query;
        $ped['item'] = $this->modelPedido->getItensPedido($query->idPedido);
        

        $this->load->view('corpo/Pedido/imprimirPedido', $ped);
        
        
    }
    
    public function listaUnicoPedido() { /** Nesta função eu consigo manipular os dados da entidade */
        $this->load->Model('modelPedido', '', TRUE);
        $dados['pedido'] = $this->modelPedido->listaPedido($this->uri->segment(3));/** O segment é um parametro ou seja são dados de uma entidade que irão ser manipulados a partir da url */
        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/Pedido/editarPedido', $dados);
        $this->load->view('estrutura/rodape');
        
    }
    
    public function excluirPedido() { /** Nesta função eu consigo acessar os dados do cliente atavés da model e manipular esses dados através da url utilizando o segment e neste caso irá excluir os dados   */
        $this->load->Model('modelPedido', '', TRUE);
        $this->modelPedido->excluirPedido($this->uri->segment(3));
        $this->pedido();
    }

}
