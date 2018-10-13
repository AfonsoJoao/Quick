<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelOperador
 *
 * @author Mateus
 */
class ModelOperador extends CI_Model {
    
     public function inserirOperador($operador) {
        return $this->db->insert('operador', $operador);
    }
    
    public function listarOperador() { // Está função apenas exibe a lista de registros armazenados em uma entidade do banco
        $resultado = $this->db->get('operador');
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }
    
    public function listaOperador($id) { // Está função captura lista de registros armazenados no banco para que possam ser manipulados.
        $resultado = $this->db->get_where('operador', array('idOperador' => $id));
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }
    
    public function alterarOperador($id, $operador) {
        return $this->db->update('operador', $operador, array('idOperador' => $id));
    }
    
     public function excluirOperador($id) {
        return $this->db->delete('operador', array('idOperador' => $id));
    }
   
}
