<div class="clearfix"></div>
<!-- banner -->
<!-- top-brands -->
<div class="top-brands">
    <div class="container">
        <h3>Categoria</h3>
        <table class="table">
            <tbody>
                <?php
                if (isset($produto)) {
                    foreach ($produto as $produto) {
                        ?>
                        <?php $categoria = $produto->categoria; ?>
                    <div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">
                        <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <a href="#"><img src=<?php echo base_url('application/images/' . $produto->imagem) ?>></a>
                                                    <p><?php echo $produto->nomeProduto; ?></p>
                                                    <h4><?php echo "R$ " . $produto->valorUnitario; ?></h4>
                                                    <div class="snipcart-details">
                                                        <form action="#" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="cmd" value="_cart" />
                                                                <input type="hidden" name="add" value="1" />
                                                                <input type="hidden" name="business" value=" " />
                                                                <input type="hidden" name="item_name" value="can - tuna for cats" />
                                                                <input type="hidden" name="amount" value="8.00" />
                                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                                <input type="hidden" name="currency_code" value="USD" />
                                                                <input type="hidden" name="return" value=" " />
                                                                <input type="hidden" name="cancel_return" value=" " />
                                                                <input type="submit" name="submit" value="Adicionar ao carrinho" class="button" />
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                        </figure>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <tr></tr>

            <?php
        }
    }
    ?>
</tbody>
</table> 

</div>

</div>


<?php

