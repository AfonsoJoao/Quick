<?php
$acesso = 0;
if (isset($_SESSION['administrador_logado']) || isset($_SESSION['operador_logado'])) {
    $acesso = 1;
}

if ($acesso == 1) {
    ?>
    <!-- DataTables Example -->
    <div class="container">
        <br>
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo base_url('paineladministrativo/') ?>">Painel administrativo</a>
            </li>
            <li class="breadcrumb-item active">Operadores cadastrados</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Lista de operadores cadastrados</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Editar</th>
                                <th>Excluir</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Editar</th>
                                <th>Excluir</th>

                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            if (isset($operadores)) {
                                foreach ($operadores as $operador) {
                                    ?>
                                    <tr>
                                        <td><?php echo $operador->idOperador; ?></td>
                                        <td><?php echo $operador->nome; ?></td>
                                        <td><?php echo $operador->email; ?></td>
                                        <td><a href="<?php echo base_url("ControllerOperador/listaUnicoOperador/$operador->idOperador"); ?>"><center><img src="<?php echo base_url('application/images/icones/edit-Icon.png'); ?>"></center></a></td>
                                        <td><a href="javascript:func()" onclick="excluirOperador(<?php echo $operador->idOperador; ?>, '<?php echo $operador->nome; ?>')"><center><img src=" <?php echo base_url('application/images/icones/close_1.png'); ?>"></center></a></td>
                                    </tr>   
                                    <?php
                                }
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
    <?php
}