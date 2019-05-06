<title>Quick - Detalhes do produto</title>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="OneTech shop project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- js -->
        <script src="<?php echo base_url('js/jquery-1.11.1.min.js'); ?>"></script> <!-- Plugin do jquery--> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap4/bootstrap.min.css') ?>">
        <link href="<?php echo base_url('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') ?>" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('plugins/OwlCarousel2-2.2.1/owl.carousel.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('plugins/OwlCarousel2-2.2.1/animate.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('plugins/slick-1.8.0/slick.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/shop_styles.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/shop_responsive.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/main_styles.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/responsive.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/product_styles.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/product_responsive.css') ?>">


        <link href="<?php echo base_url('css/carrinho.css'); ?>" rel="stylesheet" type="text/css" media="all"/>

        <link href="<?php echo base_url('css/font-awesome.css'); ?>" rel="stylesheet" type="text/css" media="all" /> 

        <!-- //font-awesome icons -->

        <!-- //js -->
        <link href="<?php echo base_url('//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic'); ?>" rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url('//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'); ?>" rel='stylesheet' type='text/css'>
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="<?php echo base_url('js/move-top.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/easing.js'); ?>"></script>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->

        <script>

            function excluirLista(id, nome) {
                if (confirm('Deseja excluir a lista: ' + nome)) {
                    location.href = "<?php echo base_url('ControllerCliente/excluirLista'); ?>" + "/" + id;
                }
            }
        </script>
    </head>

    <body>

        <div class="super_container">

            <!-- Header -->

            <header class="header">

                <!-- Top Bar -->

                <div class="top_bar">
                    <div class="container">
                        <div class="row">
                            <div class="col d-flex flex-row">
                                <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="<?php echo base_url('application/images/icones/phone.png') ?>" alt=""></div>+XX XXXXX.XXXX</div>
                                <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="<?php echo base_url('application/images/icones/mail.png') ?>" alt=""></div>quicksupermercados.contato@gmail.com</div>
                                <div class="top_bar_content ml-auto">


                                    <?php
                                    if (!isset($_SESSION['usuario_logado'])) {
                                        ?>
                                        <div class="top_bar_user">
                                            <div class = "user_icon"><img src = "<?php echo base_url('application/images/icones/user.svg') ?>" alt = ""></div>
                                            <div><a href = "<?php echo base_url('login/'); ?>">Entre</a></div>
                                            <div><a href = "<?php echo base_url('cadastroclientes/'); ?>">Cadastre-se&nbsp;
                                                    &nbsp;
                                                </a></div>
                                        </div>
                                        <?php
                                    } else {
                                        ?> 

                                        <ul class="navbar-nav d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                                            <li class="nav-item dropdown no-arrow">
                                                <a class="nav-link dropdown-toggle" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-user-circle fa-fw fa-2x"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                                    <a class="dropdown-item" href="<?php echo base_url('editarConta') ?>">Editar conta</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="<?php echo base_url('historicoDeCompras') ?>">Histórico de compras</a>
                                                    <?php /* <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="<?php echo base_url('listassalvas')?>">Listas salvas</a> */ ?>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="<?php echo base_url('logout') ?>">Sair</a>
                                                </div>
                                            </li>
                                        </ul>
                                        <?php
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>		
                </div>

                <!-- Header Main -->

                <div class="header_main">
                    <div class="container">
                        <div class="row">

                            <!-- Logo -->
                            <div class="col-lg-2 col-sm-3 col-3 order-1">
                                <div class="logo_container">
                                    <div class="logo"><a href="<?php echo base_url('index') ?>"><img src="<?php echo base_url('application/images/Logo-Quick.png') ?>" width="150" height="150"></a></div>
                                </div>
                            </div>

                            <!-- Search -->
                            <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                                <div class="header_search">
                                    <div class="header_search_content">
                                        <div class="header_search_form_container">
                                            <form action="<?php echo base_url('resultadodabusca/') ?>" class="header_search_form clearfix"  method="post">
                                                <input type="search" name="busca" class="header_search_input" placeholder="Procurar por um produto...">
                                                <div class="">
                                                    <div class="">
                                                        <span class="custom_dropdown_placeholder clc"></span>
                                                        <ul class="custom_list clc">

                                                        </ul>
                                                    </div>
                                                </div>
                                                <button type="submit" class="header_search_button trans_300" value="Submit"><img src="<?php echo base_url('application/images/icones/search.png') ?>" alt=""></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Wishlist -->
                            <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                                <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">


                                    <!-- Cart -->
                                    <div class="cart">
                                        <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                            <div class="cart_icon">
                                                <img src="<?php echo base_url('application/images/icones/cart.png') ?>" alt="">
                                                <div class="cart_count"><span class="carrinho-top-total-item">0</span></div>
                                            </div>
                                            <div class="cart_content">
                                                <div class="dropdown">
                                                    <div class="w3l_header_right">
                                                        <ul>
                                                            <li class="dropdown profile_details_drop">
                                                                <a href="#" class="dropdown" data-toggle="dropdown" role="button" data-hover="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <span class="caret">Carrinho</span></a>

                                                                <ul class="dropdown-menu carrinho-compra">

                                                                    <div class="row body-carrinho-vazio">
                                                                        <div class="col-xs-12 col-md-12 text-center">
                                                                            Carrinho está vazio
                                                                        </div>  
                                                                    </div>

                                                                    <div class="row body-carrinho-top d-none">
                                                                        <div class="col-xs-12 col-md-4" >
                                                                            Itens: <span class="carrinho-top-total-item"></span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-md-8 text-right" >
                                                                            Total: <span class="carrinho-top-total-valor"></span>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Separador de submenus  -->
                                                                    <div class="row margin-top-20 btns-carrinho-topo d-none">

                                                                        <div class="col-xs-12 col-md-6">
                                                                            <a href="<?= base_url('ControllerCarrinho/carrinho') ?>" title="Exibir Carrinho" class="btn btn-success btn-block">Exibir Carrinho</a>
                                                                        </div>
                                                                        <div class="col-xs-12 col-md-6"> <!-- O col-xs-6 coloca botÃµes um ao lado do outro  -->
                                                                            <a href="#" class="btn btn-danger btn-block btn-limpar-carrinho">Limpar</a>
                                                                        </div>
                                                                    </div>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="cart_price"><span class="carrinho-top-total-valor d-none"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="<?php echo base_url('js/carrinho.js'); ?>"></script>

                <script type="text/javascript">
            var url_quick = "<?= base_url() ?>";
                </script>


                <div class="row msg-add-carrinho d-none"> <!-- o Hide serve para deixar a classe invisivel -->
                    <div class="col-md-12 msg-carrinho-alert text-center">

                    </div> 
                </div>

                <!-- Main Navigation -->

                <nav class="main_nav">
                    <div class="container">
                        <div class="row">
                            <div class="col">

                                <div class="main_nav_content d-flex flex-row">

                                    <!-- Categories Menu -->

                                    <div class="cat_menu_container">
                                        <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                            <div class="cat_burger"><span></span><span></span><span></span></div>
                                            <div class="cat_menu_text">categorias</div>
                                        </div>

                                        <ul class="cat_menu">
                                            <li class="hassubs">
                                                <a href="#">Alimentação<i class="fas fa-chevron-right"></i></a>
                                                <ul>
                                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/arroz'); ?>">Arroz<i class="fas fa-chevron-right"></i></a></li>
                                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/feijao'); ?>">Feijão<i class="fas fa-chevron-right"></i></a></li>
                                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/sal'); ?>">Sal<i class="fas fa-chevron-right"></i></a></li>
                                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/acucar'); ?>">Açucar<i class="fas fa-chevron-right"></i></a></li>
                                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/massas'); ?>">Massas<i class="fas fa-chevron-right"></i></a></li>
                                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/oleos'); ?>">Oléos<i class="fas fa-chevron-right"></i></a></li>
                                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/laticinios'); ?>">Laticínios<i class="fas fa-chevron-right"></i></a></li>
                                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/paes'); ?>">Pães<i class="fas fa-chevron-right"></i></a></li>
                                                </ul>
                                            </li>
                                            <li class="hassubs">
                                                <a href="#">Frios<i class="fas fa-chevron-right"></i></a>
                                                <ul>
                                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/carnes'); ?>">Carnes<i class="fas fa-chevron-right"></i></a></li>
                                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/aves'); ?>">Aves<i class="fas fa-chevron-right"></i></a></li>
                                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/peixes'); ?>">Peixes<i class="fas fa-chevron-right"></i></a></li>
                                                </ul>
                                            </li>
                                            <li class="hassubs">
                                                <a href="#">Hortifruti<i class="fas fa-chevron-right"></i></a>
                                                <ul>
                                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/frutas'); ?>">Frutas<i class="fas fa-chevron-right"></i></a></li>
                                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/vegetais'); ?>">Vegetais<i class="fas fa-chevron-right"></i></a></li>
                                                </ul>
                                            </li>
                                            <li class="hassubs">
                                                <a href="#">Bebidas<i class="fas fa-chevron-right"></i></a>
                                                <ul>
                                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/alcoolicas'); ?>">Alcoólicas<i class="fas fa-chevron-right"></i></a></li>
                                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/naoalcoolicas'); ?>">Não alcoólicas<i class="fas fa-chevron-right"></i></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="<?php echo base_url('ControllerCategorias/listaCate/limpeza'); ?>">Produtos de limpeza <i class="fas fa-chevron-right ml-auto"></i></a></li>
                                            <li><a href="<?php echo base_url('ControllerCategorias/listaCate/higiene'); ?>">Higiene<i class="fas fa-chevron-right"></i></a></li>
                                            <li><a href="<?php echo base_url('ControllerCategorias/listaCate/pet'); ?>">Pets<i class="fas fa-chevron-right"></i></a></li>
                                        </ul>
                                    </div>

                                    <!-- Main Nav Menu -->
                                    <div class="main_nav_menu ml-auto">
                                        <ul class="standard_dropdown main_nav_dropdown">
                                            <li><a href="<?php echo base_url('index') ?>">Início<i class="fas fa-chevron-down"></i></a></li>
                                            <!-- Barras de menus das categorias-->
                                            <?php if ($this->uri->segment(3) == 'arroz') { ?>
                                                <li><a>Arroz<i class="fas fa-chevron-down"></i></a></li>
                                                <title>Quick - Categoria Arroz</title>
                                            <?php } else if ($this->uri->segment(3) == 'feijao') { ?>
                                                <li><a>Feijão<i class="fas fa-chevron-down"></i></a></li>
                                                <title>Quick - Categoria Feijão</title>
                                            <?php } else if ($this->uri->segment(3) == 'sal') { ?>
                                                <li><a>Sal<i class="fas fa-chevron-down"></i></a></li>
                                                <title>Quick - Categoria Sal</title>
                                            <?php } else if ($this->uri->segment(3) == 'acucar') { ?>
                                                <li><a>Açucar<i class="fas fa-chevron-down"></i></a></li>
                                                <title>Quick - Categoria Açucar</title>
                                            <?php } else if ($this->uri->segment(3) == 'massas') { ?>
                                                <li><a>Massas<i class="fas fa-chevron-down"></i></a></li>
                                                <title>Quick - Categoria Massa</title>
                                            <?php } else if ($this->uri->segment(3) == 'oleos') { ?>
                                                <li><a>Oléos<i class="fas fa-chevron-down"></i></a></li>
                                                <title>Quick - Categoria Oléos</title>
                                            <?php } else if ($this->uri->segment(3) == 'laticinios') { ?>
                                                <li><a>Laticínios<i class="fas fa-chevron-down"></i></a></li>
                                                <title>Quick - Categoria Laticínios</title>
                                            <?php } else if ($this->uri->segment(3) == 'paes') { ?>
                                                <li><a>Pães<i class="fas fa-chevron-down"></i></a></li>
                                                <title>Quick - Categoria Pães</title>
                                            <?php } else if ($this->uri->segment(3) == 'carnes') { ?>
                                                <li><a>Carnes<i class="fas fa-chevron-down"></i></a></li>
                                                <title>Quick - Categoria Carnes</title>
                                            <?php } else if ($this->uri->segment(3) == 'aves') { ?>
                                                <li><a>Aves<i class="fas fa-chevron-down"></i></a></li>
                                                <title>Quick - Categoria Aves</title>
                                            <?php } else if ($this->uri->segment(3) == 'peixes') { ?>
                                                <li><a>Peixes<i class="fas fa-chevron-down"></i></a></li>
                                                <title>Quick - Categoria Peixes</title>
                                            <?php } else if ($this->uri->segment(3) == 'vegetais') { ?>
                                                <li><a>Vegetais<i class="fas fa-chevron-down"></i></a></li>
                                                <title>Quick - Categoria Vegetais</title>
                                            <?php } else if ($this->uri->segment(3) == 'frutas') { ?>
                                                <li><a>Frutas<i class="fas fa-chevron-down"></i></a></li>
                                                <title>Quick - Categoria Frutas</title>
                                            <?php } else if ($this->uri->segment(3) == 'alcoolicas') { ?>
                                                <li><a>Bebidas alcoólicas<i class="fas fa-chevron-down"></i></a></li>
                                                <title>Quick - Categoria Alcoólicas</title>
                                            <?php } else if ($this->uri->segment(3) == 'naoalcoolicas') { ?>
                                                <li><a>Bebidas não alcoólicas<i class="fas fa-chevron-down"></i></a></li>
                                                <title>Quick - Categoria Não alcoólicas</title>
                                            <?php } else if ($this->uri->segment(3) == 'limpeza') { ?>
                                                <li><a>Produtos de limpeza<i class="fas fa-chevron-down"></i></a></li>
                                                <title>Quick - Categoria Produtos de limpeza</title>
                                            <?php } else if ($this->uri->segment(3) == 'higiene') { ?>
                                                <li><a>Higiene<i class="fas fa-chevron-down"></i></a></li>
                                                <title>Quick - Categoria Higiene</title>
                                            <?php } else if ($this->uri->segment(3) == 'pet') { ?>
                                                <li><a>Pets<i class="fas fa-chevron-down"></i></a></li>
                                                <title>Quick - Categoria Pets</title>
                                            <?php } ?>
                                            <!-- //Barras de menu das categorias -->
                                            <!-- Barras de menu do login e cadastro e listagem dos cliente -->
                                            <?php if ($this->uri->segment(1) == 'login') { ?>
                                                <li><a>Login<i class="fas fa-chevron-down"></i></a></li>
                                                <title>Quick - Login</title>
                                            <?php } else if ($this->uri->segment(1) == 'cadastroclientes') { ?>
                                                <title>Quick - Cadastro de cliente</title>
                                                <li><a>Cadastro de clientes<i class="fas fa-chevron-down"></i></a></li>
                                            <?php } else if ($this->uri->segment(1) == 'listacliente') { ?>
                                                <div class="products-breadcrumb">
                                                    <div class="container">
                                                        <ul>
                                                            <i class="fa fa-home" aria-hidden="true"></i><li><a href=<?php echo base_url('index') ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Início</a><span>|</span></li>
                                                            <li><?php echo "Clientes cadastrados"; ?></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            <?php } else if ($this->uri->segment(1) == 'resultadodabusca') { ?>
                                                <!-- //Barras de menu do login e cadastro dos cliente -->
                                                <!-- //Barras de menu da tela de pesquisa -->
                                                <li><a>Resultado da busca<i class="fas fa-chevron-down"></i></a></li>
                                                <title>Quick - Resultado da busca</title>
                                            <?php } ?>
                                            <!-- //Barras de menu da tela de pesquisa -->
                                        </ul>
                                    </div>

                                    <!-- Menu Trigger -->

                                    <div class="menu_trigger_container ml-auto">
                                        <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                            <div class="menu_burger">
                                                <div class="menu_trigger_text">menu</div>
                                                <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Menu -->

                <div class="page_menu">
                    <div class="container">
                        <div class="row">
                            <div class="col">

                                <div class="page_menu_content">

                                    <div class="page_menu_search">
                                        <form action="<?php echo base_url('resultadodabusca/') ?>" method="post" >
                                            <input type="search" name="busca" class="page_menu_search_input" placeholder="Procurar por um produto...">
                                        </form>
                                    </div>
                                    <ul class="page_menu_nav">
                                        <li class="page_menu_item"><a href = "<?php echo base_url('login/'); ?>">Entre</a></li>
                                        <li class="page_menu_item"><a href = "<?php echo base_url('cadastroclientes/'); ?>">Cadastre-se&nbsp;
                                                &nbsp;
                                            </a></i></a></li>
                                    </ul>

                                    <div class="menu_contact">
                                        <div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+XX XXXXX.XXXX</div>
                                        <div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div>quicksupermercados.contato@gmail.com</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </header>





            <!-- Single Product -->

            <div class="single_product">
                <div class="container">
                    <div class="row">
                        <?php
                        if (isset($produto)) {
                            foreach ($produto as $produto) {
                                ?>
                                <?php if ($produto->disponibilidade == 1) { ?>
                                    <!--Image -->
                                    <div class="col-lg-5 order-lg-2 order-1">
                                        <div class="image_selected"><img src="<?php echo base_url('application/images/' . $produto->imagem) ?>" alt=""></div>
                                    </div>

                                    <!-- Description -->
                                    <div class="col-lg-5 order-3">
                                        <div class="product_description">
                                            <div class="product_name"><?php echo $produto->nomeProduto; ?></div>
                                            <div class="product_text"><p><?php echo $produto->descricaoProduto ?></p></div>
                                            <div class="order_info d-flex flex-row">
                                                <form action="#">


                                                    <div class="product_price"><?= formataMoedaReal($produto->valorUnitario, TRUE) ?></div>
                                                    <div class="button_container">
                                                        <h1><a href="#" title="Adicionar produtos carrinho" 
                                                               class="btn btn-primary btn-lg btn-add-produto-carrinho"
                                                               data-id="<?= $produto->idProduto ?>">&nbsp;<i class="fa fa-shopping-cart"></i><font size="3">&nbsp;&nbsp;Adicionar ao Carrinho&nbsp;&nbsp; </font></a></h1>
                                                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- Newsletter -->

            <div class="newsletter">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
                                <div class="newsletter_title_container">
                                    <div class="newsletter_icon"><img src="images/send.png" alt=""></div>
                                    <div class="newsletter_title">Sign up for Newsletter</div>
                                    <div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
                                </div>
                                <div class="newsletter_content clearfix">
                                    <form action="#" class="newsletter_form">
                                        <input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
                                        <button class="newsletter_button">Subscribe</button>
                                    </form>
                                    <div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->

            <footer class="footer">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 footer_col">
                            <div class="footer_column footer_contact">
                                <div class="logo_container">
                                    <div class="logo"><a href="#">OneTech</a></div>
                                </div>
                                <div class="footer_title">Got Question? Call Us 24/7</div>
                                <div class="footer_phone">+38 068 005 3570</div>
                                <div class="footer_contact_text">
                                    <p>17 Princess Road, London</p>
                                    <p>Grester London NW18JR, UK</p>
                                </div>
                                <div class="footer_social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                                        <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 offset-lg-2">
                            <div class="footer_column">
                                <div class="footer_title">Find it Fast</div>
                                <ul class="footer_list">
                                    <li><a href="#">Computers & Laptops</a></li>
                                    <li><a href="#">Cameras & Photos</a></li>
                                    <li><a href="#">Hardware</a></li>
                                    <li><a href="#">Smartphones & Tablets</a></li>
                                    <li><a href="#">TV & Audio</a></li>
                                </ul>
                                <div class="footer_subtitle">Gadgets</div>
                                <ul class="footer_list">
                                    <li><a href="#">Car Electronics</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="footer_column">
                                <ul class="footer_list footer_list_2">
                                    <li><a href="#">Video Games & Consoles</a></li>
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Cameras & Photos</a></li>
                                    <li><a href="#">Hardware</a></li>
                                    <li><a href="#">Computers & Laptops</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="footer_column">
                                <div class="footer_title">Customer Care</div>
                                <ul class="footer_list">
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Order Tracking</a></li>
                                    <li><a href="#">Wish List</a></li>
                                    <li><a href="#">Customer Services</a></li>
                                    <li><a href="#">Returns / Exchange</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Product Support</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </footer>

            <!-- Copyright -->

            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                                <div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </div>
                                <div class="logos ml-sm-auto">
                                    <ul class="logos_list">
                                        <li><a href="#"><img src="images/logos_1.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/logos_2.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/logos_3.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/logos_4.png" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="<?php echo base_url('js/jquery-3.3.1.min.js') ?>"></script>
        <script src="<?php echo base_url('css/bootstrap4/popper.js') ?>"></script>
        <script src="<?php echo base_url('css/bootstrap4/bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('plugins/greensock/TweenMax.min.js') ?>"></script>
        <script src="<?php echo base_url('plugins/greensock/TimelineMax.min.js') ?>"></script>
        <script src="<?php echo base_url('plugins/scrollmagic/ScrollMagic.min.js') ?>"></script>
        <script src="<?php echo base_url('plugins/greensock/animation.gsap.min.js') ?>"></script>
        <script src="<?php echo base_url('plugins/greensock/ScrollToPlugin.min.js') ?>"></script>
        <script src="<?php echo base_url('plugins/OwlCarousel2-2.2.1/owl.carousel.js') ?>"></script>
        <script src="<?php echo base_url('plugins/slick-1.8.0/slick.js') ?>"></script>
        <script src="<?php echo base_url('plugins/easing/easing.js') ?>"></script>


        <script src="<?php echo base_url('plugins/Isotope/isotope.pkgd.min.js') ?>"></script>
        <script src="<?php echo base_url('plugins/jquery-ui-1.12.1.custom/jquery-ui.js') ?>"></script>
        <script src="<?php echo base_url('plugins/parallax-js-master/parallax.min.js') ?>"></script>
        <script src="<?php echo base_url('js/shop_custom.js') ?>"></script>

    </body>

</html>
