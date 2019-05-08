<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

-->
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

                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" 
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="far fa-file-alt"></i> Relatórios <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="<?= base_url('ControllerRelatorio/mensal') ?>" target="_blank">Vendas Diárias</a>

                                </ul>
                            </div>

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
                                   <!-- <th class="text-center">Editar</th> -->
                                    <th class="text-center">Excluir</th>
                                </tr>
                            </thead>

                            <tbody>



                                <?php foreach ($pedido as $p) { ?> 
                                    <tr>
                                        <td><?= $p->idPedido ?> </td>
                                        <td><?= $p->nomeCliente ?></td>
                                        <td><?= formataMoedaReal($p->total_pedido, TRUE) ?></td>
                                        <td class="text-center">
                                            <?php
                                            switch ($p->status) {
                                                case 'Enviado':
                                                    echo 'Enviado';
                                                    break;

                                                case 'Pagamento Confirmado':
                                                    echo 'Pagamento Confirmado';
                                                    break;

                                                case 'Pedido Cancelado':
                                                    echo 'Pedido Cancelado';
                                                    break;

                                                default:
                                                    echo 'Aguardando Pagamento';
                                                    break;
                                            }
                                            ?>

                                        </td>
                                        <td class="text-right">
                                            <button type="button" title="Mudar Status" class="btn btn-primary
                                                    btn-mudar-status-pedido" data-toggle="modal" data-id-pedido="<?= $p->idPedido ?>">
                                                <i class="fas fa-edit"></i> Mudar Status 
                                            </button>



                                            <a href="<?= base_url('ControllerPedido/imprimir/' . $p->idPedido) ?>" target="_blank"
                                               title="Imprimir Pedido" class="btn btn-primary" > <!-- O comando target="_blank" serve para abrir uma página em uma nova aba do navegador   -->
                                                <i class="fa fa-print"></i> Imprimir Pedido
                                            </a>

                                        </td>
                                       <!-- <td class="text-center"><a href="<?php // echo base_url("ControllerPedido/listaUnicoPedido/"
                                        //. "$p->idPedido"); 
                                            ?>"><img src="<?php // echo base_url('application/images/icones/edit-Icon.png');  ?>"></a></td> -->

                                        <td class="text-center"><a href="javascript:func()" onclick="excluirPedido(<?php echo $p->idPedido; ?>,
                                                            '<?php echo $p->idPedido; ?>')" class="btn btn-danger">Excluir</a></td>
                                    </tr>

<?php } // Fim do foreach    ?>



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


