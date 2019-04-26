
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/product_styles.css') ?>">
<!-- Single Product -->
<title>Quick - Detalhes do produto</title>
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
