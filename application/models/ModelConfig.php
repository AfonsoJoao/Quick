<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelConfig
 *
 * @author Mateus
 */
class ModelConfig extends CI_Model {

    /**
     * Função Pega Configuração PagSeguro
     */
    public function getConfigPagseguro() {

        $this->db->where('idConf', 1);
        $this->db->limit(1);
        $query = $this->db->get('confgpagseguro');
        return $query->row();
    }

    /*
     * Função para atualizar tabela config pagseguro.
     */

    public function doUpdatePagseguro($dadosPagSeguro = NULL) {

        if (is_array($dadosPagSeguro)) {

            $this->db->update('confgpagseguro', $dadosPagSeguro, array('idConf' => 1));

           // if ($this->db->affected_rows() > 0) {
           //     setMsg('msgCadastro', 'Configuração Atualizada com Sucesso', 'sucesso');
                        
                //$msn ['mensagens'] = "Configuração atualizada com Sucesso!";
                // redirect('pagseguro', 'refresh', $msn);
                // $this->load->view('estrutura/menuPainel');
                // $this->load->view('corpo/Config/corpoConfigPagSeguro', $msn);
                //  $this->load->view('estrutura/rodapePainel');
                
          //  } else {
          //      setMsg('msgCadastro', 'Erro ao Atualizar Configuração', 'erro');
                
         //   }
        }
    }
}
