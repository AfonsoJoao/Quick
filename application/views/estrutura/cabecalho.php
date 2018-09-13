<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <title>Quick - Inicio</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        
        <!-- Obs: Caso não der certo configurar adicionar a pasta application as referencias do css -->
        
        <link href="<?php echo base_url('css/bootstrap.css');?>" rel="stylesheet" type="text/css" media="all"/>
        
        <link href="<?php echo base_url('css/style.css');?>" rel="stylesheet" type="text/css" media="all" />
        
        <!-- font-awesome icons -->
        <link href="<?php echo base_url('css/font-awesome.css');?>" rel="stylesheet" type="text/css" media="all" /> 
        
        <!-- //font-awesome icons -->
        <!-- js -->
        <script src="<?php echo base_url('js/jquery-1.11.1.min.js');?>"></script>
        
        <!-- //js -->
        <link href='<?php echo base_url('//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic');?> rel='stylesheet' type='text/css'>
        <link href='<?php echo base_url('//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic');?> rel='stylesheet' type='text/css'>
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="<?php echo base_url('js/move-top.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/easing.js');?>"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->
    </head>
    <body>
        <!-- header -->
        <div class="agileits_header">
            <div class="w3l_offers">
                <a>-------------------</a>
            </div>
            <div class="w3l_search">
                <form action="#" method="post">
                    <input type="text" name="Product" value="Buscar produtos..." onfocus="this.value = '';" onblur="if (this.value == '') {
                                this.value = 'Search a product...';
                            }" required="">
                    <input type="submit" value=" ">
                </form>
            </div>
            <div class="product_list_header">  
                <form action="#" method="post" class="last">
                    <fieldset>
                        <input type="hidden" name="cmd" value="_cart" />
                        <input type="hidden" name="display" value="1" />
                        <input type="submit" name="submit" value="Seu carrinho  " class="button" />
                    </fieldset>
                </form>
            </div>
            <div class="w3l_header_right">
                <ul>
                    <li class="dropdown profile_details_drop">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
                        <div class="mega-dropdown-menu">
                            <div class="w3ls_vegetables">
                                <ul class="dropdown-menu drp-mnu">
                                    <li><a href="<?php echo base_url('login.php');?>">Entrar</a></li> 
                                    <li><a href="<?php echo base_url('ControllerCliente/cadcliente/');?>">Cadastrar</a></li>
                                    <li><a href="<?php echo base_url('ControllerCliente/listaClientes/');?>">Lista de Clientes</a></li>
                                </ul>
                            </div>                  
                        </div>	
                    </li>
                </ul>
            </div>
            <div class="w3l_header_right">
                <ul>
                    <li class="dropdown profile_details_drop">
                        <a><img src="<?php echo base_url('images/icone-branco.png');?>"/></a>
                        <div class="mega-dropdown-menu">
                            <div class="w3ls_vegetables">
                                <ul class="dropdown-menu drp-mnu">
                                    <li>
                                        <a href="<?php echo base_url('ControllerProduto/cadproduto/')?>">Cadastrar produtos</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('ControllerProduto/listadeProdutos/');?>">Produtos cadastrados</a>
                                    </li>
                                </ul>
                            </div>                  
                        </div>	
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- script-for sticky-nav -->
        <script>
            $(document).ready(function () {
                var navoffeset = $(".agileits_header").offset().top;
                $(window).scroll(function () {
                    var scrollpos = $(window).scrollTop();
                    if (scrollpos >= navoffeset) {
                        $(".agileits_header").addClass("fixed");
                    } else {
                        $(".agileits_header").removeClass("fixed");
                    }
                });

            });
        </script>
        <!-- //script-for sticky-nav -->
        <div class="logo_products">
            <div class="container">
                <div class="w3ls_logo_products_left">
                    <h1><a href="<?php echo base_url('Controller/index/')?>"><img src="<?php echo base_url('images/Logo-Quick2.jpg');?>" width="130" height="100"></a></h1>
                </div>
                <div class="w3ls_logo_products_left1">
                    <ul class="special_items">
                        <li><i class="fa fa-phone" aria-hidden="true"></i>(XX) XXXX-XXXX</li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i>TESTE@TESTE.COM</li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //header -->
        <!-- products-breadcrumb -->
        <div class="products-breadcrumb">
            <div class="container">
                <ul>
                    <li><img src="<?php echo base_url('Images/home.png');?>" width="25" height="20"><a href="<?php echo base_url('Controller/index/')?>">Inicio</a><span>|</span></li>
                    <li>**<span>|</span></li>
                    <li>**</li>
                </ul>
            </div>
        </div>

        <?php
        // put your code here
        ?>
    </body>
</html>
