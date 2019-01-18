<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CarrinhoCompras {

    public function __construct() {
        //Verifica se já existe o carrinho criado na sessão
        if (!isset($_SESSION['carrinho'])) {
            $_SESSION['carrinho'] = [];
        }
    }

//Adicionar produtos ao carrinho
    public function add($id, $qtd) {
        if (isset($_SESSION['carrinho'][$id])) { //Se o produto já existir no carrinho
            $_SESSION['carrinho'] [$id] = $_SESSION['carrinho'][$id] + $qtd; //adicione novamente de um por um.
        } else {
            $_SESSION['carrinho'][$id] = $qtd; //exiba a quantidade de produtos.
        }
    }

    //Altera a quantidade
    public function altera($id, $qtd) {
        if (isset($_SESSION['carrinho'][$id])) { //se a sessão carrinho existir é porque tem produtos
            if ($qtd > 0) { // Se a quantidade de produtos for maior que zero
                $_SESSION['carrinho'][$id] = $qtd; // exibe essa quantidade. 
            } else {
                $this->apaga($id);
            }
        }
    }

    //Apagar Produto
    public function apaga($id) {
        unset($_SESSION['carrinho'][$id]);
    }

    //Limpar Carrinho
    public function limpa() {
        unset($_SESSION['carrinho']);
    }

    //Listar os Produtos
    public function listarProdutos() {
        $CI = & get_instance(); //Serve para criar uma instância de um controller e assim realizar as acões que o controller faz.
        $CI->load->model('modelCarrinho');

        $retorno = [];
        $indice = 0;

        foreach ($_SESSION['carrinho'] as $id => $qtd) {

            $query = $CI->modelCarrinho->getProduto($id); //Retorno da consulta ao modelo carrinho com as informações dos produtos.

            $retorno[$indice]['id'] = $query->idProduto;
            $retorno[$indice]['nome'] = $query->nomeProduto;
            $retorno[$indice]['valor'] = $query->valorUnitario;
            $retorno[$indice]['qtd'] = $qtd;
            $retorno[$indice]['subtotal'] = number_format($qtd * $query->valorUnitario, 2, '.', '');
            $retorno[$indice]['peso'] = $query->peso;

            $indice++;
        }
        return $retorno;
    }

    //Total do Carrinho
    public function total() {
        $produto = $this->listarProdutos();
        $total = 0;

        foreach ($produto as $indice => $linha) {
            $total += $linha['subtotal'];
        }
        return $total;
    }

    //Total Peso Produtos
    public function totalPeso() {
        $produto = $this->listarProdutos();
        $total = 0;
        
        foreach ($produto as $indice => $linha) {
            $total += $linha['peso'];
        }
        return $total;
    }

    //Total de Item
    public function totalItem() {
        $produto = $this->listarProdutos();
        return count($produto);
    }

    /* /public function carrinho() {
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
