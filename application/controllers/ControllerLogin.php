<?php

class ControllerLogin extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->ci =& get_instance();
        $this->ci->load->helper('funcoes');
    }

    public function login() {
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/barraMenu');
        $this->load->view('corpo/corpoLogin');
    }

    public function loginfeitoCliente() {
        $this->load->model("modelProduto", '', TRUE);
        $dados['produto'] = $this->modelProduto->listarProduto();
        $this->load->model("modelBanner", '', TRUE);
        $Z['banner'] = $this->modelBanner->listarBanner();
        $this->load->view('estrutura/cabecalhoLoginCliente');
        $this->load->view('estrutura/bannerLoginCliente', $Z);
        $this->load->view('corpo/corpo', $dados);
        $this->load->view('estrutura/rodape');
    }

    public function logoutCliente() {
        $this->session->unset_userdata("usuario_logado");
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/barraMenu');
        $this->load->view('corpo/corpoLogin');
        $this->load->view('estrutura/rodape');
    }

    public function loginfeitoOperador() {
        $this->load->model("modelProduto", '', TRUE);
        $dados['produto'] = $this->modelProduto->listarProduto();
        $this->load->model("modelBanner", '', TRUE);
        $Z['banner'] = $this->modelBanner->listarBanner();
        $this->load->view('estrutura/cabecalhoLoginOperador');
        $this->load->view('estrutura/bannerLoginOperador', $Z);
        $this->load->view('corpo/corpo', $dados);
        $this->load->view('estrutura/rodape');
    }

    public function logoutOperador() {
        $this->session->unset_userdata("operador_logado");
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/barraMenu');
        $this->load->view('corpo/corpoLogin');
        $this->load->view('estrutura/rodape');
    }

    public function loginfeitoAdministrador() {
        $this->load->model("modelProduto", '', TRUE);
        $dados['produto'] = $this->modelProduto->listarProduto();
        $this->load->model("modelBanner", '', TRUE);
        $Z['banner'] = $this->modelBanner->listarBanner();
        $this->load->view('estrutura/cabecalhoLoginAdministrador');
        $this->load->view('estrutura/bannerLoginAdministrador', $Z);
        $this->load->view('corpo/corpo', $dados);
        $this->load->view('estrutura/rodape');
    }

    public function logoutAdministrador() {
        $this->session->unset_userdata("administrador_logado");
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/barraMenu');
        $this->load->view('corpo/corpoLogin');
        $this->load->view('estrutura/rodape');
    }

    public function autenticar() {
        $this->load->model('modelLogin', '', TRUE); // chama o modelo model login
        $email = $this->input->post('email'); // pega via post o email que venho do formulario
        $senha = base64_encode($this->input->post('senha')); // pega via post a senha que venho do formulario
        $cliente = $this->modelLogin->buscaPorEmailSenhaCliente($email, $senha);
        if (isset($cliente['0']->tipo)) {
            $tipo = ($cliente['0']->tipo);
            if ($tipo == "usuario") {

                if ($cliente) {
                    $this->session->set_userdata("usuario_logado", $cliente);
                    $this->loginfeitoCliente();
                    // echo 'usuario';
                }
            } else if ($tipo == "operador") {

                if ($cliente) {
                    $this->session->set_userdata("operador_logado", $cliente);
                    $this->loginfeitoOperador();
                }   //  echo 'operador';
            } else if ($tipo == "administrador") {
                
                if ($cliente) {
                    $this->session->set_userdata("administrador_logado", $cliente);
                    $this->loginfeitoAdministrador();
                    //  echo 'administrador';
                }
            }
        } else {
           $this->session->set_flashdata("danger", "Usuário ou Senha Inválidos");
           $this->login();
        }
    }

}
