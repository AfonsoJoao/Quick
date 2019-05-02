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
            <h2>Lista de Itens da Compra</h2>
            <hr/><br>
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">Nome Item</th>
                            <th class="text-center">Quantidade</th>
                            <th class="text-right">Valor Unitário</th>
                            <th class="text-right">SubTotal</th>
                            

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        if (isset($item)) {
                            foreach ($item as $i) {
                                ?>

                                <tr>
                                    <td class="text-center"><?= $i->nome_Item ?> </td>
                                    <td class="text-center"><?= $i->quantidade ?></td>
                                    <td class="text-right"><?= formataMoedaReal($i->valorUnitario, TRUE) ?></td>
                                    <td class="text-right"><?= formataMoedaReal($i->subtotal, TRUE) ?></td>
                                    
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
