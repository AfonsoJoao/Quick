<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">

        <title> <?= $titulo ?> </title>

        <link href="<?php echo base_url('css/sb-admin.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('css/bootstrap4/bootstrap.min.css'); ?>" rel="stylesheet">

    </head>

    <?php
    // echo dataDiaDB();
    ?>

    <body>
        <div class="container">
            <h1 class="text-center">Relatório de Pedidos Diário</h1>
            <hr /><br>

            <div class="row">
                <div class="col-md-12 text-center">
                    <table class="table table-striped table-bordered">

                        <thead>
                            <tr>
                                <th class="text-left">Número Pedido</th>
                                <th class="text-left">Nome do Cliente</th>
                                <th>Forma de Pagamento</th>
                                <th>Data do Pedido</th>
                                <th class="text-right">Total Pedido</th>
                            </tr>

                        </thead>

                        <tbody>
                            
                            <?php
                            $t_pedido = 0;
                            
                            ?>

                            <?php foreach ($item as $i) { ?> 
                                <tr>
                                    <td class="text-left"><?= $i->idPedido ?> </td>
                                    <td class="text-left"><?= $i->nomeCliente ?></td>
                                    <td><?= $i->forma_Envio ?></td>
                                    <td><?= formataDataView($i->data_Pedido) ?></td>
                                    <td class="text-right"><?= formataMoedaReal($i->total_pedido, TRUE) ?></td>
                                </tr>
                                
                                <?php
                                $t_pedido = $t_pedido + $i->total_pedido;
                                
                                ?>

                            <?php } //Fim do foreach  ?>

                            <tr>
                                <td colspan="4" class="text-right">Total Venda</td>
                                <td class="text-right"><?= formataMoedaReal($t_pedido, TRUE) ?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>   


        </div> 
    </body>
</html>
