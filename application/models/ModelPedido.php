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

    //Função que atualiza o status do pedido.
    public function doUpdate($dados = NULL, $id_pedido = NULL) {

        if (is_array($dados)) {

            $this->db->update('pedido', $dados, array('idPedido' => $id_pedido));
        }
    }

    //   $this->db->select('pedido_item.nome_Item, pedido_item.quantidade, '
    //           . 'pedido_item.valorUnitario, pedido_item.valor_Total_Item');
    //   $this->db->from('pedido_item');
    //   $this->db->where('id', 1);
    //   $this->db->limit(1);
    //   return $this->db->get()->row();
    //Função que pega os itens do pedido tendo como base a pessoa que fez o pedido e que utiliza o id do pedido como referência.

    public function getItens() {

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

    public function getCliente($email, $senha) {
        $query = $this->db->get_where('cliente', array('email' => $email, 'senha' => $senha));
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function listaPedido($id) { // Está função captura lista de registros armazenados no banco para que possam ser manipulados.
        $resultado = $this->db->get_where('pedido', array('idPedido' => $id));
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }

    public function alterarPedido($id, $pedido) {
        return $this->db->update('pedido', $pedido, array('idPedido' => $id));
    }
    
     public function excluirPedido($id) {
         $this->db->delete('pedido', array('idPedido' => $id));
         return $this->db->delete('pedido_item', array('idPedido' => $id));
    }

}
