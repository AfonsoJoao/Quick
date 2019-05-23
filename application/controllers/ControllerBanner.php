<?php

class ControllerBanner extends CI_Controller {

         public function __construct() {
        parent::__construct();
        $this->load->helper('form');
    }
     
    public function cadbanner() {
        $this->load->view('estrutura/menuPainel');
        $this->load->view('corpo/Banners/corpoCadBanner');
        $this->load->view('estrutura/rodapePainel');
    }
    
    public function gravarBanner() {
        $this->load->Model('modelBanner', '', TRUE);
        $randon = substr(md5(time()), 0, 6);  
        $nomeImagem = str_replace(" ", "_", $this->input->post('nomePromocao')) . $randon;
        $banner = array(
            'nomePromocao' => $this->input->post('nomePromocao'),
            'descricaoPromocao' => $this->input->post('descricaoPromocao'),
            'imagemBanner' => $nomeImagem.'.png',
            'status' => $this->input->post('status')
            );
     $configuracao = array(
         'upload_path'   => 'application/images',
         'allowed_types' => 'png|jpg|jpeg|gif',
         'file_name'     =>  $nomeImagem.'.png',
         'max_size'      => '2048'
     );      
     $this->load->library('upload', $configuracao);
$this->upload->do_upload('imagemBanner');
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
        
        

        $this->load->view('estrutura/menuPainel');
        $this->load->view('corpo/Banners/corpoCadBanner',$msn);
        $this->load->view('estrutura/rodapePainel');
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
        $this->load->view('estrutura/menuPainel');
        $this->load->view('corpo/Banners/corpoEditarBanner', $dados);
        $this->load->view('estrutura/rodapePainel');
    }

    function excluirBanner() {
        $this->load->Model('modelBanner', '', TRUE);
        $this->modelBanner->excluirBanner($this->uri->segment(3));
        $this->listaBanner();
    }
}
