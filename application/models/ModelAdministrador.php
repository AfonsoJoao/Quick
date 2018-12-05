<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelAdministrador
 *
 * @author Mateus
 */
class ModelAdministrador extends CI_Model {

    public function inserirAdministrador($dados) {
        $this->db->insert('administrador', $dados);
      /*$this->db->insert('endereco', $endereco);
        $this->db->insert('estado', $estado);
        $this->db->insert('cidade', $cidade);
        $this->db->select('#');
        $this->db->from('cidade');
        $this->db->join('bairro', 'bairro.idCidade = cidade.idCidade');        
        $this->db->where('bairro.idCidade =', $cidade);
        $this->db->join('bairro', 'bairro.idCidade = cidade.idCidade');
        $this->db->insert('bairro', $bairro); */
    }

    public function listarAdministrador() { // Está função apenas exibe a lista de registros armazenados em uma entidade do banco
        $resultado = $this->db->get('administrador');
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }
    
    
     public function listaAdministrador($id) { // Está função captura lista de registros armazenados no banco para que possam ser manipulados.
        $resultado = $this->db->get_where('administrador', array('idAdministrador' => $id));
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }
    
    public function alterarAdministrador($id, $dados) {
        return $this->db->update('administrador', $dados, array('idAdministrador' => $id));
    }
    
     public function excluirAdministrador($id) {
        return $this->db->delete('administrador', array('idAdministrador' => $id));
    }
    
    public function listarEndereco() { // Está função apenas exibe a lista de registros armazenados em uma entidade do banco
        $resultado = $this->db->get('endereco');
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }
    
    public function listarEstado() { // Está função apenas exibe a lista de registros armazenados em uma entidade do banco
        $resultado = $this->db->get('estado');
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }

    public function listarCidade() { // Está função apenas exibe a lista de registros armazenados em uma entidade do banco
        $resultado = $this->db->get('cidade');
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }
    
     public function listarBairro() { // Está função apenas exibe a lista de registros armazenados em uma entidade do banco
        $resultado = $this->db->get('bairro');
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }

}
