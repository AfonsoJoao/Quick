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

    public function insertcedulas($dados) {
        return $this->db->insert('cedulas', $dados);
        
    }

    //Função responável por salvar os dados do pedido e retornar o ultimo id inserido.
    public function insertpedido($dados = NULL) {
        if ($dados != NULL) {
            $this->db->insert('pedido', $dados);
            return $this->db->insert_id();
        }
    }

    //Função responsável por salvar os itens do pedido.
    public function insert_pedido_item($dados = NULL) {
        if ($dados != NULL) {
            $this->db->insert('pedido_item', $dados);
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
}
