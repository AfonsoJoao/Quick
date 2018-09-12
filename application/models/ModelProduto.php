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
}
