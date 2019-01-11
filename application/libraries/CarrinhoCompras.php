<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CarrinhoCompras {
    
public function __construct() {
    //Verifica se já existe o carrinho criado na sessão
    if (!isset($_SESSION['carrinho'])){
        $_SESSION['carrinho'] = [];
    }
}

//Adicionar produtos ao carrinho
    public function add($id, $qtd){
        if (isset($_SESSION['carrinho'][$id] )) { //Se o produto já existir no carrinho
            $_SESSION['carrinho'] [$id] = $_SESSION['carrinho'][$id] + $qtd; //adicione novamente de um por um.
   
        }  else {
            $_SESSION['carrinho'][$id] = $qtd; //exiba a quantidade de produtos.
        }
        
    }
    
    //Altera a quantidade
    public function altera($id, $qtd){ 
        if (isset($_SESSION['carrinho'][$id] )) { //se a sessão carrinho existir é porque tem produtos
            if ($qtd > 0){ // Se a quantidade de produtos for maior que zero
                $_SESSION['carrinho'][$id] = $qtd; // exibe essa quantidade. 
               
            }  else {
                $this->apaga($id);
            }
            
        }
        
    }
    
    //Apagar Produto
    public function apaga($id){
        unset($_SESSION['carrinho'][$id]);
        
    }
    
    //Limpar Carrinho
    public function limpa(){
        unset($_SESSION['carrinho']);
    }


    //Listar os Produtos
    public function listarProdutos(){
        
    }
    
    //Total do Carrinho
    public function total(){
        
    }
    
    //Total Peso Produtos
    public function totalPeso(){
        
    }
    
    //Total de Item
    public function totalItem(){
        
    }



    /*/public function carrinho() {
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
    } */

}

