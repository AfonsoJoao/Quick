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
                            <th>Status</th>
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
                            <th>Status</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </tfoot>
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
                                    <td><?php echo formataMoedaReal($produto->valorUnitario, TRUE); ?></td>
                                    <td><?php
                                        $cate = $produto->categoria;
                                        if ($cate == 'naoalcoolicas' || $cate == 'alcoolicas') {
                                            echo $produto->peso . " L";
                                        } else {
                                            echo $produto->peso . " KG";
                                        }
                                        ?></td>
                                    <?php if ($produto->disponibilidade == 1) { ?>
                                        <td>Disponivel</td>
                                    <?php } else { ?>
                                        <td>Indisponivel</td>
                                    <?php } ?>
                                    <td><a href="<?php echo base_url("ControllerProduto/listaUnicoProduto/$produto->idProduto"); ?>"><img src="<?php echo base_url('application/images/icones/edit-Icon.png') ?>"></a></td>
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
