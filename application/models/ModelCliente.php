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

    public function listaCliente() { // Está função captura lista de registros armazenados no banco para que possam ser manipulados.
        $resultado = $this->db->get_where('cliente', array('email' => $_SESSION['email']));
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

    public function buscarEmail($email) {
        $query = $this->db->get_where('cliente', array('email' => $email));
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function alterarSenhaCliente($nscriptografada, $email) {
        $this->db->set('senha', $nscriptografada);
        $this->db->where('email', $email);
        return $this->db->update('cliente');
    }

}
