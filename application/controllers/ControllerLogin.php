 <?php

class ControllerLogin extends CI_Controller {
    
    public function login(){
       $this->load->view('estrutura/cabecalho');  
       $this->load->view('corpo/corpoLogin');  
       $this->load->view('estrutura/rodape'); 
    }

        public function autenticar(){
 
        $this->load->model('modelCliente', '', TRUE);// chama o modelo usuarios_model
        $email = $this->input->post('email');// pega via post o email que venho do formulario
        $senha = base64_encode($this->input->post('senhaCliente')); // pega via post a senha que venho do formulario
        $usuario = $this->modelCliente->buscaPorEmailSenha($email, $senha);
 
        //if($this->modelCliente->buscaPorEmailSenha($email, $senha)){ // acessa a função buscaPorEmailSenha do modelo
        if ($usuario) {
            $this->session->set_userdata("usuario_logado", $usuario);
            
            //$msn ['situacao'] = "Usuário Logado com sucesso!";
            
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/banner');
        $this->load->view('corpo/corpoCategorias');
        $this->load->view('estrutura/rodape');
        }else{
            $this->session->set_flashdata("danger", "Usuário ou senha inválidos");
            //$msn ['situacao'] = "Não foi possível fazer o Login!";
        }
        
        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/corpoLogin');
        $this->load->view('estrutura/rodape');
    }
    
}
