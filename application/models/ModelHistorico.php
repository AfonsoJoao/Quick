<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelHistorico
 *
 * @author Mateus
 */
class ModelHistorico extends CI_Model {

    public function getHistorico() {

        $resultado = $this->db->get_where('pedido', array('email' => $_SESSION['email']));
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }
    
    public function getDadosItens($id_pedido){
        
        $resultado = $this->db->get_where('pedido_item', array('idPedido' => $id_pedido));
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
        
    }

}
