<?php

class ControllerCliente extends CI_Controller {

    public function cadcliente($s = null) {
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/barraMenu');
        $this->load->view('corpo/Cliente/corpoCadCliente', $s);
    }


    public function gravarCliente() {
        $this->load->Model('modelCliente', '', TRUE);
        $cliente = array(
            'nomeCliente' => $this->input->post('nomeCliente'),
            'tipo' => $this->input->post('tipo'),
            'email' => $this->input->post('email'),
            'senha' => base64_encode($this->input->post('senha')),
            'cpf' => $this->input->post('cpf'),
            'telefone' => $this->input->post('telefone')
        );

        $email = $this->input->post('email');
        $dados = $this->modelCliente->buscarEmail($email);

        if (isset($dados) && $this->input->post('acao') == "inserir") {
            $msn['mensagens'] = "O e-mail inserido não está disponível";
        } else {
            if ($this->input->post('acao') == "inserir") {
                if ($this->modelCliente->inserirCliente($cliente)) {
                    $msn['situacao'] = "Cadastro Realizado com Sucesso";
                } else {
                    $msn['mensagens'] = "Erro na Realização do Cadastro";
                }
            } else {
                if ($this->modelCliente->alterarCliente($this->input->post('idCliente'), $cliente)) {
                    $msn['situacao'] = "Dados alterados com Sucesso";
                } else {
                    $msn['mensagens'] = "Erro na Alteração dos Dados";
                }
            }
        }
        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/Cliente/corpoCadCliente', $msn);
        $this->load->view('estrutura/rodape');
    }
    
    
    public function validarCadastro() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nomeCliente', 'nome', 'required|min_length[14]|max_length[60]');
        $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
        $this->form_validation->set_rules('senha', 'senha', 'required|min_length[7]|max_length[30]');      
        $this->form_validation->set_rules('cpf', 'CPF', 'required|validarCPF');
        $this->form_validation->set_rules('telefone', 'telefone', 'required|min_length[14]|trataNumero'); // Usar a funcão de validacção regex_match do form_validation
        if ($this->form_validation->run() == FALSE) {
            $erros = array('mensagens' => validation_errors());
            $this->cadcliente($erros);
        } else {
            $this->gravarCliente();
        }
    }
    

    public function listaCliente() { /** Nesta função eu só consigo exibir os dados da entidade */
        $this->load->Model('modelCliente', '', TRUE);
        $dados['clientes'] = $this->modelCliente->listarCliente();
        $this->load->view('estrutura/menuPainel');
        $this->load->view('corpo/Cliente/clientesCadastrados', $dados);
        $this->load->view('estrutura/rodapePainel');
    }

    public function listaUnicoCliente() { /** Nesta função eu consigo manipular os dados da entidade */
        $this->load->Model('modelCliente', '', TRUE);
        $dados['cliente'] = $this->modelCliente->listaCliente();/** O segment é um parametro ou seja são dados de uma entidade que irão ser manipulados a partir da url */
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/barraMenu');
        $this->load->view('corpo/Cliente/editarConta', $dados);
    }

    public function excluirCliente() { /** Nesta função eu consigo acessar os dados do cliente atavés da model e manipular esses dados através da url utilizando o segment e neste caso irá excluir os dados   */
        $this->load->Model('modelCliente', '', TRUE);
        $this->modelCliente->excluirCliente($this->uri->segment(3));
        $this->listaCliente();
    }

    public function recuperarSenha() {
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/barraMenu');
        $this->load->view('corpo/corpoRecuperarSenha');
    }

    public function alterarSenha() {
        $this->load->Model('modelCliente', '', TRUE);
        $config = array(//"Array" changed to "array" 1/15/15
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'quicksupermercados.contato@gmail.com',
            'smtp_pass' => 'senhaquick123',
            'protocol' => 'smtp',
            'validate' => TRUE,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        );
        $this->load->library('email', $config);
        $email = $this->input->post('email');

        $dados = $this->modelCliente->buscarEmail($email);

        $this->email->from("quicksupermercados.contato@gmail.com", 'Contato Quick supermercados');
        $this->email->subject("Nova Senha");
        $this->email->to($email = $this->input->post('email'));
        $novasenha = substr(md5(time()), 0, 6);
        $nscriptografada = base64_encode($novasenha);
        $this->email->message("Olá, a sua senha é <b>" . $novasenha . "</b>. Agora acesse o site <b>quicksupermercados.com.br</b> e siga o passo a passo para alterar a sua senha para a senha que desejar. Caso estaja com algum problema para redefinir sua senha ou tenha encontrado qualquer outro problema no nosso sistema, entre em contato com o E-mail <b>quicksupermercados.contato@gmail.com</b>");

        if (isset($dados)) {
            if ($this->email->send()) {
                $this->modelCliente->alterarSenhaCliente($nscriptografada, $email);
                $this->load->view('corpo/instrucoes');
            } else {
                $msn['mensagem'] = "Aconteceu um erro ao enviar o email tente novamente mais tarde";
                $this->load->view('estrutura/cabecalho');
                $this->load->view('estrutura/barraMenu');
                $this->load->view('corpo/corpoRecuperarSenha', $msn);
                echo $this->email->print_debugger();
            }
        } else {
            $msn['mensagem'] = "O email informado não consta no nosso banco de dados";
            $this->load->view('estrutura/cabecalho');
            $this->load->view('estrutura/barraMenu');
            $this->load->view('corpo/corpoRecuperarSenha', $msn);
        }
    }

    public function instrucoes() {
        $this->load->view('corpo/instrucoes');
    }

}
