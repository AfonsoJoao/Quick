<?php

class ModelProduto extends CI_Model{
    
    public function inserirProduto($produto){
        return $this->db->insert('produto', $produto);
    }
    public function listarProduto(){
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
}
