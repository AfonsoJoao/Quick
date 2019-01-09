<div class="clearfix"></div>

<!-- banner -->
<!-- top-brands -->
<div class="top-brands">
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
                <?php if ($produto->disponibilidade == "true") { ?>

                    <div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">
                        <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asdfdfd">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <div class="snipcart-details">
                                                        <a href="<?php echo base_url("controllerProduto/unicoProduto/$produto->idProduto") ?>"><img src="<?php echo base_url('application/images/' . $produto->imagem) ?>" width="140px" height="140px"></a>
                                                        <p><?php echo $produto->nomeProduto; ?></p>
                                                        <h4><?php echo "R$ " . $produto->valorUnitario; ?></h4>
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
                                                            <input type="hidden" name="idProduto" value="<?php echo $produto->idProduto; ?>" />
                                                            <input type="submit" name="submit" value="Adicionar ao carrinho" class="button" />
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


<?php

