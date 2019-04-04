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
                            <th>Data Nascimento</th>
                            <th>Sexo</th>
                            <th>E-mail</th>
                            <th>CPF</th>
                            <th>RG</th>
                            <th>Telefone</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Data Nascimento</th>
                            <th>Sexo</th>
                            <th>E-mail</th>
                            <th>CPF</th>
                            <th>RG</th>
                            <th>Telefone</th>
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
                                    <td><?php echo $operador->dataNascimento; ?></td>
                                    <td><?php echo $operador->sexo; ?></td>
                                    <td><?php echo $operador->email; ?></td>
                                    <td><?php echo $operador->cpf; ?></td>
                                    <td><?php echo $operador->rg; ?></td>
                                    <td><?php echo $operador->telefone; ?></td>
                                    <td><a href="<?php echo base_url("ControllerOperador/listaUnicoOperador/$operador->idOperador"); ?>"><img src="<?php echo base_url('application/images/edit-Icon.png'); ?>"></a></td>
                                    <td><a href="javascript:func()" onclick="excluirOperador(<?php echo $operador->idOperador; ?>, '<?php echo $operador->nome; ?>')"> <img src=" <?php echo base_url('application/images/close_1.png'); ?>"> </a></td>
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