<?php

class ModelProduto extends CI_Model {

    public function inserirProduto($produto) {
        return $this->db->insert('produto', $produto);
    }

    public function listarProduto() {
        $resultado = $this->db->get('produto');
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }

    public function listaProduto($id) {
        $resultado = $this->db->get_where('produto', array('idProduto' => $id));
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }

    public function alterarProduto($id, $produto) {
        return $this->db->update('produto', $produto, array('idProduto' => $id));
    }

    public function excluirProduto($id) {
        return $this->db->delete('produto', array('idProduto' => $id));
    }

    public function getProdutoCategoria($categoria) {
        $this->output->enable_profiler(TRUE);
        return $this->db->get_where('produto', array('categoria' => $categoria))->result_array();
    }

    public function buscar($busca) {
        if (empty($busca)) 
            return array();
        
        $busca = $this->input->post('busca');
        $this->db->like('nomeProduto', $busca);
        $query = $this->db->get('produto');
        return $query->result_array();
    }
    
   function qtde_produto(){
        $this->db->select('count(*) as total');
        return $this->db->get('produto')->result();
    }
    
    function get_produto($value, $registros_p_pagina){
        $this->db->select('*');
        $this->db->limit( $registros_p_pagina, $value);
        return $this->db->get('produto')->result();
    }
}
