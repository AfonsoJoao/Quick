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
    <body>

        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Informações do Pedido</h1>
                </div>
            </div>
            <hr />


            <h3>Dados do Comprador</h3>
            <div class="row">
                <div class="col-md-12 text-center">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <td class="text-left">Nome: </td>
                            <td class="text-left"><?= $pedido->nomeCliente ?></td>
                        </tr>

                        <tr>
                            <td class="text-left">Telefone: </td>
                            <td class="text-left"><?= formataTelefone($pedido->telefone) ?></td>
                        </tr>

                        <tr>
                            <td class="text-left">E-mail: </td>
                            <td class="text-left"><?= $pedido->email ?></td>
                        </tr>

                    </table>
                </div>
            </div>
            <hr />

            <h3>Dados do Envio</h3>
            <div class="row">
                <div class="col-md-12 text-center">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <td>Cep</td>
                            <td>Endereço</td>
                            <td>Número</td>
                            <td>Bairro</td>
                            <td>Complemento</td>
                            <td>Cidade</td>
                            <td>Estado</td>
                        </tr>

                        <tr>
                            <td><?= $pedido->cep ?></td>
                            <td><?= $pedido->endereco ?></td>
                            <td><?= $pedido->numero ?></td>
                            <td><?= $pedido->bairro ?></td>
                            <td><?= $pedido->complemento ?></td>
                            <td><?= $pedido->cidade ?></td>
                            <td><?= $pedido->estado ?></td>
                        </tr>

                    </table>
                </div>
            </div>
            
            <hr />

            <h3>Pagamento</h3>

            <?php if ($pedido->forma_Envio == "A Vista") { ?>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <td class="text-left">Forma de Pagamento:</td>
                                <td class="text-left"><?= $pedido->forma_Envio ?></td>
                                

                            </tr>

                            <tr>
                                <td class="text-left">Valor das cedulas que serão usadas para efetuação do pagamento:</td>
                                
                                <?php foreach ($cedulas as $ced) { ?>
                                <td class="text-left"><?= formataMoedaReal($ced->valor, TRUE) ?></td>    

                                <?php } ?>

                            </tr>
                        </table>
                    </div>
                </div>

            <?php } else { ?>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <table class="table table-striped table-bordered">

                            <tr>
                                <td class="text-left">Forma de Pagamento</td>
                                <td class="text-left">Bandeira do Cartão de Crédito</td>

                            </tr>

                            <tr>
                                <td class="text-left"><?= $pedido->forma_Envio ?></td>
                                <td class="text-left"><?= $pedido->bandeira_cartao ?></td>

                            </tr>

                        </table>
                    </div>
                </div>   

            <?php } ?>

            <hr />

            <h3>Itens do Pedido</h3>
            <div class="row">
                <div class="col-md-12 text-center">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <td class="text-left">Descrição</td>
                            <td>Quantidade</td>
                            <td class="text-right">Valor Unitário</td>
                            <td class="text-right">Subtotal</td>
                        </tr>

                        <?php foreach ($item as $i) { ?>
                            <tr>
                                <td class="text-left"><?= $i->nome_Item ?></td>
                                <td><?= $i->quantidade ?></td>
                                <td class="text-right"><?= formataMoedaReal($i->valorUnitario, TRUE) ?></td>
                                <td class="text-right"><?= formataMoedaReal($i->subtotal, TRUE) ?></td>
                            </tr>


                        <?php } ?>

                        <tr>
                            <td colspan="3" class="text-right">Total Compra</td>
                            <td class="text-right"><?= formataMoedaReal($pedido->total_pedido, TRUE) ?> </td>

                        </tr>

                    </table>
                </div>
            </div><br>


        </div><br>

    </body>
</html>
