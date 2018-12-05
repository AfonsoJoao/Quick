<?php

class ControllerLogin extends CI_Controller {

    public function login() {
        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/corpoLogin');
        $this->load->view('estrutura/rodape');
    }

    public function loginfeitoCliente() {
        $this->load->view('estrutura/cabecalhoLoginCliente');
        $this->load->view('estrutura/banner');
        $this->load->view('corpo/corpoCategorias');
        $this->load->view('estrutura/rodape');
    }

    public function logoutCliente() {
        $this->session->unset_userdata("usuario_logado");
        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/corpoLogin');
        $this->load->view('estrutura/rodape');
    }
    
    
    public function loginfeitoOperador() {
        $this->load->view('estrutura/cabecalhoLoginOperador');
        $this->load->view('estrutura/banner');
        $this->load->view('corpo/corpo');
        $this->load->view('estrutura/rodape');
    }
    
     public function logoutOperador() {
        $this->session->unset_userdata("operador_logado");
        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/corpoLogin');
        $this->load->view('estrutura/rodape');
    }
    
     public function loginfeitoAdministrador() {
        $this->load->view('estrutura/cabecalhoLoginAdministrador');
        $this->load->view('estrutura/banner');
        $this->load->view('corpo/corpo');
        $this->load->view('estrutura/rodape');
    }
    
    public function logoutAdministrador() {
        $this->session->unset_userdata("administrador_logado");
        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/corpoLogin');
        $this->load->view('estrutura/rodape');
    }
    

    public function autenticar() {
        $this->load->model('modelLogin', '', TRUE); // chama o modelo model login
        $email = $this->input->post('email'); // pega via post o email que venho do formulario
        $senha = base64_encode($this->input->post('senha')); // pega via post a senha que venho do formulario
        $cliente = $this->modelLogin->buscaPorEmailSenhaCliente($email, $senha, NULL);
        if(isset($cliente['0']->tipo)){
            $tipo = ($cliente['0']->tipo);
            if ($tipo == "usuario") {
                $this->loginfeitoCliente();
               // echo 'usuario';
            }else if ($tipo == "operador"){
                 $this->loginfeitoOperador();
              //  echo 'operador';
            }else if($tipo == "administrador"){
                 $this->loginfeitoAdministrador();
              //  echo 'administrador';
            }   
        }else{
            $this->session->flashdata("danger");
            echo "login errado";
        }
       
    }

}
