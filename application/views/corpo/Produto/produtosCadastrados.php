<div class="container">
<div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i>
                            Lista de produtos cadastrados</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                    <tfoot>
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
                                    </tfoot>
                                    <tbody>
                                        <?php
                                       if (isset($produto)) {
                    foreach ($produto as $produto) {
                    ?>                    <tr>
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
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>

</div>
                <!-- /.container-fluid -->