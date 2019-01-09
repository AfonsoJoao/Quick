<?php

class ModelCliente extends CI_Model {

    public function inserirCliente($cliente) {
        return $this->db->insert('cliente', $cliente);
    }
    
    
    public function listarCliente() { // Está função apenas exibe a lista de registros armazenados em uma entidade do banco
        $resultado = $this->db->get('cliente');
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }
    
     public function listaCliente($id) { // Está função captura lista de registros armazenados no banco para que possam ser manipulados.
        $resultado = $this->db->get_where('cliente', array('idCliente' => $id));
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }
    
    public function alterarCliente($id, $cliente) {
        return $this->db->update('cliente', $cliente, array('idCliente' => $id));
    }
    
     public function excluirCliente($id) {
        return $this->db->delete('cliente', array('idCliente' => $id));
    }

     public function recuperarSenha($dadosRecuperarSenha) {
        $this->db->select('idCliente, email');
        $this->db->from('cliente');
        $this->db->where('email', $dadosRecuperarSenha['email']);
        return $this->db->get()->result();
    }

    public function alterarNovaSenha($dadosNovaSenhaUsuario) {
        $this->db->set('senhaCliente', base64_encode($dadosNovaSenhaUsuario['senhaCliente']));
        $this->db->where('idCliente', $dadosNovaSenhaUsuario['idCliente']);
        return $this->db->update('cliente');
    }

}
