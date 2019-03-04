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

                        <div class="col-lg-12">    

                            <!-- Shop Content -->

                            <div class="shop_content">
                                <div class="shop_bar clearfix">
                                    <div class="shop_product_count">Produtos encontrados</div>
                                </div>
<?php echo form_open('ControllerProduto/buscarProduto'); ?>
                                <div class="product_grid">
                                    <div class="product_grid_border"></div>
                                    <?php
                                    if (isset($listagem)) {
                                        foreach ($listagem as $listagem) {
                                            ?>
                                            <?php if ($listagem['disponibilidade'] == 1) { ?>
                                                <!-- Product Item -->
                                                <?php if ($listagem['tipoDestaque'] == "2") { ?>
                                                    <div class="product_item discount">
                                                    <?php } else { ?>
                                                        <div class="product_item">
                                                        <?php } ?>
                                                        <div class="product_border"></div>
                                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url('application/images/' . $listagem['imagem']) ?>" alt=""></div>
                                                        <div class="product_content">
                                                            <div class="product_price"><?= formataMoedaReal($listagem['valorUnitario'], TRUE) ?></div>
                                                            <div class="product_name"><div><a href="#" tabindex="0"><?php echo $listagem['nomeProduto']; ?></a></div></div>
                                                        </div>
                                                        <br>
                                                        <h3><a href="#" title="Adicionar produtos carrinho" 
                                                               class="btn btn-primary btn-block btn-add-produto-carrinho"
                                                               data-id="<?= $listagem['idProduto'] ?>">&nbsp;<i class="fa fa-shopping-cart"></i><font size="3">&nbsp;&nbsp;Carrinho&nbsp;&nbsp; </font></a></h3>
                                                        <ul class="product_marks">
                                                            <li class="product_mark product_discount">-25%</li>
                                                            <li class="product_mark product_new">new</li>
                                                        </ul>
                                                        <?php if ($listagem['tipoDestaque'] == "2") { ?>
                                                        </div>
                                                    <?php } else { ?>
                                                    </div>
                                                <?php } ?>

                                                <?php
                                            }
                                        }
                                        ?>
                                    <?php } ?>
                                    <?php echo form_close(); ?>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>