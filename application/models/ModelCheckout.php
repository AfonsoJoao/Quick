<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelCheckout
 *
 * @author Mateus
 */
class ModelCheckout extends CI_Model {

    public function insertcliente($dados = NULL) {
        if ($dados != NULL) {
            $this->db->insert('cliente', $dados);
            return $this->db->insert_id();
        }
    }

    /*  public function getCliente($id) { // Está função captura lista de registros armazenados no banco para que possam ser manipulados.

      public function addEndereco($dados = NULL){
      if($dados != NULL){
      $this->db->insert('endereco', $dados);
      return $this->db->insert_id();
      }
      }
      } */

    

    public function inserirpedidoitem($pedido) {
        $this->db->select('idPedido');
        $this->db->from('pedido');
        $this->db->where($id_pedido = 'idPedido');
        return $this->db->insert('pedido_item', $id_pedido, $pedido)->result();
    }

}
