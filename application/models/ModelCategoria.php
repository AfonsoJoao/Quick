<?php

class ModelCategoria extends CI_Model{
    
    public function listarCategoria(){
     $resultado = $this->db->get('produto');
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }
}
