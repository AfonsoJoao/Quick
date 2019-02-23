<div class="container">
    <br>
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo base_url('paineladministrativo/') ?>">Painel administrativo</a>
        </li>
        <li class="breadcrumb-item active">Produtos cadastrados</li>
    </ol>
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
                    
                    <tbody>
                        <?php
                        if (isset($produto)) {
                            foreach ($produto as $produto) {
                                ?>
                                <tr>
                                    <td><?= $produto->idProduto ?></td>
                                    <td><?= $produto->nomeProduto ?></td>
                                    <td><?= $produto->marca ?></td>
                                    <td><?= $produto->descricaoProduto ?></td>
                                    <td><?= formataMoedaReal($produto->valorUnitario, TRUE) ?></td>
                                    <td><?=
                                        $cate = $produto->categoria;
                                        if ($cate == 'naoalcoolicas' || $cate == 'alcoolicas') {
                                            echo $produto->peso . " L";
                                        } else {
                                            echo $produto->peso . " KG";
                                        }
                                        ?></td>
                                    <td><a href="<?php echo base_url("ControllerProduto/listaUnicoProduto/$produto->idProduto"); ?>"><img src="<?php echo base_url('application/images/edit-Icon.png') ?>"></a></td>
                                    <td><a href="javascript:func()" onclick="excluirProduto(<?php echo $produto->idProduto; ?>, '<?php echo $produto->nomeProduto; ?>')"><i class="fa fa-trash-o fa-2x"></i></a></td>
                                </tr>
                            <?php }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

</div>
<!-- /.container-fluid -->
