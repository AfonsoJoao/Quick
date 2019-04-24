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

/*    public function salvarLista($dados = NULL) {
        if ($dados != NULL) {
            $this->db->insert('salvarlista', $dados);
            return $this->db->insert_id();
        }
    }
    public function salvarItemLista($dados = NULL) {
        if ($dados != NULL) {
            $this->db->insert('salvarlista_item', $dados);
        }
    }*/
}
