<!-- Characteristics -->
<title>Quick - Início</title>
<!-- Hot New Arrivals -->

<div class="new_arrivals">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="tabbed_container">
                    <div class="tabs clearfix tabs-right">
                        <div class="new_arrivals_title">Produtos em destaque</div>
                        <ul class="clearfix">
                            <li class="active"></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <div class="tabs_line"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12" style="z-index:1;">
                            <!-- Product Panel -->
                            <div class="product_panel panel active">
                                <div class="arrivals_slider slider">
                                    <?php
                                    if (isset($produto)) {
                                        foreach ($produto as $produto) {
                                            ?>
                                            <?php if ($produto->disponibilidade == 1) { ?>
                                                <?php if ($produto->tipoDestaque == 2 || $produto->tipoDestaque == 3) { ?>
                                                    <!-- Slider Item -->
                                                    <div class="arrivals_slider_item">
                                                        <div class="border_active"></div>
                                                        <?php if ($produto->tipoDestaque == "2") { ?>
                                                            <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                            <?php } else { ?>
                                                                <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                                <?php } ?>
                                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url('application/images/' . $produto->imagem) ?>" alt=""></div>
                                                                <div class="product_content">
                                                                    <div class="product_price"><?= formataMoedaReal($produto->valorUnitario, TRUE) ?></div>
                                                                    <div class="product_name"><div><a href="<?php echo base_url("controllerProduto/unicoProduto/$produto->idProduto") ?>"><?= $produto->nomeProduto ?></a></div></div>
                                                                    <div class="product_extras">
                                                                        <a href="#" title="Adicionar produtos carrinho" 
                                                                   class="btn btn-primary btn-block btn-add-produto-carrinho"
                                                                   data-id="<?= $produto->idProduto ?>"><i class="fa fa-shopping-cart"></i><font size="3">&nbsp;&nbsp;Adicionar ao Carrinho </font></a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product_marks">
                                                                    <?php if ($produto->tipoDestaque == "2") { ?>
                                                                    <li class="product_mark product_discount"><?php echo $produto->valorPromocao;?>%</li>
                                                                    <?php }?>
                                                                    <li class="product_mark product_new">new</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="arrivals_slider_dots_cover"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>		
    </div>
    <!-- Popular Categories -->

    <div class="popular_categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="popular_categories_content">
                        <div class="popular_categories_title">Categorias</div>
                        <div class="popular_categories_slider_nav">
                            <div class="popular_categories_prev popular_categories_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                            <div class="popular_categories_next popular_categories_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Categories Slider -->

                <div class="col-lg-9">
                    <div class="popular_categories_slider_container">
                        <div class="owl-carousel owl-theme popular_categories_slider">

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="<?php echo base_url('application/images/icones/comida-icon.png')?>" alt=""></div>
                                    <div class="popular_category_text">Alimentação</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="<?php echo base_url('application/images/icones/frios-icon.png')?>" alt=""></div>
                                    <div class="popular_category_text">Frios</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="<?php echo base_url('application/images/icones/hortifruti-icon.png')?>" alt=""></div>
                                    <div class="popular_category_text">Hortifruti</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="<?php echo base_url('application/images/icones/bebidas-icon.png')?>" alt=""></div>
                                    <div class="popular_category_text">Bebidas</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="<?php echo base_url('application/images/icones/produtos-icon.png')?>" alt=""></div>
                                    <div class="popular_category_text">Limpeza</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="<?php echo base_url('application/images/icones/higiene-icon.png')?>" alt=""></div>
                                    <div class="popular_category_text">Higiene</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="<?php echo base_url('application/images/icones/pets-icon.png')?>" alt=""></div>
                                    <div class="popular_category_text">Pets</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	

