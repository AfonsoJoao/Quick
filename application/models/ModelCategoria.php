<?php

class ModelCategoria extends CI_Model{

    public function listarCategoria($categoria){
     $resultado = $this->db->get_where('produto', array('categoria' => $categoria));
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }
}
