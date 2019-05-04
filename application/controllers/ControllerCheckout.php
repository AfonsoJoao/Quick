<?php

class ControllerCheckout extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('funcoes');
        $this->load->library('CarrinhoCompras');
        $this->load->library('session');
        $this->load->Model('modelPedido');
    }

    public function cadClienteCheckout() {
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/barraMenu');
        $this->load->view('corpo/Cliente/corpoCadClienteCheckout');
    }

    public function autenticarCliente() {
        $this->load->model('modelLogin', '', TRUE); // carrega o modelo model login
        $this->load->model('modelCliente', '', TRUE);
        $car ['carrinho'] = $this->carrinhocompras->listarProdutos();
        $email = $this->input->post('email'); // pega via post o email que veio do formulario
        $senha = base64_encode($this->input->post('senha')); // pega via post a senha que veio do formulario
        $login = $this->modelLogin->buscaPorEmailSenhaCliente($email, $senha);
        $_SESSION['email'] = $email;
        $car['cliente'] = $this->modelCliente->listaCliente();

        if (isset($login['0']->tipo)) {
            $tipo = ($login['0']->tipo);

            if ($tipo == "usuario") {

                if ($login) {
                    $this->session->set_userdata("usuario_logado", $login);
                    $this->load->view('estrutura/cabecalho');
                    $this->load->view('estrutura/barraMenu');
                    $this->load->view('corpo/Checkout/corpoCheckout', $car);
                }
            }
        } else {
            $this->session->set_flashdata("danger", "Usuário ou Senha Inválidos");
            $this->checkout();
        }
    }

    public function checkout() {
        $this->load->Model('modelCliente', '', TRUE);
        $car ['carrinho'] = $this->carrinhocompras->listarProdutos();
        if(isset($_SESSION['usuario_logado'])){
        $car ['cliente'] = $this->modelCliente->listaCliente();
        }
        $this->load->view('estrutura/cabecalho');
        $this->load->view('estrutura/barraMenu');
        $this->load->view('corpo/Checkout/corpoCheckout', $car);
    }

    public function enviarPedido() {
        $this->load->Model('modelCheckout', '', TRUE);
        $this->load->Model('modelPedido', '', TRUE);

        $endereco ['idCliente'] = $this->input->post('idCliente');
        $endereco ['nomeCliente'] = $this->input->post('nomeCliente');
        $endereco ['cpf'] = $this->input->post('cpf');
        $endereco ['email'] = $this->input->post('email');
        $endereco ['senha'] = $this->input->post('senha');
        $endereco ['telefone'] = $this->input->post('telefone');
        $endereco ['cep'] = $this->input->post('cep');
        $endereco ['endereco'] = $this->input->post('endereco');
        $endereco ['total_pedido'] = $this->input->post('total');
        $endereco ['status'] = $this->input->post('status');
        $endereco ['numero'] = $this->input->post('numero');
        $endereco ['complemento'] = $this->input->post('complemento');
        $endereco ['bairro'] = $this->input->post('bairro');
        $endereco ['cidade'] = $this->input->post('cidade');
        $endereco ['estado'] = $this->input->post('estado');
        $endereco ['forma_Envio'] = $this->input->post('forma_Envio');
        $endereco ['bandeira_cartao'] = $this->input->post('bandeira_cartao');
      
        $endereco ['cedulas'] = $this->input->post('cedulas');
        
        
        
        $endereco['data_Pedido'] = date('Y-m-d');
        $id_item = $this->modelPedido->insertpedido($endereco);


        foreach ($_SESSION ['dados'] as $produto) {

            $pedido ['nome_Item'] = $produto ['nome_Item'];
            $pedido ['valorUnitario'] = $produto ['valorUnitario'];
            $pedido ['quantidade'] = $produto ['quantidade'];
            $pedido ['subtotal'] = $produto ['subtotal'];
            $pedido ['idPedido'] = $id_item;

            $this->modelPedido->insert_pedido_item($pedido);
            $this->session->set_flashdata("success", "Pedido Realizado com Sucesso.");
        }

        $this->checkout();
    }

    public function atualizarPedido() {

        $endereco ['idCliente'] = $this->input->post('idCliente');
        $endereco['nomeCliente'] = $this->input->post('nomeCliente');
        $endereco['telefone'] = $this->input->post('telefone');
        $endereco ['cep'] = $this->input->post('cep');
        $endereco ['endereco'] = $this->input->post('endereco');
        $endereco ['numero'] = $this->input->post('numero');
        $endereco ['complemento'] = $this->input->post('complemento');
        $endereco ['bairro'] = $this->input->post('bairro');
        $endereco ['cidade'] = $this->input->post('cidade');
        $endereco ['estado'] = $this->input->post('estado');
        $endereco ['forma_Envio'] = $this->input->post('forma_Envio');


        if ($this->input->post('acao') == "alterar") {
            if ($this->modelPedido->alterarPedido($this->input->post('idPedido'), $endereco)) {
                $msn['situacao'] = "Dados alterados com Sucesso";
            } else {
                $msn['situacao'] = "Erro na Alteração dos Dados";
            }

            $this->load->view('estrutura/cabecalho');
            $this->load->view('corpo/Pedido/editarPedido', $msn);
            $this->load->view('estrutura/rodape');
        }
    }

}
