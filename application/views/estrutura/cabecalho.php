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
                                                        <a class="dropdown-item" href="<?php echo base_url('editarConta')?>">Editar conta</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="<?php echo base_url('historicoDeCompras')?>">Histórico de compras</a>
                                                        <?php /*<div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="<?php echo base_url('listassalvas')?>">Listas salvas</a>*/?>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="<?php echo base_url('logout')?>">Sair</a>
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
