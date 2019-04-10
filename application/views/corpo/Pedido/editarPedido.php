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
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap4/bootstrap.min.css') ?>">

        <?php
        if (isset($situacao)) {
            $st = $situacao;
            ?>
            <script> alert('<?php echo $st; ?>');</script>
            <?php
            unset($situacao);
        }
        ?>

    </head>
    <body>
        <div class="row justify-content-md-center">
            <div class="col-sm-6">
                <div class="card text-center">
                    <div class="card-header">
                        <h2><i class="fa fa-user"></i> Editar Dados do Pedido</h2>
                    </div>
                    <div class="card-body">
                        <?php echo form_open('ControllerCheckout/atualizarPedido'); ?>
                        <input type="hidden" name="acao" value="<?php
                        if (isset($pedido))
                            echo "alterar";
                        else
                            echo "inserir";
                        ?>">
                        <input type="hidden" name="idPedido" value="<?php
                        if (isset($pedido))
                            foreach ($pedido as $pe) {
                                echo $pe->idPedido;
                            }
                        ?>">

                        <input type="hidden" name="idCliente" value="<?php
                        if (isset($pedido))
                            foreach ($pedido as $pe) {
                                echo $pe->idCliente;
                            }
                        ?>">

                        <input type="hidden" name="tipo" value="usuario">

                        <div class="form-group">
                            <div class="text-left">Nome:</div>
                            <input type="text" class="form-control margin-top-2" name="nomeCliente" placeholder="Nome completo" required=" " value="<?php
                            if (isset($pedido))
                                foreach ($pedido as $pe) {
                                    echo $pe->nomeCliente;
                                }
                            ?>">

                        </div>

                        <div class="form-group">
                            <div class="text-left">Telefone:</div>
                            <input type="tel" class="form-control margin-top-2" name="telefone" placeholder="telefone" required=" " value="<?php
                            if (isset($pedido))
                                foreach ($pedido as $pe) {
                                    echo $pe->telefone;
                                }
                            ?>">

                        </div>

                        <div class="form-group">
                            <div class="text-left">Cep:</div>
                            <input type="text" class="form-control margin-top-2" name="cep" placeholder="Cep" required=" " value="<?php
                            if (isset($pedido))
                                foreach ($pedido as $pe) {
                                    echo $pe->cep;
                                }
                            ?>">

                        </div>

                        <div class="form-group">
                            <div class="text-left">Endereço:</div>
                            <input type="text" class="form-control margin-top-2" class="cpf" name="endereco" placeholder="Endereço" required="" value="<?php
                            if (isset($pedido))
                                foreach ($pedido as $pe) {
                                    echo $pe->endereco;
                                }
                            ?>">

                        </div>

                        <div class="form-group">
                            <div class="text-left">Número:</div>
                            <input type="text" class="form-control margin-top-2" class="telefone" name="numero" placeholder="Número" required=" " value="<?php
                            if (isset($pedido))
                                foreach ($pedido as $pe) {
                                    echo $pe->numero;
                                }
                            ?>">

                        </div>

                        <div class="form-group">
                            <div class="text-left">Bairro:</div>
                            <input type="text" class="form-control margin-top-2" class="telefone" name="bairro" placeholder="Bairro" required=" " value="<?php
                            if (isset($pedido))
                                foreach ($pedido as $pe) {
                                    echo $pe->bairro;
                                }
                            ?>">

                        </div>

                        <div class="form-group">
                            <div class="text-left">Complemento:</div>
                            <input type="text" class="form-control margin-top-2" class="telefone" name="complemento" placeholder="Complemento" value="<?php
                            if (isset($pedido))
                                foreach ($pedido as $pe) {
                                    echo $pe->complemento;
                                }
                            ?>">

                        </div>

                        <div class="form-group">
                            <div class="text-left">Cidade:</div>
                            <input type="text" class="form-control margin-top-2" class="telefone" name="cidade" placeholder="Cidade" required=" " value="<?php
                            if (isset($pedido))
                                foreach ($pedido as $pe) {
                                    echo $pe->cidade;
                                }
                            ?>">

                        </div>

                        <div class="form-group">
                            <div class="text-left">Estado:</div>
                            <input type="text" class="form-control margin-top-2" class="telefone" name="estado" placeholder="Estado" required=" " value="<?php
                            if (isset($pedido))
                                foreach ($pedido as $pe) {
                                    echo $pe->estado;
                                }
                            ?>">

                        </div>

                        <div class="form-group">
                            <div class="text-left">Forma de Pagamento:</div>
                            <select class="form-control" name="forma_Envio">
                                <option value="<?php
                                if (isset($pedido))
                                    foreach ($pedido as $pe) {
                                        echo $pe->forma_Envio;
                                    }
                                ?>"><?php
                                            if (isset($pedido))
                                                foreach ($pedido as $pe) {
                                                    echo $pe->forma_Envio;
                                                } else
                                                echo "Selecione...";
                                            ?></option>
                                <option value="Cartão de Crédito">Cartão de Crédito</option>
                                <option value="A Vista">A Vista</option>
                            </select>

                        </div>

                        <input type="submit" class="btn btn-primary btn-lg" value="Editar">

                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div><br><br><br><br>
    </body>
</html>
