<?php

class ControllerCarrinho extends CI_Controller {

    public function carrinho() {
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/banner');
        $this->load->view('corpo/corpoCarrinho');
        $this->load->view('estrutura/rodape');
    }

    public function addItem() {
        $this->load->Model('modelCarrinho', '', TRUE);
        $carrinho = array(
            'data' => $this->input->post('data'),
            'idCliente' => $this->input->post('idCliente'));
        $dados['cliente'] = $this->modelCarrinho->abrirCarrinho($carrinho);

        $produto = array(
            'idCarrinho' => $this->input->post('idVenda'),
            'idProduto' => $this->input->post('idProduto'),
            'nomeProduto' => $this->input->post('nomeProduto'),
            'quantidade' => $this->input->post('quantidade'),
            'valorUnitario' => $this->input->post('valorUnitario'),
            'valorTotal' => $this->input->post('quantidade') * $this->input->post('valorUnitario'));
        $dados['produto'] = $this->modelCarrinho->insereItem($produto, $this->input->post('idProduto'));
        $dados['carrinho'] = $this->modelCarrinho->pegarUV($this->input->post('idCarrinho'));
    }

}
