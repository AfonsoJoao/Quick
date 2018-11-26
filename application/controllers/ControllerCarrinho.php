<?php
session_start();
if(!isset($_SESSION['carrinho'])){
        
        $_SESSION['carrinho'] = array();
    }
class ControllerCarrinho extends CI_Controller {

    public function carrinho() {
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/banner');
        $this->load->view('corpo/corpoCarrinho');
        $this->load->view('estrutura/rodape');
    }

    public function addItem() {
        $this->load->Model('ModelProduto', '', TRUE);
       $idProduto = $_GET['idProduto'];
    if(!isset($_SESSION['carrinho'][$idProduto])){
        $_SESSION['carrinho'][$idProduto] = 1;
}else{$_SESSION['carrinho'][$idProduto] +=1;}
    }

}

