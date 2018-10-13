<?php

class ControllerLogin extends CI_Controller {

    public function login() {
        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/corpoLogin');
        $this->load->view('estrutura/rodape');
    }

    public function loginfeito() {
        $this->load->view('estrutura/cabecalhoLogin');
        $this->load->view('estrutura/banner');
        $this->load->view('corpo/corpoCategorias');
        $this->load->view('estrutura/rodape');
    }

    public function logout() {
        $this->session->unset_userdata("usuario_logado");
        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/corpoLogin');
        $this->load->view('estrutura/rodape');
    }

    public function autenticar() {
        $this->load->model('modelCliente', '', TRUE); // chama o modelo usuarios_model
        $email = $this->input->post('email'); // pega via post o email que venho do formulario
        $senha = base64_encode($this->input->post('senhaCliente')); // pega via post a senha que venho do formulario
        $usuario = $this->modelCliente->buscaPorEmailSenha($email, $senha);
        
        if ($usuario) {
            $this->session->set_userdata("usuario_logado", $usuario);
            $this->loginfeito();
        } else {
            $this->session->set_flashdata("danger", "Usuário ou senha inválidos");
            $this->login();
        }
    }

}
