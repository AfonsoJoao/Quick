<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

-->
<?php
$acesso = 0;
if (isset($_SESSION['administrador_logado']) || isset($_SESSION['operador_logado'])) {
    $acesso = 1;
}

if ($acesso == 1) {
    ?>
    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>

            <script src="<?php echo base_url('js/checkout.js'); ?>"></script>

        </head>
        <body>

            <div class="container">
                <br>
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url('paineladministrativo/') ?>">Painel administrativo</a>
                    </li>
                    <li class="breadcrumb-item active">Lista de Pedidos Recebidos</li>
                </ol>

                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        Lista de Pedidos

                        <div class="row margin-botton-20">
                            <div class="col-md-12 text-right">
                                <?php if (isset($_SESSION['administrador_logado'])) { ?>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" 
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="far fa-file-alt"></i> Relatórios <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <a class="dropdown-item" href="<?= base_url('ControllerRelatorio/mensal') ?>" target="_blank">Pedidos Diários</a>

                                        </ul>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>


                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Número Pedido</th>
                                        <th>Nome do Cliente</th>
                                        <th>Valor Total</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-right">Opções</th>
                                    </tr>
                                </thead>

                                <tbody>



                                    <?php foreach ($pedido as $p) { ?> 
                                        <tr>
                                            <td><?= $p->idPedido ?> </td>
                                            <td><?= $p->nomeCliente ?></td>
                                            <td><?= formataMoedaReal($p->total_pedido, TRUE) ?></td>
                                            <td><?= $p->status ?></td>
                                            <td class="text-left">



                                                <!-- Botão para acionar modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $p->idPedido; ?>">
                                                    <i class="far fa-edit"></i> Mudar status
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="myModal<?php echo $p->idPedido; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Mudar status do pedido</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="radio">
                                                                    <?php echo form_open('ControllerPedido/mudarStatus'); ?>
                                                                    <br>
                                                                    <select class="form-control" id="status" name="status">
                                                                        <optgroup label="Status do pedido">
                                                                            <option value="Análise/Empacotamento"> Análise/Empacotamento</option>
                                                                            <option value="Saiu para entrega"> Saiu para entrega</option>
                                                                            <option value="Finalizado"> Finalizado</option>
                                                                            <option value="Cancelado"> Cancelado</option>
                                                                    </select>
                                                                    <br> <br>
                                                                </div>
                                                                <input type="hidden" name="idPedido" value="<?php echo $p->idPedido; ?>">

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                                <input type="submit" class="btn btn-primary" value="Salvar status">
                                                                <?php echo form_close(); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <a href="<?= base_url('ControllerPedido/imprimir/' . $p->idPedido) ?>" target="_blank"
                                                   title="Imprimir Pedido" class="btn btn-primary" > <!-- O comando target="_blank" serve para abrir uma página em uma nova aba do navegador   -->
                                                    <i class="fas fa-eye"></i> Visualizar Pedido
                                                </a>

                                            </td>
                                        <?php } ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br><br><br><br>
            </div>

        </body>

    </html>
    <div class="modal_dinamico"></div>
    <?php
}


