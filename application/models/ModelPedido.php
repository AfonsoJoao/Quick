<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelPedido
 *
 * @author Mateus
 */
class ModelPedido extends CI_Model {

    //Função que pega todos os pedidos que existem na tabela.
    public function getPedidos() {

        return $this->db->get('pedido')->result();
    }

    //Função que pega um pedido em especifico com base no id que foi passado.
    public function getPedidoId($id = NULL) {

        $this->db->where('idPedido', $id);
        $this->db->limit(1);
        return $this->db->get('pedido')->row();
    }

    public function getItens() { //Função que pega todos os itens do pedido

        return $this->db->get('pedido_item')->result();
    }

    public function getItensPedido($id_Pedido = NULL) { 

        if ($id_Pedido) {

            $this->db->where('idPedido', $id_Pedido);
            return $this->db->get('pedido_item')->result();
        }
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
    
    public function getCedulas($dados = NULL){
        if ($dados) {

            $this->db->where('idPedido', $dados);
            return $this->db->get('cedulas')->result();
        }
        
    } 

    public function getCliente($email, $senha) {
        $query = $this->db->get_where('cliente', array('email' => $email, 'senha' => $senha));
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function mudarStatus($id, $status) {
        $this->db->set('status', $status);
        $this->db->where('idPedido', $id);
        return $this->db->update('pedido');
    }

    public function cancelarPedido($id) {
        $this->db->set('status', "Cancelado");
        $this->db->where('idPedido', $id);
        return $this->db->update('pedido');
    }
}
