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
                <li class="breadcrumb-item active">Lista de Pedidos</li>
            </ol>

            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Lista de Pedidos

                    <div class="row margin-botton-20">
                        <div class="col-md-12 text-right">
                            <a href="#" title="Relatorios" class="btn btn-success">
                                <i class="far fa-file-alt"></i> Relatório
                            </a>

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
                                    <th class="text-center">Editar</th>
                                    <th class="text-center">Excluir</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php foreach ($pedido as $p) { ?> 
                                    <tr>
                                        <td><?= $p->idPedido ?> </td>
                                        <td><?= $p->nome ?></td>
                                        <td><?= formataMoedaReal($p->total_pedido, TRUE) ?></td>
                                        <td class="text-center">
                                            <?php
                                            switch ($p->status) {
                                                case 1:
                                                    echo 'Aguardando Pagamento';
                                                    break;

                                                case 2:
                                                    echo 'Pagamento Confirmado';
                                                    break;

                                                case 3:
                                                    echo 'Enviado';
                                                    break;

                                                default:
                                                    echo 'Cancelado';
                                                    break;
                                            }
                                            ?>

                                        </td>
                                        <td class="text-right">
                                            <button type="button" title="Mudar Status" class="btn btn-primary
                                                    btn-mudar-status-pedido" data-toggle="modal" data-id-pedido="<?= $p->idPedido ?>">
                                                <i class="fas fa-edit"></i>  
                                            </button>

                                            <a href="<?= base_url('pedidos/codigo_rastreio') ?>" title="Código Rastreio"
                                               class="btn btn-primary">
                                                <i class="fa fa-truck"></i>
                                            </a>

                                            <a href="<?= base_url('ControllerPedido/imprimir/'. $p->idPedido) ?>" target="_blank"
                                               title="Imprimir Pedido" class="btn btn-primary" > <!-- O comando target="_blank" serve para abrir uma página em uma nova aba do navegador   -->
                                                <i class="fa fa-print"></i>
                                            </a>

                                        </td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                    </tr>

                                <?php } // Fim do foreach   ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </body>

</html>
<div class="modal_dinamico"></div>

