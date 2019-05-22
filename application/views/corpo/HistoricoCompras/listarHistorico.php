<title>Quick - Histórico de compras</title>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

        <title></title>
    </head>
    <body>
        <br>
        <div class="card-body">
            <h2>Histórico de Compras</h2>
            <hr/><br>
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">Data da compra</th>
                            <th class="text-center">Total compra</th>
                            <th class="text-center">Forma de pagamento</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Compras</th>
                            <th class="text-center">Cancelar compra</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        if (isset($historico)) {
                            foreach ($historico as $hist) {
                                ?>

                                <tr>
                                    <td class="text-center"><?= formataDataView($hist->data_Pedido) ?> </td>
                                    <td class="text-center"><?= formataMoedaReal($hist->total_pedido, TRUE) ?></td>
                                    <td class="text-center"><?= $hist->forma_Envio ?></td>
                                    <td class="text-center"><?= $hist->status ?></td>
                                    <td class="text-center"><a href="<?= base_url('ControllerHistorico/getItensCompra/' .
                                $hist->idPedido)
                                ?>" target="_blank" title="Visualizar Compra" class="btn btn-primary"> <!-- O comando target="_blank" serve para abrir uma página em uma nova aba do navegador   -->
                                            Visualizar Compra
                                        </a>
                                    </td>
                                    <?php if ($hist->status == "Cancelado" || $hist->status == "Finalizado" || $hist->status == "Saiu para entrega") { ?>
                                        <td class="text-center"><input type="submit" class="btn btn-danger" value="Cancelar pedido" disabled></td>
        <?php } else { ?><td class="text-center"><a href="javascript:func()" onclick="cancelarPedido(<?php echo$hist->idPedido; ?>)"><input type="submit" class="btn btn-danger" value="Cancelar pedido"></a></td><?php } ?> 
                                </tr>

                                <?php
                            }
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div><br>                
    </body>
</html>
