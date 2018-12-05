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
            
            $query = $this->db->get_where('operador',(array('email' => $email, 'senha' => $senha)));
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

        // public function buscaPorEmailSenhaOperador($email, $senha, $tipo) {
        //     $query = $this->db->select('tipo')->from('operador')->where(array('email' => $email, 'senha' => $senha, $tipo = 'tipo'));
        //     $query->num_rows();
        //     return $query->result();
    }

    public function buscaPorEmailSenhaAdministrador($email, $senha, $tipo) {
        $query = $this->db->select('tipo')->from('administrador')->where(array('email' => $email, 'senha' => $senha, $tipo = 'tipo'));
        $query->num_rows();
        return $query->result();
    }

    /*  public function buscaPorEmailSenhaOperador($email, $senha, $tipo){
      $usuario = $this->db->get_where('operador', array('email' => $email, 'senha' => $senha, 'tipo' => $tipo));
      if($usuario -> num_rows() > 0){
      return $usuario->result();
      }
      return;
      }

      public function buscaPorEmailSenhaAdministrador($email, $senha, $tipo){
      $usuario = $this->db->get_where('administrador', array('email' => $email, 'senha' => $senha, 'tipo' => $tipo));
      if($usuario -> num_rows() > 0){
      return $usuario->result();
      }
      return;
      } */
}
