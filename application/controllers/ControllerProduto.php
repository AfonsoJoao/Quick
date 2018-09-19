<?php

class ControllerProduto extends CI_Controller {

    public function cadproduto() {
        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/corpoCadProduto');
        $this->load->view('estrutura/rodape');
    }

    public function gravarProduto() {
        if (isset($_FILES['imagem'])) {
            $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
            $novo_nome = md5(time()) . $extensao;

            move_uploaded_file($_FILES['imagem']['tmp_name'],$novo_nome);
        }
        $this->load->Model('modelProduto', '', TRUE);
        $produto = array(
            'nomeProduto' => $this->input->post('nomeProduto'),
            'valorUnitario' => $this->input->post('valorUnitario'),
            'descricaoProduto' => $this->input->post('descricaoProduto'),
            'peso' => $this->input->post('peso'),
            'marca' => $this->input->post('marca'),
            'categoria' => $this->input->post('categoria'),
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

        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/corpoCadProduto', $msn);
        $this->load->view('estrutura/rodape');
    }

    public function listaProduto() {
        $this->load->model("modelProduto", '', TRUE);
        $dados['produto'] = $this->modelProduto->listarProduto();
        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/produtosCadastrados', $dados);
        $this->load->view('estrutura/rodape');
    }
    public function listaUnicoProduto() {
        $this->load->Model('modelProduto', '', TRUE);
        $dados['produto'] = $this->modelProduto->listaProduto($this->uri->segment(3));
        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/corpoCadProduto', $dados);
        $this->load->view('estrutura/rodape');
    }

    function excluirProduto() {
        $this->load->Model('modelProduto', '', TRUE);
        $this->modelProduto->excluirProduto($this->uri->segment(3));
        $this->listaProduto();
    }

}
