<?php

class ModelCarrinho extends CI_Model {

    public function getProduto($id_produto) {
        if ($id_produto) {
            $this->db->select('
                produto.idProduto,
                produto.nomeProduto,
                produto.valorUnitario,
                produto.peso,
                produto.imagem
            ');
            $this->db->from('produto');
            $this->db->where(['produto.disponibilidade' => 1, 
                'produto.idProduto' => $id_produto]);
            $this->db->limit(1);
            return $this->db->get()->row();
            
        }
    }

    /* /  public function abrirCarrinho($carrinho) {
      $this->db->insert('carrinho', $carrinho);
      $resultado = $this->db->get_where('carrinho', array('idCarrinho' => $this->db->insert_id()));
      if ($resultado->num_rows() > 0) {
      return $resultado->result();
      }
      return;
      }

      public function insereItem($itens, $idCarrinho) {
      $this->db->insert('produto_carrinho', $itens);
      $this->db->select('*');
      $this->db->from('produto_carrinho');
      $this->db->join('produto', 'produto.idProduto = produto_carrinho.idProduto');
      $this->db->where('produto_carrinho.idCarrinho =', $idCarrinho);
      $resultado = $this->db->get();
      if ($resultado->num_rows() > 0) {
      return $resultado->result();
      }
      return;
      }

      public function pegarUV($id) {
      $this->db->query("UPDATE carrinho
      set total = (SELECT SUM(valorTotal) FROM produto_carrinho WHERE idCarrinho = $id)
      WHERE idCarrinho = $id");
      $resultado = $this->db->get_where('carrinho', array('idCarrinho' => $id));
      if ($resultado->num_rows() > 0) {
      return $resultado->result();
      }
      return;
      }

      public function excluirItem($idVenda, $idItem) {
      $this->db->delete('itensvenda', array('idVenda' => $idVenda, 'idItem' => $idItem));
      $this->db->select('*');
      $this->db->from('itensvenda');
      $this->db->join('cameras', 'cameras.idCamera = itensvenda.idCamera');
      $this->db->where('itensvenda.idVenda =', $idVenda);
      $resultado = $this->db->get();
      if ($resultado->num_rows() > 0) {
      return $resultado->result();
      }
      return;
      } */
}
