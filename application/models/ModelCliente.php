<?php

class ModelCliente extends CI_Model {

    public function inserirCliente($cliente) {
        return $this->db->insert('cliente', $cliente);
    }
    
    public function listarClientes() {
        $resultado = $this->db->get('cliente');
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }

}
