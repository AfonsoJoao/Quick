<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="OneTech shop project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap4/bootstrap.min.css'); ?>">
        <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
        <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
        <link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/shop_styles.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/shop_responsive.css'); ?>">

    </head>

    <body>

        <div class="super_container">
            <!-- Shop -->

            <div class="shop">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">

                            <!-- Shop Sidebar -->
                            <div class="shop_sidebar">
                                <div class="sidebar_section">
                                    <div class="sidebar_title">Categorias</div>
                                    <ul class="sidebar_categories">
                                        <li><a href="#">Alimentação</a></li>
                                        <li><a href="#">Frios</a></li>
                                        <li><a href="#">Hortifruti</a></li>
                                        <li><a href="#">Bebidas</a></li>
                                        <li><a href="#">Produtos de limpeza</a></li>
                                        <li><a href="#">Higiene</a></li>
                                        <li><a href="#">Pets</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-9">    

                            <!-- Shop Content -->

                            <div class="shop_content">
                                <div class="shop_bar clearfix">
                                    <div class="shop_product_count"><span>186</span> produtos encontrados</div>
                                </div>

                                <div class="product_grid">
                                    <div class="product_grid_border"></div>
                                    <?php
                                    if (isset($produto)) {
                                        foreach ($produto as $produto) {
                                            ?>
                                            <?php if ($produto->disponibilidade == 1) { ?>
                                                <!-- Product Item -->
                                                <?php if ($produto->tipoDestaque == "2") { ?>
                                                    <div class="product_item discount">
                                                    <?php } else { ?>
                                                        <div class="product_item">
                                                        <?php } ?>
                                                        <div class="product_border"></div>
                                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url('application/images/' . $produto->imagem) ?>" alt=""></div>
                                                        <div class="product_content">
                                                            <div class="product_price"><?= formataMoedaReal($produto->valorUnitario, TRUE) ?></div>
                                                            <div class="product_name"><div><a href="#" tabindex="0"><?= $produto->nomeProduto ?></a></div></div>
                                                        </div>
                                                        <br>
                                                        <h3><a href="#" title="Adicionar produtos carrinho" 
                                                           class="btn btn-primary btn-block btn-add-produto-carrinho"
                                                           data-id="<?= $produto->idProduto ?>">&nbsp;<i class="fa fa-shopping-cart"></i><font size="3">&nbsp;&nbsp;Carrinho&nbsp;&nbsp; </font></a></h3>
                                                        <ul class="product_marks">
                                                            <li class="product_mark product_discount">-25%</li>
                                                            <li class="product_mark product_new">new</li>
                                                        </ul>
                                                        <?php if ($produto->tipoDestaque == "2") { ?>
                                                        </div>
                                                    <?php } else { ?>
                                                    </div>
                                                <?php } ?>

                                                <?php
                                            }
                                        }
                                        ?>
                                    <?php } ?>


                                </div>

                                <!-- Shop Page Navigation -->

                                <div class="shop_page_nav d-flex flex-row">
                                    <div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
                                    <ul class="page_nav d-flex flex-row">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">...</a></li>
                                        <li><a href="#">21</a></li>
                                    </ul>
                                    <div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>