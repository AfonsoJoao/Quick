<?php

class ControllerCarrinho extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('carrinhocompras');
    }

    public function carrinho() {

        //unset($_SESSION['carrinho']); // Serve para encerrar a sessão do carrinho.
        $car ['carrinho'] = $this->carrinhocompras->listarProdutos(); // a variavel carrinho tá recebendo os dados da biblioteca carrinho compras
        // e listando os produtos do carrinho através do metodo listar produtos

        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/corpoCarrinho', $car);
        $this->load->view('estrutura/rodape');
    }

    public function add() {
        // $this->carrinhocompras->add(1, 3);
        if ($this->input->post('id')) {
            $id = $this->input->post('id');
            $qtd = 1; //Colocar a quantidade via post pra ver se dá certo também.
            $this->carrinhocompras->add($id, $qtd);
            $json = ['erro' => 0,
                'msg' => 'Produto adicionado com Sucesso!',
                'itens' => $this->carrinhocompras->totalItem(),
                'total' => $this->carrinhocompras->total()
            ];
            echo json_encode($json);
        }
    }

    public function limpa() {

        if ($this->input->post('limpar') == 'true') {
            $this->carrinhocompras->limpa();

            $json = ['erro' => 0,
                'msg' => 'Carrinho Limpo!'
            ];
            echo json_encode($json);
        }
    }

    public function altera() {
        $this->carrinhocompras->altera(2, 6);
    }

    public function apagar_item() {
        $this->carrinhocompras->apaga(3);
    }

    public function carrinho_topo() {

        if ($this->carrinhocompras->totalItem() != 0) {

            $json = [
                'erro' => 0,
                'itens' => $this->carrinhocompras->totalItem(),
                'total' => $this->carrinhocompras->total()
            ];
            echo json_encode($json);
        }
    }

    public function limpa_carrinho() {
        $this->carrinhocompras->limpa();
        redirect('ControllerCarrinho/carrinho', 'refresh');
    }

}
