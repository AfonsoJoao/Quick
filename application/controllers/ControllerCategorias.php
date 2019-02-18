<?php

class ControllerCategorias extends CI_Controller {

    public function listaCate($value=null) {
        $this->load->model("modelCategoria", '', TRUE);
        $this->load->model("modelBanner", '', TRUE);
        $Z['banner'] = $this->modelBanner->listarBanner();
        
        if($value==null){
             $value = 1;}
         $registros_p_pagina = 2;
         if($value <= $registros_p_pagina){
             $data['botaoA'] = 'disable';
         }else{
             $data['botaoA'] = '';
         }
        $this->load->model("ModelCategoria", '', TRUE);
        $u = $this->ModelCategoria->qtde_produto();
        
        if($u[0]->total-1 < $registros_p_pagina){
            $data['botaoP'] = 'disable';
         }else{
             $data['botaoP'] = '';
        }
        $dados['produto'] = $this->ModelCategoria->listarCategoria($this->uri->segment(3), $value, $registros_p_pagina);
        
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/barraMenu');
        $this->load->view('estrutura/banner', $Z);
        $this->load->view('corpo/corpoCategorias', $dados);
        $this->load->view('estrutura/rodape');
    }
    
   

}
