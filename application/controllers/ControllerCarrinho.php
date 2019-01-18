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
        $this->carrinhocompras->add(9, 3);
        $this->carrinhocompras->add(10, 2);
    }

    public function limpa() {
        $this->carrinhocompras->limpa();
    }

    public function altera() {
        $this->carrinhocompras->altera(9, 6);
    }
    
    public function apagar_item(){
        $this->carrinhocompras->apaga(9);
    }

}
