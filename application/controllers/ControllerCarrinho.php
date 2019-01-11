<?php

class ControllerCarrinho extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library('carrinhocompras');
    }

    public function carrinho() {
        
      //unset($_SESSION['carrinho']);
        
        echo '<pre>';
        print_r($_SESSION['carrinho']); 
        
        exit;

        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/corpoCarrinho');
        $this->load->view('estrutura/rodape');
    }

    public function add() {
        $this->carrinhocompras->add(10, 3);
        $this->carrinhocompras->add(1, 3);
        $this->carrinhocompras->add(5, 3);
    }

    public function limpa() {
        $this->carrinhocompras->limpa();
    }

    public function altera() {
        $this->carrinhocompras->altera(5, 4);
    }
    
    public function apagar_item(){
        $this->carrinhocompras->apaga(5);
    }

}
