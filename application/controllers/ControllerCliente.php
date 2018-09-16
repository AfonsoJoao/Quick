<?php

class ControllerCliente extends CI_Controller {

    public function cadcliente() {
        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/corpoCadCliente');
        $this->load->view('estrutura/rodape');
    }

    public function gravarCliente() {
        $this->load->Model('modelCliente', '', TRUE);
        $cliente = array(
            'nome' => $this->input->post('nome'),
            'dataNascimento' => $this->input->post('dataNascimento'),
            'sexo' => $this->input->post('sexo'),
            'email' => $this->input->post('email'),
            'senhaCliente' => $this->input->post('senhaCliente'),
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
        $this->load->view('corpo/corpoCadCliente', $msn);
        $this->load->view('estrutura/rodape');
    }

    public function listaClientes() { /** Nesta função eu só consigo exibir os dados da entidade */
        $this->load->Model('modelCliente', '', TRUE);
        $dados['clientes'] = $this->modelCliente->listarClientes();
        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/clientesCadastrados', $dados);
        $this->load->view('estrutura/rodape');
    }

    public function listaUnicoCliente() { /** Nesta função eu consigo manipular os dados da entidade */
        $this->load->Model('modelCliente', '', TRUE);
        $dados['cliente'] = $this->modelCliente->listaCliente($this->uri->segment(3));/** O segment é um parametro ou seja são dados de uma entidade que irão ser manipulados a partir da url */
        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/corpoCadCliente', $dados);
        $this->load->view('estrutura/rodape');
    }
    
     function excluirCliente(){ /** Nesta função eu consigo acessar os dados do cliente atavés da model e manipular esses dados através da url utilizando o segment e neste caso irá excluir os dados   */
        $this->load->Model('modelCliente', '', TRUE);
        $this->modelCliente->excluirCliente($this->uri->segment(3));
        $this->listaClientes();
    }

}
