<?php

class ModelCategoria extends CI_Model{

    public function listarCategoria($categoria, $registros_p_pagina){
     $resultado = $this->db->get_where('produto', array('categoria' => $categoria));
     $this->db->limit($registros_p_pagina);
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }
    
    function qtde_produto(){
        $this->db->select('count(*) as total');
        return $this->db->get('produto')->result();
    }
    
    function get_produto($value, $registros_p_pagina){
        $this->db->select('*');
        $this->db->limit($registros_p_pagina, $value);
        return $this->db->get('produto')->result();

    }
}
