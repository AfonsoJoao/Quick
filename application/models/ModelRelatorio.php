<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelRelatorio
 *
 * @author Mateus
 */
class ModelRelatorio extends CI_Model {

    public function getPedido($getData) {

        $this->db->where('data_Pedido', $getData);
        return $this->db->get('pedido')->result();
    }

}
