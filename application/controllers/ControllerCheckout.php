<?php

class ControllerCheckout extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->ci = & get_instance();
        $this->ci->load->helper('funcoes');
        $this->load->library('carrinhocompras');
    }

    public function checkout() {
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/barraMenu');
        $this->load->view('corpo/Checkout/corpoCheckout');
        $this->load->view('estrutura/rodape');
    }
    

}
