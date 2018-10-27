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
    
    public function buscaPorEmailSenhaCliente($email, $senha){
        $usuario = $this->db->get_where('cliente', array('email' => $email, 'senhaCliente' => $senha));
        if($usuario -> num_rows() > 0){
            return $usuario->result();
        }
        return;
    }
}
