<div class="w3l_banner_nav_right">
<div class="agileinfo_single">
    <?php
        if (isset($produto)) {
            foreach ($produto as $produto) {
                ?>
                <?php if ($produto->disponibilidade == 1) { ?>
				<h5><?php echo $produto->nomeProduto; ?></h5>
				<div class="col-md-4 agileinfo_single_left">
					<img id="example" src="<?php echo base_url('application/images/' . $produto->imagem) ?>" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-8 agileinfo_single_right">
					<div class="w3agile_description">
						<h4>Descrição :</h4>
						<p><?php echo $produto->descricaoProduto ?></p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4><?php echo "R$ " . $produto->valorUnitario; ?></h4>
						</div>
						<div class="snipcart-details agileinfo_single_right_details">
							<form action="#" method="post">
								<fieldset>
									<input type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
                <?php
                }
            }
            ?>
        <?php } ?>
		<div class="clearfix"></div>