<!-- Characteristics -->
<title>Quick - Início</title>
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
                        <div class="col-lg-12">    

                            <!-- Shop Content -->

                            <div class="shop_content">
                                <div class="shop_bar clearfix">
                                    <div class="shop_product_count">Produtos em destaque</div>
                                </div>

                                <div class="product_grid">
                                    <div class="product_grid_border"></div>
                                    <?php
                                    if (isset($produto)) {
                                        foreach ($produto as $produto) {
                                            ?>
                                            <?php if ($produto->tipoDestaque == "Destacar como promoção" || $produto->tipoDestaque == "Apenas destacar") { ?>
                                            <?php if ($produto->disponibilidade == "disponivel") { ?>
                                                <!-- Product Item -->
                                               <?php if ($produto->tipoDestaque == "Destacar como promoção" || $produto->tipoDestaque == "Apenas destacar") { ?>
                                                    <div class="product_item discount">
                                                    <?php } else { ?>
                                                        <div class="product_item">
                                                        <?php } ?>
                                                        <div class="product_border"></div>
                                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url('application/images/' . $produto->imagem) ?>"  width="120px" height="120px" alt=""></div>
                                                        <div class="product_content">
                                                            <div class="product_price"><?= formataMoedaReal($produto->valorUnitario, TRUE) ?></div>
                                                            <div class="product_name"><div><a href="<?php echo base_url("controllerProduto/unicoProduto/$produto->idProduto") ?>" tabindex="0"><?= $produto->nomeProduto ?></a></div></div>
                                                        </div>
                                                        <br>
                                                                        <a href="#" title="Adicionar produtos carrinho" 
                                                                           class="btn btn-primary btn-md btn-add-produto-carrinho"
                                                                           data-id="<?= $produto->idProduto ?>"><i class="fa fa-shopping-cart"></i><font size="3">&nbsp;&nbsp;Adicionar</font></a>
                                                        <ul class="product_marks">
                                                                    <?php if ($produto->tipoDestaque == "Destacar como promoção") { ?>
                                                                        <li class="product_mark product_discount"><?php echo $produto->valorPromocao; ?>%</li>
                <?php } ?>
                                                                    <li class="product_mark product_new">new</li>
                                                                </ul>
                                                        <?php if ($produto->tipoDestaque == "Destacar como promoção") { ?>
                                                        </div>
                                                    <?php } else { ?>
                                                    </div>
                                                <?php } ?>

                                                <?php
                                                }
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