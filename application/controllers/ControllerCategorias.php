<?php

class ControllerCategorias extends CI_Controller {

    public function listaCate() {
        $this->load->model("modelCategoria", '', TRUE);
        $dados['produto'] = $this->modelCategoria->listarCategoria($this->uri->segment(3));
        $this->load->model("modelBanner", '', TRUE);
        $dados['banner'] = $this->modelBanner->listarBanner();
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/banner', $dados);
        $this->load->view('corpo/corpoCategorias', $dados);
        $this->load->view('estrutura/rodape');
    }

}
