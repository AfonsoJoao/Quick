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
                if (isset($produto)) {
                    foreach ($produto as $produto) {
                    ?>
                    <tr>
                        <td><?php echo $produto->idProduto; ?></td>
                        <td><?php echo $produto->nomeProduto; ?></td>
                        <td><?php echo $produto->marca; ?></td>
                        <td><?php echo $produto->descricaoProduto; ?></td>
                        <td><?php echo "R$ " . $produto->valorUnitario; ?></td>
                        <td><?php
                            $cate = $produto->categoria;
                            if ($cate == 'naoalcoolicas' || $cate == 'alcoolicas') {
                                echo $produto->peso . " L";
                            } else {
                                echo $produto->peso . " KG";
                            }
                            ?></td>
                        <td><a href="<?php echo base_url("ControllerProduto/listaUnicoProduto/$produto->idProduto"); ?>"><img src="<?php echo base_url('application/images/edit-Icon.png') ?>"></a></td>
                        <td><a href="javascript:func()" onclick="excluirProduto(<?php echo $produto->idProduto; ?>,'<?php echo $produto->nomeProduto; ?>')"><img src="<?php echo base_url('application/images/close_1.png') ?>"></a></td>
                    </tr>
                <?php } 
                
                            }?>
            </tbody>
        </table>
    </div>
</div>
<?php

