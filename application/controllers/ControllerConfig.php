<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControllerConfig
 *
 * @author Mateus
 */
class ControllerConfig extends CI_Controller {

    public function pagseguro() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email');
        $this->form_validation->set_rules('token', 'Token', 'trim|required');

        if ($this->form_validation->run() == TRUE) {

            $dadosPagSeguro['email'] = $this->input->post('email');
            $dadosPagSeguro['token'] = $this->input->post('token');
            $dadosPagSeguro['a_vista'] = $this->input->post('a_vista');
            $dadosPagSeguro['cartao'] = $this->input->post('cartao');
            //  $dadosPagSeguro['data_atualizacao'] = dataDiaDb();

            $this->load->Model('modelConfig', '', TRUE);
            $this->modelConfig->doUpdatePagseguro($dadosPagSeguro);
            redirect('pagseguro', 'refresh');
            
            //$msn ['mensagens'] = "Configuração atualizada com Sucesso!";
           // $this->load->view('estrutura/menuPainel');
           // $this->load->view('corpo/Config/corpoConfigPagSeguro', $msn);
           // $this->load->view('estrutura/rodapePainel');
            
        } else {
            $this->load->Model('modelConfig', '', TRUE);
            $config['query'] = $this->modelConfig->getConfigPagseguro();

            $this->load->view('estrutura/menuPainel');
            $this->load->view('corpo/Config/corpoConfigPagSeguro', $config);
            $this->load->view('estrutura/rodapePainel');
        }
    }

}
