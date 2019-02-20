<?php

class ControllerBanner extends CI_Controller {

    public function cadbanner() {
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/barraMenu');
        $this->load->view('corpo/Banners/corpoCadBanner');
        $this->load->view('estrutura/rodape');
    }

    public function gravarBanner() {
        $this->load->Model('modelBanner', '', TRUE);
        $banner = array(
            'nomePromocao' => $this->input->post('nomePromocao'),
            'descricaoPromocao' => $this->input->post('descricaoPromocao'),
            'imagemBanner' => $this->input->post('imagemBanner'),
            'data' => $this->input->post('data')
            );
        if ($this->input->post('acao') == "inserir") {
            if ($this->modelBanner->inserirBanner($banner)) {
                $msn['situacao'] = "Registro gravado com sucesso";
            } else {
                $msn['situacao'] = "Erro na gravação";
            }
        } else {
            if ($this->modelBanner->alterarBanner($this->input->post('idBanner'), $banner)) {
                $msn['situacao'] = "Dados alterados com Sucesso";
            } else {
                $msn['situacao'] = "Erro na Alteração dos Dados";
            }
        }
        
        

        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/Banners/corpoCadBanner', $msn);
        $this->load->view('estrutura/rodape');
    }

    public function listaBanner() {
        $this->load->model("modelBanner", '', TRUE);
        $dados['banner'] = $this->modelBanner->listarBanner();
       $this->load->view('estrutura/menuPainel');
        $this->load->view('corpo/Banners/bannersCadastrados', $dados);
        $this->load->view('estrutura/rodapePainel');
    }
    public function listaUnicoBanner() {
        $this->load->Model('modelBanner', '', TRUE);
        $dados['banner'] = $this->modelBanner->listaBanner($this->uri->segment(3));
        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/Banners/corpoCadBanner', $dados);
        $this->load->view('estrutura/rodape');
    }

    function excluirBanner() {
        $this->load->Model('modelBanner', '', TRUE);
        $this->modelBanner->excluirBanner($this->uri->segment(3));
        $this->listaBanner();
    }
}
