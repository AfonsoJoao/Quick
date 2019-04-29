<title>Quick - Histórico de compras</title>
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
                            <th class="text-center">Data da Compra</th>
                            <th class="text-center">Total Compra</th>
                            <th class="text-center">Forma de Pagamento</th>
                            <th class="text-center">Status</th>

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
