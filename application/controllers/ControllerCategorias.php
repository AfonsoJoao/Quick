<?php

class ControllerCategorias extends CI_Controller {

    public function listaCate() {
        $this->load->model("modelProduto", '', TRUE);
        $dados['produto'] = $this->modelProduto->listarProduto();
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/banner');
        $this->load->view('corpo/corpoCategorias', $dados);
        $this->load->view('estrutura/rodape');
    }

}
