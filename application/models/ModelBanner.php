<?php

class ModelBanner extends CI_Model {

    public function inserirBanner($banner) {
        return $this->db->insert('banner', $banner);
    }

    public function listarBanner() {
        $resultado = $this->db->get('banner');
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }

    public function listaBanner($id) {
        $resultado = $this->db->get_where('banner', array('idBanner' => $id));
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }

    public function alterarBanner($id, $banner) {
        return $this->db->update('banner', $banner, array('idBanner' => $id));
    }

    public function excluirBanner($id) {
        return $this->db->delete('banner', array('idBanner' => $id));
    }
}
