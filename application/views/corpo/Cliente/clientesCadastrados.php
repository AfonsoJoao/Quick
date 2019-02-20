<!-- DataTables Example -->
<div class="container">
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
                        if (isset($clientes)) {
                            foreach ($clientes as $cliente) {
                                ?>
                                <tr>
                                    <td><?php echo $cliente->idCliente;?></td>
                                    <td><?php echo $cliente->nome;?></td>
                                    <td><?php echo $cliente->dataNascimento; ?></td>
                                    <td><?php echo $cliente->sexo;?></td>
                                    <td><?php echo $cliente->email;?></td>
                                    <td><?php echo $cliente->cpf;?></td>
                                    <td><?php echo $cliente->rg;?></td>
                                    <td><?php echo $cliente->telefone;?></td>
                                    <td><a href="<?php echo base_url("ControllerCliente/listaUnicoCliente/$cliente->idCliente"); ?>"><img src="<?php echo base_url('application/images/edit-Icon.png');?>"></a></td>
                                    <td><a href="javascript:func()" onclick="excluirCliente(<?php echo $cliente->idCliente; ?>, '<?php echo $cliente->nome; ?>')"> <img src=" <?php echo base_url('application/images/close_1.png');?>"> </a></td>
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