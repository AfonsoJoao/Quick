<?php

class ControllerCliente extends CI_Controller {

    public function cadcliente() {
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/barraMenu');
        $this->load->view('corpo/Cliente/corpoCadCliente');
    }

    public function generateSalt() {
        $salt = '';
        $alfabeto = 'abcdefghijklmnopqrstuvxwyzABCDEFGHIJKLMNOPQRSTUVXWYZ';
        $numeros = '0123456789';

        $str = $alfabeto . $numeros;
        $qtde = strlen($str);

        for ($i = 0; $i < 22; $i++) {
            $salt .= $str[rand(0, $qtde - 1)];
        }
        return $salt;
    }

    public function gravarCliente() {
        $this->load->Model('modelCliente', '', TRUE);
        $cliente = array(
            'nome' => $this->input->post('nome'),
            'tipo' => $this->input->post('tipo'),
            'dataNascimento' => $this->input->post('dataNascimento'),
            'sexo' => $this->input->post('sexo'),
            'email' => $this->input->post('email'),
            'senha' => base64_encode($this->input->post('senha')),
            'cpf' => $this->input->post('cpf'),
            'rg' => $this->input->post('rg'),
            'telefone' => $this->input->post('telefone')
        );

        if ($this->input->post('acao') == "inserir") {
            if ($this->modelCliente->inserirCliente($cliente)) {
                $msn['situacao'] = "Cadastro Realizado com Sucesso";
            } else {
                $msn['situacao'] = "Erro na Realização do Cadastro";
            }
        } else {
            if ($this->modelCliente->alterarCliente($this->input->post('idCliente'), $cliente)) {
                $msn['situacao'] = "Dados alterados com Sucesso";
            } else {
                $msn['situacao'] = "Erro na Alteração dos Dados";
            }
        }

        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/Cliente/corpoCadCliente', $msn);
        $this->load->view('estrutura/rodape');
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
        $dados['cliente'] = $this->modelCliente->listaCliente($this->uri->segment(3));/** O segment é um parametro ou seja são dados de uma entidade que irão ser manipulados a partir da url */
        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/Cliente/corpoCadCliente', $dados);
        $this->load->view('estrutura/rodape');
    }

    public function excluirCliente() { /** Nesta função eu consigo acessar os dados do cliente atavés da model e manipular esses dados através da url utilizando o segment e neste caso irá excluir os dados   */
        $this->load->Model('modelCliente', '', TRUE);
        $this->modelCliente->excluirCliente($this->uri->segment(3));
        $this->listaCliente();
    }

    public function alterarSenha() {
        $this->load->Model('modelCliente', '', TRUE);
        $email = $this->input->post('email');

        $dados = $this->modelCliente->buscarEmail($email);
        if (isset($dados)) {
            $novasenha = substr(md5(time()), 0, 6);
            $nscriptografada = base64_encode(base64_encode($novasenha));
            echo $novasenha;

            $this->modelCliente->alterarSenhaCliente($nscriptografada, $email);
        } else {
            echo "email invalido";
        }

        $this->load->view('corpo/corpoRecuperarSenha');
    }

    public function enviar() {
        $this->load->library('email') ;
        
        $this->email->from("afonsoneto.joao@gmail.com", 'Afonso');
        $this->email->subject("Teste");
        $this->email->to("afonsojoao-neto@hotmail.com");
        $this->email->message("Mensagem teste");
        if($this->email->send()){
            echo "True";
        }else{
            echo  $this->email->print_debugger();
        }
    }

}
