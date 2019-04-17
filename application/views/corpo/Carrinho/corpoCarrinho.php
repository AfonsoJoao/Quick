<!-- about -->

<br>
<br><br>
<?php
                    if (isset($situacao)) {
                        $st = $situacao;
                        ?>
                        <script> alert('<?php echo $st; ?>');</script>
                        <?php
                        unset($situacao);
                    }
                    ?>
<?php if ($this->carrinhocompras->totalItem() == 0) { ?>

    <center><i class="fa fa-shopping-cart fa-5x"></i></center><br>

    <div class="text-center"><h3>Seu Carrinho de Compras está vazio</h3></div><br>

    <center> <a href="<?= base_url() ?>" title="Pagina Principal" class="btn btn-default btn-lg">
            <i class="fa fa-reply-all"></i> Página Principal
        </a></center>

    <br>
<?php } else { ?>

    <div class="col-md-6">
        <h2>Carrinho Compras <?= '(total de item ' . $this->carrinhocompras->totalItem() . ')' ?> </h2>
    </div><br><br>
    <hr><br>

    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Descrição</th>
                    <th class="text-right">Valor</th>
                    <th class="text-center">Quantidade</th>
                    <th class="text-right">Subtotal</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($carrinho as $indice => $linha) { ?> <!-- exibe a lista de produtos do carrinho através do foreach -->
                    <tr>
                        <td><?= $linha['nome'] ?></td>
                        <td class="text-right"><?= formataMoedaReal ($linha['valor'], TRUE) ?></td>
                        <td class="text-center">
                            <div class="form-group">
                            <input type="tel" name="carrinho_qtd" class="input-carrinho-qtd" value="<?= $linha['qtd'] ?>"
                                   id="produto_<?= $linha['id'] ?>">
                            <a href="#" title="Atualizar quantidade" class="btn-qtd-produto-carrinho" 
                               data-id="<?= $linha['id'] ?>">
                                <i class="fa fa-undo"></i>
                            </a>
                            </div>
                            
                        </td>
                        <td class="text-right"><?= formataMoedaReal ($linha['subtotal'], TRUE) ?></td> <!-- OBS: Depois colocar no formato moeda real -->
                        <td class="text-center"><a href="#" title="Apagar Produto" class="btn-apagar-produto-carrinho" 
                                                   data-id="<?= $linha['id'] ?>"><i class="fa fa-trash-o fa-2x"></i></a></td>

                    </tr>
                <?php } // Fim da lista produtos carrinho ?>

            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="text-right">Total Carrinho</td>
                    <td class="text-right total-carrinho"><?= formataMoedaReal ($this->carrinhocompras->total(), TRUE) ?></td>

                </tr>

                <!-- A funcão peso não é necessaria ser exibida carrinho foi usada no curso só
                para questão de aprendizagem -->

                                    <!-- <tr>
                                        <td colspan="3" class="text-right">Total Peso</td>
                                        <td class="text-right total-carrinho"><? //= $this->carrinhocompras->totalPeso() ?></td>
                                        
                                    </tr> -->

            </tfoot>

        </table>
        <br><br>
    </div>

    <div class="row">
            <div class="col">
                <a href="<?= base_url() ?>" title="Continuar Comprando" class="btn btn-default btn-lg">
                    <i class="fa fa-reply-all"></i> Continuar Comprando
                </a>
                </div>
         <div class="col-7">
                <a href="<?= base_url('ControllerCarrinho/limpa_carrinho') ?>" title="Limpar Carrinho" class="btn btn-default btn-lg"> Limpar Carrinho</a>
                 </div>
                <div class="col">
                <a href="<?= base_url('checkout') ?>" title="Finalizar compra" class="btn btn-success btn-lg">
                    <i class="fa fa-check"></i> Finalizar Compra
                </a>
            </div>       
        </div>
    </div>
<?php
		if (isset($_SESSION['usuario_logado'])) {
                                            ?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Salvar Lista</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Salvar nova lista</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<?php echo form_open('ControllerCarrinho/salvarLista'); ?>
                <?php $_SESSION['lista'] = array(); ?>
                
		 <?php foreach ($carrinho as $indice => $linha) { ?>
                  <?php
                  
                                array_push($_SESSION ['lista'], array(
                                'idProduto' => $linha['id']
                                        )
                                ); 
                                
                                ?>
                                <?php }?>
                		
                 <?php
                        if (isset($clientes)) {
                            foreach ($clientes as $cliente) {
                                ?>
                                <input type="hidden" name="idCliente" value="<?php echo $cliente->idCliente; ?>">
                            <?php
                            }
                        }
                        ?>
          <div class="form-group">
            <input type="text" class="form-control" name="nomeLista" placeholder="Nome da lista"value="">
          </div>
           <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Salvar lista</button>
      </div>
      <?php echo form_close(); 
             }?>
          </div>
    </div>
  </div>
</div>

<?php } // fim do carrinho ?>

<br><br>



<!--	<div class="privacy about">
                <h3><span>Finalizar Compra</span></h3>
                
      <div class="checkout-right">
                                <h4>Your shopping cart contains: <span>3 Products</span></h4>
                        <table class="timetable_sub">
                                <thead>
                                        <tr>
                                                <th>SL No.</th>	
                                                <th>Product</th>
                                                <th>Quality</th>
                                                <th>Product Name</th>
                                        
                                                <th>Price</th>
                                                <th>Remove</th>
                                        </tr>
                                </thead>
                                <tbody><tr class="rem1">
                                        <td class="invert">1</td>
                                        <td class="invert-image"><a href="single.html"><img src="images/1.png" alt=" " class="img-responsive"></a></td>
                                        <td class="invert">
                                                 <div class="quantity"> 
                                                        <div class="quantity-select">                           
                                                                <div class="entry value-minus">&nbsp;</div>
                                                                <div class="entry value"><span>1</span></div>
                                                                <div class="entry value-plus active">&nbsp;</div>
                                                        </div>
                                                </div>
                                        </td>
                                        <td class="invert">Fortune Sunflower Oil</td>
                                        
                                        <td class="invert">$290.00</td>
                                        <td class="invert">
                                                <div class="rem">
                                                        <div class="close1"> </div>
                                                </div>

                                        </td>
                                </tr>
                                <tr class="rem2">
                                        <td class="invert">2</td>
                                        <td class="invert-image"><a href="single.html"><img src="images/3.png" alt=" " class="img-responsive"></a></td>
                                        <td class="invert">
                                                 <div class="quantity"> 
                                                        <div class="quantity-select">                           
                                                                <div class="entry value-minus">&nbsp;</div>
                                                                <div class="entry value"><span>1</span></div>
                                                                <div class="entry value-plus active">&nbsp;</div>
                                                        </div>
                                                </div>
                                        </td>
                                        <td class="invert">Basmati Rise (5 Kg)</td>
                                
                                        <td class="invert">$250.00</td>
                                        <td class="invert">
                                                <div class="rem">
                                                        <div class="close2"> </div>
                                                </div>

                                        </td>
                                </tr>
                                <tr class="rem3">
                                        <td class="invert">3</td>
                                        <td class="invert-image"><a href="single.html"><img src="images/2.png" alt=" " class="img-responsive"></a></td>
                                        <td class="invert">
                                                 <div class="quantity"> 
                                                        <div class="quantity-select">                           
                                                                <div class="entry value-minus">&nbsp;</div>
                                                                <div class="entry value"><span>1</span></div>
                                                                <div class="entry value-plus active">&nbsp;</div>
                                                        </div>
                                                </div>
                                        </td>
                                        <td class="invert">Pepsi Soft Drink (2 Ltr)</td>
                                        
                                        <td class="invert">$15.00</td>
                                        <td class="invert">
                                                <div class="rem">
                                                        <div class="close3"> </div>
                                                </div>

                                        </td>
                                </tr>

                        </tbody></table>
                </div>
                <div class="checkout-left">	
                        <div class="col-md-4 checkout-left-basket">
                                <h4>Continue to basket</h4>
                                <ul>
                                        <li>Product1 <i>-</i> <span>$15.00 </span></li>
                                        <li>Product2 <i>-</i> <span>$25.00 </span></li>
                                        <li>Product3 <i>-</i> <span>$29.00 </span></li>
                                        <li>Total Service Charges <i>-</i> <span>$15.00</span></li>
                                        <li>Total <i>-</i> <span>$84.00</span></li>
                                </ul>
                        </div>
                        <div class="col-md-8 address_form_agile">
                                  <h4>Add a new Details</h4>
                        <form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
                                                                <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                                                                        <div class="information-wrapper">
                                                                                <div class="first-row form-group">
                                                                                        <div class="controls">
                                                                                                <label class="control-label">Full name: </label>
                                                                                                <input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
                                                                                        </div>
                                                                                        <div class="w3_agileits_card_number_grids">
                                                                                                <div class="w3_agileits_card_number_grid_left">
                                                                                                        <div class="controls">
                                                                                                                <label class="control-label">Mobile number:</label>
                                                                                                            <input class="form-control" type="text" placeholder="Mobile number">
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="w3_agileits_card_number_grid_right">
                                                                                                        <div class="controls">
                                                                                                                <label class="control-label">Landmark: </label>
                                                                                                         <input class="form-control" type="text" placeholder="Landmark">
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="clear"> </div>
                                                                                        </div>
                                                                                        <div class="controls">
                                                                                                <label class="control-label">Town/City: </label>
                                                                                         <input class="form-control" type="text" placeholder="Town/City">
                                                                                        </div>
                                                                                                <div class="controls">
                                                                                                                <label class="control-label">Address type: </label>
                                                                                             <select class="form-control option-w3ls">
                                                                                                                                                                                <option>Office</option>
                                                                                                                                                                                <option>Home</option>
                                                                                                                                                                                <option>Commercial</option>
                                                
                                                                                                                                                                </select>
                                                                                                </div>
                                                                                </div>
                                                                                <button class="submit check_out">Delivery to this Address</button>
                                                                        </div>
                                                                </section>
                                                        </form>
                                                                <div class="checkout-right-basket">
                                        <a href="payment.html">Make a Payment <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                        </div>
                                </div>
                
                        <div class="clearfix"> </div>
                        
                </div>

        </div> -->
<!-- //about -->

