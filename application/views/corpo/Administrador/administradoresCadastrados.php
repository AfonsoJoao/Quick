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
                        if (isset($administradores)) {
                            foreach ($administradores as $administrador) {

                                //depois cria o isset de ends aqui dentro
                                ?>
                                <tr>
                                    <td><?php echo $administrador->idAdministrador; ?></td>
                                            <td><?php echo $administrador->nome; ?></td>
                                            <td><?php echo $administrador->dataNascimento; ?></td>
                                            <td><?php echo $administrador->sexo; ?></td>
                                            <td><?php echo $administrador->email; ?></td>
                                            <td><?php echo $administrador->cpf; ?></td>
                                            <td><?php echo $administrador->rg; ?></td>
                                            <td><?php echo $administrador->telefone; ?></td>
                                    <td><a href="<?php echo base_url("ControllerAdministrador/listaUnicoAdministrador/$administrador->idAdministrador"); ?>"><img src="<?php echo base_url('application/images/edit-Icon.png'); ?>"></a></td>
                                            <td><a href="javascript:func()" onclick="excluirAdministrador(<?php echo $administrador->idAdministrador; ?>, '<?php echo $administrador->nome; ?>')"> <img src=" <?php echo base_url('application/images/icones/close_1.png'); ?>"> </a></td>
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