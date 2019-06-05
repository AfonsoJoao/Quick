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
            <li class="breadcrumb-item active">Clientes cadastrados</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Lista de clientes cadastrados</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>CPF</th>
                                <th>Telefone</th>
                                <th>Excluir</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            if (isset($clientes)) {
                                foreach ($clientes as $cliente) {
                                    ?>
                                    <tr>
                                        <td><?php echo $cliente->idCliente; ?></td>
                                        <td><?php echo $cliente->nomeCliente; ?></td>
                                        <td><?php echo $cliente->email; ?></td>
                                        <td><?php echo $cliente->cpf; ?></td>
                                        <td><?php echo $cliente->telefone; ?></td>
                                        <td><a href="javascript:func()" onclick="excluirCliente(<?php echo $cliente->idCliente; ?>, '<?php echo $cliente->nomeCliente; ?>')"><center><img src=" <?php echo base_url('application/images/icones/close_1.png'); ?>"></center></a></td>
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