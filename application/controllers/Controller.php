<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

    public function index() {
        $this->load->model("modelBanner", '', TRUE);
        $dados['banner'] = $this->modelBanner->listarBanner();
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/banner', $dados);
        $this->load->view('corpo/corpo');
        $this->load->view('estrutura/rodape');
    }

}
