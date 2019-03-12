<?php

class ControllerCheckout extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('funcoes');
        $this->load->library('carrinhocompras');
    }
    
    

    public function checkout() {
        
        $car ['carrinho'] = $this->carrinhocompras->listarProdutos();
        
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/barraMenu');
        $this->load->view('corpo/Checkout/corpoCheckout', $car);
        $this->load->view('estrutura/rodape');
    }
    

}
