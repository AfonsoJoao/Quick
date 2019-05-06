<?php

class ControllerProduto extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('funcoes');
    }

    public function cadproduto() {
        $this->load->view('estrutura/menuPainel');
        $this->load->view('corpo/Produto/corpoCadProduto');
        $this->load->view('estrutura/rodapePainel');
    }

    public function gravarProduto() {
        $this->load->Model('modelProduto', '', TRUE);
        $produto = array(
            'nomeProduto' => $this->input->post('nomeProduto'),
            'data' => $this->input->post('data'),
            'valorUnitario' => formatoDecimal($this->input->post('valorUnitario')),
            'descricaoProduto' => $this->input->post('descricaoProduto'),
            'peso' => $this->input->post('peso'),
            'marca' => $this->input->post('marca'),
            'categoria' => $this->input->post('categoria'),
            'disponibilidade' => $this->input->post('disponibilidade'),
            'tipoDestaque' => $this->input->post('tipoDestaque'),
            'valorPromocao' => $this->input->post('valorPromocao'),
            'imagem' => $this->input->post('imagem')
        );
        if ($this->input->post('acao') == "inserir") {
            if ($this->modelProduto->inserirProduto($produto)) {
                $msn['situacao'] = "Registro gravado com sucesso";
            } else {
                $msn['situacao'] = "Erro na gravação";
            }
        } else {
            if ($this->modelProduto->alterarProduto($this->input->post('idProduto'), $produto)) {
                $msn['situacao'] = "Dados alterados com Sucesso";
            } else {
                $msn['situacao'] = "Erro na Alteração dos Dados";
            }
        }



        $this->load->view('estrutura/menuPainel');
        $this->load->view('corpo/Produto/corpoCadProduto', $msn);
        $this->load->view('estrutura/rodapePainel');
    }

    public function listaProduto() {
        $this->load->model("modelProduto", '', TRUE);
        $dados['produto'] = $this->modelProduto->listarProduto();
        $this->load->view('estrutura/menuPainel');
        $this->load->view('corpo/Produto/produtosCadastrados', $dados);
        $this->load->view('estrutura/rodapePainel');
    }

    public function listaUnicoProduto() {
        $this->load->Model('modelProduto', '', TRUE);
        $dados['produto'] = $this->modelProduto->listaProduto($this->uri->segment(3));
        $this->load->view('estrutura/menuPainel');
        $this->load->view('corpo/Produto/corpoEditarProduto', $dados);
        $this->load->view('estrutura/rodapePainel');
    }

    function excluirProduto() {
        $this->load->Model('modelProduto', '', TRUE);
        $this->modelProduto->excluirProduto($this->uri->segment(3));
        $this->listaProduto();
    }

    function getCategoria($categoria) {
        $this->load->Model('modelProduto', '', TRUE);
        print_r($this->modelProduto->getProdutoCategoria($categoria));
    }

    public function buscarProduto() {
        $this->load->Model('modelProduto', '', TRUE);
        $dados['produto'] = $this->modelProduto->listaProduto($this->uri->segment(3));
        $this->load->model("modelBanner", '', TRUE);
        $Z['banner'] = $this->modelBanner->listarBanner();
        $dados['listagem'] = $this->modelProduto->buscar($_POST);
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/barraMenu');
        $this->load->view('estrutura/banner', $Z);
        $this->load->view('corpo/Produto/corpoResultadosProdutos', $dados);
        $this->load->view('estrutura/rodape');
    }

    public function unicoProduto() {
        $this->load->Model('modelProduto', '', TRUE);
        $dados['produto'] = $this->modelProduto->listaProduto($this->uri->segment(3));
        $this->load->model("modelBanner", '', TRUE);
        $Z['banner'] = $this->modelBanner->listarBanner();
        $this->load->view('corpo/Produto/corpoUnicoProduto', $dados);
    }

    public function paginacao($value = null) {
        if ($value == null) {
            $value = 1;
        }
        $registros_p_pagina = 2;
        if ($value <= $registros_p_pagina) {
            $data['botaoA'] = 'disable';
        } else {
            $data['botaoA'] = '';
        }
        $this->load->model("modelProduto", '', TRUE);
        $u = $this->modelProduto->qtde_produto();

        if (($u[0]->total - $value) < $registros_p_pagina) {
            $data['botaoP'] = 'disable';
        } else {
            $data['botaoP'] = '';
        }
        $dados['produto'] = $this->modelProduto->get_produto($value, $registros_p_pagina);
        $this->load->model("modelProduto", '', TRUE);
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/barraMenu');
        $this->load->view('corpo/Produto/produtosCadastrados', $dados);
        $this->load->view('estrutura/rodape');
    }

}
