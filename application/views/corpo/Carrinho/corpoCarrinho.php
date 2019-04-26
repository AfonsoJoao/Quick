<!-- about -->
<title>Quick - Carrinho de compras</title>
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

    <center> <a href="<?= base_url() ?>" title="Pagina Principal" class="btn btn-secondary btn-lg">
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
                        <td class="text-right"><?= formataMoedaReal($linha['valor'], TRUE) ?></td>
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
                        <td class="text-right"><?= formataMoedaReal($linha['subtotal'], TRUE) ?></td> <!-- OBS: Depois colocar no formato moeda real -->
                        <td class="text-center"><a href="#" title="Apagar Produto" class="btn-apagar-produto-carrinho" 
                                                   data-id="<?= $linha['id'] ?>"><i class="fas fa-trash fa-2x"></i></a></td>

                    </tr>
                <?php } // Fim da lista produtos carrinho ?>

            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="text-right">Total Carrinho</td>
                    <td class="text-right total-carrinho"><?= formataMoedaReal($this->carrinhocompras->total(), TRUE) ?></td>

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
            <a href="<?= base_url() ?>" title="Continuar Comprando" class="btn btn-secondary btn-lg">
                <i class="fa fa-reply-all"></i> Continuar Comprando
            </a>
        </div>
        <div class="col">
            <a href="<?= base_url('ControllerCarrinho/limpa_carrinho') ?>" title="Limpar Carrinho" class="btn btn-danger btn-lg"> Limpar Carrinho</a>
        </div>
        <div class="col">
            <a href="<?= base_url('checkout') ?>" title="Finalizar compra" class="btn btn-success btn-lg">
                <i class="fa fa-check"></i> Finalizar Compra
            </a>
        </div>       
    </div>
    </div>
    <?php
  //  if (isset($_SESSION['usuario_logado'])) {
        ?>
       <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Salvar Lista</button>

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
                        <?php//  echo form_open('ControllerCarrinho/salvarLista'); ?>
                        <?php// $_SESSION['lista'] = array(); ?>

                        <?php// foreach ($carrinho as $indice => $linha) { ?>
                            <?php
                           // array_push($_SESSION ['lista'], array(
                           //     'idProduto' => $linha['id']
                           //         )
                          //  );
                            ?>
                        <?php // } ?>

                        <?php
                       // if (isset($clientes)) {
                         //   foreach ($clientes as $cliente) {
                                ?>
                                <input type="hidden" name="idCliente" value="<?php// echo $cliente->idCliente; ?>">
                                <?php
                         //   }
                     //   }
                        ?>
                        <div class="form-group">
                            <input type="text" class="form-control" name="nomeLista" placeholder="Nome da lista"value="">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Salvar lista</button>
                        </div>
        <?php// echo form_close();
  //  }
    ?>
                </div>
            </div>
        </div>
    </div>  -->

 <?php } // fim do carrinho  ?>

<br><br>
