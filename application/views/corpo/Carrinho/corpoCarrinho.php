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
        <h2>Carrinho Compras <?= '(Total de itens ' . $this->carrinhocompras->totalItem() . ')' ?> </h2>
    </div>
    <hr><br><br>

    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Descrição</th>
                    <th class="text-right">Valor Unitário</th>
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
        &nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col">
            <a href="<?= base_url() ?>" title="Continuar Comprando" class="btn btn-secondary btn-lg">
                <i class="fa fa-reply-all"></i> Continuar Comprando
            </a>
        </div>
        <div class="col" align="center">
            <a href="<?= base_url('ControllerCarrinho/limpa_carrinho') ?>" title="Limpar Carrinho" class="btn btn-danger btn-lg"><i class="fas fa-trash"></i> Limpar Carrinho</a>
        </div>
        <div class="col" align="right">
            <a href="<?= base_url('checkout') ?>" title="Finalizar compra" class="btn btn-success btn-lg">
                <i class="fa fa-check"></i> Finalizar Compra
            </a>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;
    </div>

<?php } // fim do carrinho  ?>

<br><br><br><br>
