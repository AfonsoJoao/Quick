<html>
    <body>
        <script src="<?php echo base_url('js/carrinho.js'); ?>"></script>

        <script type="text/javascript">
            var url_quick = "<?= base_url() ?>";
        </script>

    </div>

    <div class="clearfix"></div>
</div>
<!-- banner -->
<!-- top-brands -->
<div class="top-brands">

    <div class="row msg-add-carrinho hide"> <!-- o Hide serve para deixar a classe invisivel -->
        <div class="col-md-12 msg-carrinho-alert text-center"> <!-- o Mensagem de alerta quando é adicionado produto no carrinho -->

        </div>  
    </div><br><br>

    <div class="container">
        <!-- texto de apresentação por categoria -->
        <?php if ($this->uri->segment(3) == 'arroz') { ?>
            <h3><?php echo "Arroz"; ?></h3>
        <?php } else if ($this->uri->segment(3) == 'feijao') { ?>
            <h3><?php echo "Feijão"; ?></h3>
        <?php } else if ($this->uri->segment(3) == 'sal') { ?>
            <h3><?php echo "Sal"; ?></h3>
        <?php } else if ($this->uri->segment(3) == 'acucar') { ?>
            <h3><?php echo "Açucar"; ?></h3>
        <?php } else if ($this->uri->segment(3) == 'massas') { ?>
            <h3><?php echo "Massas"; ?></h3>
        <?php } else if ($this->uri->segment(3) == 'oleos') { ?>
            <h3><?php echo "Oléos"; ?></h3>
        <?php } else if ($this->uri->segment(3) == 'laticineos') { ?>
            <h3><?php echo "Laticíneos"; ?></h3>
        <?php } else if ($this->uri->segment(3) == 'paes') { ?>
            <h3><?php echo "Pães"; ?></h3>
        <?php } else if ($this->uri->segment(3) == 'carnes') { ?>
            <h3><?php echo "Carnes"; ?></h3>
        <?php } else if ($this->uri->segment(3) == 'aves') { ?>
            <h3><?php echo "Aves"; ?></h3>
        <?php } else if ($this->uri->segment(3) == 'peixes') { ?>
            <h3><?php echo "Peixes"; ?></h3>
        <?php } else if ($this->uri->segment(3) == 'vegetais') { ?>
            <h3><?php echo "Vegetais"; ?></h3>
        <?php } else if ($this->uri->segment(3) == 'frutas') { ?>
            <h3><?php echo "Frutas"; ?></h3>
        <?php } else if ($this->uri->segment(3) == 'alcoolicas') { ?>
            <h3><?php echo "Alcoólicas"; ?></h3>
        <?php } else if ($this->uri->segment(3) == 'naoalcoolicas') { ?>
            <h3><?php echo "Não alcoólicas"; ?></h3>
        <?php } else if ($this->uri->segment(3) == 'limpeza') { ?>
            <h3><?php echo "Produtos de limpeza"; ?></h3>
        <?php } else if ($this->uri->segment(3) == 'higiene') { ?>
            <h3><?php echo "Higiene"; ?></h3>
        <?php } else if ($this->uri->segment(3) == 'pet') { ?>
            <h3><?php echo "Pet"; ?></h3>
        <?php } ?>
        <!-- //texto de apresentação por categoria -->



        <?php
        if (isset($produto)) {
            foreach ($produto as $produto) {
                ?>
                <?php if ($produto->disponibilidade == 1) { ?>

                    <div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">
                        <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asdfdfd">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                    <?php if ($produto->tipoDestaque == "2") { ?>
                                        <div class="agile_top_brand_left_grid_pos">
                                            <img src="<?php echo base_url('application/images/offer.png'); ?>" alt=" " class="img-responsive" />
                                        </div>
                                    <?php } ?>
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <div class="snipcart-details">
                                                        <a href="<?php echo base_url("controllerProduto/unicoProduto/$produto->idProduto") ?>"><img src="<?php echo base_url('application/images/' . $produto->imagem) ?>" width="140px" height="140px"></a>
                                                        <p><?= $produto->nomeProduto ?></p>
                                                        <h4><?= formataMoedaReal ($produto->valorUnitario, TRUE) ?></h4>
                                                        <br>
                                                        <div class="quantity"> 
                                                            <div class="quantity-select">                           
                                                                <div class="entry value-minus">&nbsp;</div>
                                                                <div class="entry value"><span>1</span></div>
                                                                <div class="entry value-plus active">&nbsp;</div>
                                                            </div>
                                                        </div>
                                                        <br> 

                                                        <fieldset>
                                                            <input type="hidden" name="idProduto" value="<?= $produto->idProduto ?>"/>
                                                            <a href="#" title="Adicionar produtos carrinho" 
                                                               class="btn btn-success btn-lg btn-block btn-add-produto-carrinho"
                                                               data-id="<?= $produto->idProduto ?>"><i class="fa fa-shopping-cart"></i> Adicionar ao Carrinho </a>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                        </figure>
                                    </div>  
                                </div>
                                <br>
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

</body>
</html>


<?php
