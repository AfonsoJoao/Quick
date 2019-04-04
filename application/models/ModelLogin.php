<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelLogin
 *
 * @author Mateus
 */
class ModelLogin extends CI_Model {

    public function buscaPorEmailSenhaCliente($email, $senha) {
        $query = $this->db->get_where('cliente', array('email' => $email, 'senha' => $senha));
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {

            $query = $this->db->get_where('operador', (array('email' => $email, 'senha' => $senha)));
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                $query = $this->db->get_where('administrador', array('email' => $email, 'senha' => $senha));
                if ($query->num_rows() > 0) {
                    return $query->result();
                }
            }


            return;
        }
    }

}
    