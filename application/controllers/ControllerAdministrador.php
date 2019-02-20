<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControllerAdministrador
 *
 * @author Mateus
 */
class ControllerAdministrador extends CI_Controller {

    public function cadadministrador() {

        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/barraMenu');
        $this->load->view('corpo/Administrador/corpoCadAdministrador');
        $this->load->view('estrutura/rodape');
    }

    public function gravarAdministrador() {
        $this->load->Model('modelAdministrador', '', TRUE);
        $administrador = array(
            $dados['nome'] = $this->input->post('nome'),
            $dados['tipo'] = $this->input->post('tipo'),
            $dados['dataNascimento'] = $this->input->post('dataNascimento'),
            $dados['sexo'] = $this->input->post('sexo'),
            $dados['email'] = $this->input->post('email'),
            $dados['senha'] = base64_encode($this->input->post('senha')),
            $dados['cpf'] = $this->input->post('cpf'),
            $dados['rg'] = $this->input->post('rg'),
            $dados['telefone'] = $this->input->post('telefone')
         /*   $endereco['cep'] = $this->input->post('cep'),
            $estado['nomeEstado'] = $this->input->post('nomeEstado'),
            $cidade['nomeCidade'] = $this->input->post('nomeCidade'),
            $bairro['nomeBairro'] = $this->input->post('nomeBairro'),
            //$bairro['idCidade'] = $this->input->post('idCidade'),
            $endereco['nomeRua'] = $this->input->post('nomeRua'),
            $endereco['numeroResidencia'] = $this->input->post('numeroResidencia') */ ); 



        if ($this->input->post('acao') == "inserir") {
            if ($this->modelAdministrador->inserirAdministrador($dados)) {
              //  $msn['situacao'] = "Cadastro Realizado com Sucesso";
            } else {
                $msn['situacao'] = "Cadastro Realizado com Sucesso";
            }
        } else {
            if ($this->modelAdministrador->alterarAdministrador($this->input->post('idAdministrador'), $dados)) {
                $msn['situacao'] = "Dados alterados com Sucesso";
            } else {
                $msn['situacao'] = "Erro na Alteração dos Dados";
            }
        }

        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/corpoCadAdministrador', $msn);
        $this->load->view('estrutura/rodape');
    }

    public function listaAdministrador() { /** Nesta função eu só consigo exibir os dados da entidade */
        $this->load->Model('modelAdministrador', '', TRUE);
        $dados['administradores'] = $this->modelAdministrador->listarAdministrador();
       // $cid['cidades'] = $this->modelAdministrador->listarCidade();
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/barraMenu');
        $this->load->view('corpo/Administrador/administradoresCadastrados', $dados);
        $this->load->view('estrutura/rodape');
    }
    
    public function listaUnicoAdministrador() { /** Nesta função eu consigo manipular os dados da entidade */
        $this->load->Model('modelAdministrador', '', TRUE);
        $dados['administrador'] = $this->modelAdministrador->listaAdministrador($this->uri->segment(3));/** O segment é um parametro ou seja são dados de uma entidade que irão ser manipulados a partir da url */
        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/Administrador/corpoCadAdministrador', $dados);
        $this->load->view('estrutura/rodape');
    }
    
    public function excluirAdministrador(){ /** Nesta função eu consigo acessar os dados do cliente atavés da model e manipular esses dados através da url utilizando o segment e neste caso irá excluir os dados   */
        $this->load->Model('modelAdministrador', '', TRUE);
        $this->modelAdministrador->excluirAdministrador($this->uri->segment(3));
        $this->listaAdministrador();
    }
    
    public function listaEndereco() { /** Nesta função eu só consigo exibir os dados da entidade */
        $this->load->Model('modelAdministrador', '', TRUE);
        $end['enderecos'] = $this->modelAdministrador->listarEndereco();
        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/Administrador/administradoresCadastrados', $end);
        $this->load->view('estrutura/rodape');
    }
    
     public function listaEstado() { /** Nesta função eu só consigo exibir os dados da entidade */
        $this->load->Model('modelAdministrador', '', TRUE);
        $est['estados'] = $this->modelAdministrador->listarEstado();
        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/Administrador/administradoresCadastrados', $est);
        $this->load->view('estrutura/rodape');
    }

    public function listaCidade() { /** Nesta função eu só consigo exibir os dados da entidade */
        $this->load->Model('modelAdministrador', '', TRUE);
        $cid['cidades'] = $this->modelAdministrador->listarCidade();
        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/Administrador/administradoresCadastrados', $cid);
        $this->load->view('estrutura/rodape');
    }
    
    public function listaBairro() { /** Nesta função eu só consigo exibir os dados da entidade */
        $this->load->Model('modelAdministrador', '', TRUE);
        $bai['bairros'] = $this->modelAdministrador->listarBairro();
        $this->load->view('estrutura/cabecalho');
        $this->load->view('corpo/Administrador/administradoresCadastrados', $bai);
        $this->load->view('estrutura/rodape');
    }
    
    public function painel() {
        $this->load->view('estrutura/menuPainel');
        $this->load->view('corpo/corpoPainel');
        $this->load->view('estrutura/rodapePainel');
    }
}
