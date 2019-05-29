<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('funcoes');
    }

    public function index() {
        $this->load->model("modelProduto", '', TRUE);
        $dados['produto'] = $this->modelProduto->listarProduto();
        $this->load->model("modelBanner", '', TRUE);
        $banner['banner'] = $this->modelBanner->listarBanner();
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/barraMenu');
        $this->load->view('estrutura/banner', $banner);
        $this->load->view('corpo/corpo', $dados);
        $this->load->view('estrutura/rodape');
    }
    
    public function documentos() {
        
        $this->load->view('estrutura/menuPainel');     
        $this->load->view('corpo/Documentos/documentos');
        $this->load->view('estrutura/rodapePainel');
    }

}