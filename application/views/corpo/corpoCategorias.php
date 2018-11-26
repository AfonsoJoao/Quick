<div class="clearfix"></div>
<!-- banner -->
<!-- top-brands -->
<div class="top-brands">
    <div class="container">
        <h3>categoria</h3>
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
                                                        <a href="#"><img src=<?php echo base_url('application/images/' . $produto->imagem) ?> width="140px" height="140px"></a>
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
                                                            <?php echo $produto->idProduto;?>
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

