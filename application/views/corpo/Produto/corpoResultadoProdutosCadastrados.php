<div class="container-fluid">  
    <div class="bs-docs-example">
        <div>
                <form action="<?php echo base_url('resultadodabuscaProdutosCadastrados/') ?>" method="post">
                    <input type="text" name="busca" placeholder="Buscar produtos..." style="position: absolute; left: 1075px; right: 0px;">
                    <input type="submit" value="Buscar" style="position: absolute; left: 1275px; right: 0px;">
                </form>
            </div>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Marca</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Peso</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($listagem)) {
                    foreach ($listagem as $listagem) {
                    ?>
                    <tr>
                        <td><?php echo $listagem['idProduto']; ?></td>
                        <td><?php echo $listagem['nomeProduto']; ?></td>
                        <td><?php echo $listagem['marca']; ?></td>
                        <td><?php echo $listagem['descricaoProduto']; ?></td>
                        <td><?php echo "R$ " . $listagem['valorUnitario']; ?></td>
                        <td><?php
                            $cate = $listagem['categoria'];
                            if ($cate == 'naoalcoolicas' || $cate == 'alcoolicas') {
                                echo $listagem['peso'] . " L";
                            } else {
                                echo $listagem['peso'] . " KG";
                            }
                            ?></td>
                        <td><a href="<?php echo base_url("ControllerProduto/listaUnicoProduto/$listagem[idProduto]"); ?>"><img src="<?php echo base_url('application/images/edit-Icon.png') ?>"></a></td>
                        <td><a href="javascript:func()" onclick="excluirProduto(<?php echo $listagem['idProduto']; ?>,'<?php echo $produto['nomeProduto']; ?>')"><img src="<?php echo base_url('application/images/close_1.png') ?>"></a></td>
                    </tr>
                <?php } 
                
                            }?>
            </tbody>
        </table>
    </div>
</div>
<?php



