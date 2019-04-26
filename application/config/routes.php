<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
  | -------------------------------------------------------------------------
  | URI ROUTING
  | -------------------------------------------------------------------------
  | This file lets you re-map URI requests to specific controller functions.
  |
  | Typically there is a one-to-one relationship between a URL string
  | and its corresponding controller class/method. The segments in a
  | URL normally follow this pattern:
  |
  |	example.com/class/method/id/
  |
  | In some instances, however, you may want to remap this relationship
  | so that a different class/function is called than the one
  | corresponding to the URL.
  |
  | Please see the user guide for complete details:
  |
  |	https://codeigniter.com/user_guide/general/routing.html
  |
  | -------------------------------------------------------------------------
  | RESERVED ROUTES
  | -------------------------------------------------------------------------
  |
  | There are three reserved routes:
  |
  |	$route['default_controller'] = 'welcome';
  |
  | This route indicates which controller class should be loaded if the
  | URI contains no data. In the above example, the "welcome" class
  | would be loaded.
  |
  |	$route['404_override'] = 'errors/page_missing';
  |
  | This route will tell the Router which controller/method to use if those
  | provided in the URL cannot be matched to a valid route.
  |
  |	$route['translate_uri_dashes'] = FALSE;
  |
  | This is not exactly a route, but allows you to automatically route
  | controller and method names that contain dashes. '-' isn't a valid
  | class or method name character, so it requires translation.
  | When you set this option to TRUE, it will replace ALL dashes in the
  | controller and method URI segments.
  |
  | Examples:	my-controller/index	-> my_controller/index
  |		my-controller/my-method	-> my_controller/my_method
 */
$route['default_controller'] = 'Controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Rota da página principal do sistema
$route ['index'] = 'Controller/index';

//Rotas do cadastro, alteração, lista e exclusão de clientes
$route ['cadastroclientes'] = 'ControllerCliente/cadcliente';
$route ['listacliente'] = 'ControllerCliente/listaCliente';

//Rota da alteração, lista e exclusão de produtos
$route ['listaproduto'] = 'ControllerProduto/listaProduto';
$route ['cadproduto'] = 'ControllerProduto/cadProduto';
$route ['getcat'] = 'ControllerProduto/getCategoria/';

//rota do login e logout cliente
$route ['login'] = 'ControllerLogin/login';
$route ['logout'] = 'ControllerLogin/logoutCliente';
$route ['sair'] = 'ControllerLogin/logoutOperador';
$route ['logouff'] = 'ControllerLogin/logoutAdministrador';


//Rota do cadastro, alteração, listagem e exclusão de operador
$route ['cadastrooperador'] = 'ControllerOperador/cadoperador';
$route ['listaoperador'] = 'ControllerOperador/listaOperador';

//Rota do cadastro, alteração, listagem e exclusão do administrador.
$route ['cadastroadministrador'] = 'ControllerAdministrador/cadadministrador';
$route ['listaadmnistrador'] = 'ControllerAdministrador/listaAdministrador';

//Rota do cadastro, alteração, listaggem e exclusão dos banners
$route ['listabanner'] = 'ControllerBanner/listaBanner';
$route ['cadbanner'] = 'ControllerBanner/cadBanner';

//Rota para tela de resultados dos produtos procurados
$route ['resultadodabusca'] = 'ControllerProduto/buscarProduto';
$route ['resultadodabuscaProdutosCadastrados'] = 'ControllerProduto/buscarProdutosCadastrados';
//Rota para tela de administrador
$route ['paineladministrativo'] = 'ControllerAdministrador/painel';

//Rota para para a pagina do cliente logado
$route ['cliente'] = 'ControllerLogin/loginfeitoCliente';

//Rota para para a pagina do administrador logado
$route ['administrador'] = 'ControllerLogin/loginfeitoAdministrador';

//Rota para para a pagina do operador logado
$route ['operador'] = 'ControllerLogin/loginfeitoOperador';

// Rota da Configuração do PagSeguro
$route ['pagseguro'] = 'ControllerConfig/pagseguro';

$route ['pedidos'] = 'ControllerPedido/pedido';

// Rota para o checkout

$route ['checkout'] = 'ControllerCheckout/checkout';

//Rota para tela de recuperar senha
$route ['recuperarsenha'] = 'ControllerCliente/recuperarSenha';

$route ['editarConta'] = 'ControllerCliente/listaUnicoCliente';

//Rota para o historico de compras
$route ['historicoDeCompras'] = 'ControllerHistorico/historico';

//Rota para a tela de listas salvas
//$route ['listassalvas'] = 'ControllerCliente/listasSalvas';
//Rota para para a pagina das categorias dos produtos com o cliente logado
// $route ['categorias'] = 'ControllerCategoriasLogado/loginfeitoCliente';

// $route ['categ'] = 'Controller/loginfeitoCliente';





