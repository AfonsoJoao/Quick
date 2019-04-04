<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControllerOperador
 *
 * @author Mateus
 */
class ControllerOperador extends CI_Controller {

    public function cadoperador() {
        $this->load->view('corpo/Operador/corpoCadOperador');
    }

    public function gravarOperador() {
        $this->load->Model('modelOperador', '', TRUE);
        $operador = array(
            'nome' => $this->input->post('nome'),
            'tipo' => $this->input->post('tipo'),
            'email' => $this->input->post('email'),
            'senha' => base64_encode($this->input->post('senha'))
        );

        if ($this->input->post('acao') == "inserir") {
            if ($this->modelOperador->inserirOperador($operador)) {
                $msn['situacao'] = "Cadastro Realizado com Sucesso";
            } else {
                $msn['situacao'] = "Erro na Realização do Cadastro";
            }
        } else {
            if ($this->modelOperador->alterarOperador($this->input->post('idOperador'), $operador)) {
                $msn['situacao'] = "Dados alterados com Sucesso";
            } else {
                $msn['situacao'] = "Erro na Alteração dos Dados";
            }
        }

        $this->load->view('estrutura/menuPainel');
        $this->load->view('corpo/corpoPainel', $msn);
        $this->load->view('estrutura/rodapePainel');
    }

    public function listaOperador() { /** Nesta função eu só consigo exibir os dados da entidade */
        $this->load->Model('modelOperador', '', TRUE);
        $dados['operadores'] = $this->modelOperador->listarOperador();
        $this->load->view('estrutura/menuPainel');
        $this->load->view('corpo/Operador/operadoresCadastrados', $dados);
        $this->load->view('estrutura/rodapePainel');
    }

    public function listaUnicoOperador() { /** Nesta função eu consigo manipular os dados da entidade */
        $this->load->Model('modelOperador', '', TRUE);
        $dados['operador'] = $this->modelOperador->listaOperador($this->uri->segment(3));/** O segment é um parametro ou seja são dados de uma entidade que irão ser manipulados a partir da url */
        $this->load->view('corpo/Operador/corpoEditarOperador', $dados);
    }

    public function excluirOperador() { /** Nesta função eu consigo acessar os dados do cliente atavés da model e manipular esses dados através da url utilizando o segment e neste caso irá excluir os dados   */
        $this->load->Model('modelOperador', '', TRUE);
        $this->modelOperador->excluirOperador($this->uri->segment(3));
        $this->listaOperador();
    }

}
