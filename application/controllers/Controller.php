<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->ci = & get_instance();
        $this->ci->load->helper('funcoes');
    }

    public function index() {
        $this->load->model("modelProduto", '', TRUE);
        $dados['produto'] = $this->modelProduto->listarProduto();
        $this->load->model("modelBanner", '', TRUE);
        $Z['banner'] = $this->modelBanner->listarBanner();
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/banner', $Z);
        $this->load->view('corpo/corpo', $dados);
        $this->load->view('estrutura/rodape');
    }

}
