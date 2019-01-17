<?php

class ControllerProduto extends CI_Controller {

    public function cadproduto() {
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/barraMenu');
        $this->load->view('corpo/Produto/corpoCadProduto');
        $this->load->view('estrutura/rodape');
    }

    public function gravarProduto() {
        $this->load->Model('modelProduto', '', TRUE);
        $produto = array(
            'nomeProduto' => $this->input->post('nomeProduto'),
            'data' => $this->input->post('data'),
            'valorUnitario' => $this->input->post('valorUnitario'),
            'descricaoProduto' => $this->input->post('descricaoProduto'),
            'peso' => $this->input->post('peso'),
            'marca' => $this->input->post('marca'),
            'categoria' => $this->input->post('categoria'),
            'disponibilidade' => $this->input->post('disponibilidade'),
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
        $this->load->view('corpo/Produto/corpoCadProduto', $msn);
        $this->load->view('estrutura/rodape');
    }

    public function listaProduto() {
        $this->load->model("modelProduto", '', TRUE);
        $dados['produto'] = $this->modelProduto->listarProduto();
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/barraMenu');
        $this->load->view('corpo/Produto/produtosCadastrados', $dados);
        $this->load->view('estrutura/rodape');
    }

    public function listaUnicoProduto() {
        $this->load->Model('modelProduto', '', TRUE);
        $dados['produto'] = $this->modelProduto->listaProduto($this->uri->segment(3));
        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/Produto/corpoCadProduto', $dados);
        $this->load->view('estrutura/rodape');
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
        $this->form_validation->set_rules('busca', 'buscar', 'trim|required');
        
        if($this->form_validation->run() == TRUE){    
        $this->load->Model('modelProduto', '', TRUE);
        $dados['produto'] = $this->modelProduto->listaProduto($this->uri->segment(3));
        $this->load->Model('modelProduto', '', TRUE);
        $dados['listagem'] = $this->modelProduto->buscar($this->input->post('busca'));
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/barraMenu');
        $this->load->view('corpo/Produto/corpoResultadosProdutos', $dados);
        $this->load->view('estrutura/rodape');
        }else{
            redirect('/', 'refresh');
        }
    }

    public function unicoProduto() {
        $this->load->Model('modelProduto', '', TRUE);
        $dados['produto'] = $this->modelProduto->listaProduto($this->uri->segment(3));
        $this->load->model("modelBanner", '', TRUE);
        $Z['banner'] = $this->modelBanner->listarBanner();
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/barraMenu');
        $this->load->view('estrutura/banner', $Z);
        $this->load->view('corpo/Produto/corpoUnicoProduto', $dados);
        $this->load->view('estrutura/rodape');
    }
  
      /** FUNÇÃO DE UPLOAD DE IMAGEM NÃO FINALIZADA
        public function uploadImagem(){
        $pasta = 'C:/xampp/www/ProjetoQuick/application/images/imagens_produtos/';
        
        $config['upload_path'] = $pasta;
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_size'] = 2048;
        
        $this->load->library('upload', $config);
        
        if($this->upload->do_upload('imagem')){
            $retorno['file_name'] = $this->upload->data('file_name');
            $retorno['msg'] = 'Foto enviada com sucesso';
            $retorno['erro'] = 0;
        }else{
            $retorno['msg'] = $this->upload->displayerrors();
            $retorno['erro'] = 25;
        }
        
        echo json_encode($retorno);
    }
    */
}
