<?php

class ControllerCarrinho extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('funcoes');
        $this->load->library('carrinhocompras');
    }

    public function carrinho() {

        $car ['carrinho'] = $this->carrinhocompras->listarProdutos(); // a variavel carrinho tá recebendo os dados da biblioteca carrinho compras
        // e listando os produtos do carrinho através do metodo listar produtos

        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/Carrinho/corpoCarrinho', $car);
        $this->load->view('estrutura/rodape');
    }
    
    public function carrinhoLogado() {

        $car ['carrinho'] = $this->carrinhocompras->listarProdutos(); // a variavel carrinho tá recebendo os dados da biblioteca carrinho compras
        // e listando os produtos do carrinho através do metodo listar produtos

        $this->load->view('estrutura/cabecalhoLoginCliente');
        $this->load->view('corpo/Carrinho/corpoCarrinho', $car);
        $this->load->view('estrutura/rodape');
    }

    public function add() {
        
        if ($this->input->post('id')) {
            $id = $this->input->post('id');
            $qtd = 1; //Colocar a quantidade via post pra ver se dá certo também.
            $this->carrinhocompras->add($id, $qtd);
            $json = ['erro' => 0,
                'msg' => 'Produto adicionado com Sucesso!',
                'itens' => $this->carrinhocompras->totalItem(),
                'total' => formataMoedaReal($this->carrinhocompras->total(), TRUE)
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

        if ($this->input->post('id') && $this->input->post('qtd')) {

            $id = $this->input->post('id');
            $qtd = $this->input->post('qtd');
            $this->carrinhocompras->altera($id, $qtd);

            $json = ['erro' => 0,
                'msg' => 'Quantidade Alterada com Sucesso!'
            ];
            echo json_encode($json);
            
        } 
    }

    public function apagar_item() {

        if ($this->input->post('id')) {
            $id = $this->input->post('id');
            $this->carrinhocompras->apaga($id);

            $json = ['erro' => 0,
                'msg' => 'Produto apagado com sucesso!'
            ];
            echo json_encode($json);
        }
    }

    public function carrinho_topo() {

        if ($this->carrinhocompras->totalItem() != 0) {

            $json = [
                'erro' => 0,
                'itens' => $this->carrinhocompras->totalItem(),
                'total' => formataMoedaReal($this->carrinhocompras->total(), TRUE)
            ];
            echo json_encode($json);
        }
    }

    public function limpa_carrinho() {
        $this->carrinhocompras->limpa();
        
        $json = ['erro' => 0,
                'msg' => 'Carrinho Limpo!'
            ];
            echo json_encode($json);
            
        redirect('ControllerCarrinho/carrinho');
    }

}
