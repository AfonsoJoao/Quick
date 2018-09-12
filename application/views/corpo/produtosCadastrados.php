<div class="container-fluid">  
    <div class="bs-docs-example">
        <table class="table">
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
                        <td><a href=""><img src="<?php echo base_url('images/edit-Icon.png') ?>"></a></td>
                        <td><a href="javascript: if(confirm('Tem certeza que deseja deletar <?php echo $produto->nomeProduto; ?>?'))
                               location.href='index.php?p=ProdutosCadastrados&produto=<?php echo $produto->idProduto; ?>';"><img src="<?php echo base_url('images/close_1.png') ?>"></a></td>
                    </tr>
                <?php } 
                
                            }?>
            </tbody>
        </table>
    </div>
</div>
<?php

