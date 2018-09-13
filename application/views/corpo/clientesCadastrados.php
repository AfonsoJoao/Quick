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

        <div class="container-fluid">  
            <div class="bs-docs-example">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Data Nascimento</th>
                            <th>Sexo</th>
                            <th>E-mail</th>
                            <th>Senha do Cliente</th>
                            <th>CPF</th>
                            <th>RG</th>
                            <th>Telefone</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($clientes)) {
                            foreach ($clientes as $cliente) {
                                ?>
                                <tr>
                                    <td><?php echo $cliente->idCliente; ?></td>
                                    <td><?php echo $cliente->nome; ?></td>
                                    <td><?php echo $cliente->dataNascimento; ?></td>
                                    <td><?php echo $cliente->sexo; ?></td>
                                    <td><?php echo $cliente->email; ?></td>
                                    <td><?php echo $cliente->senhaCliente; ?></td>
                                    <td><?php echo $cliente->cpf; ?></td>
                                    <td><?php echo $cliente->rg; ?></td>
                                    <td><?php echo $cliente->telefone; ?></td>
                                    <td><a href="<?php echo base_url("ControllerCliente/listaUnicoCliente/$cliente->idCliente"); ?>"><img src=" <?php echo base_url('images/edit-Icon.png');?>"> </a></td>
                                    <td><a href="javascript:func()" onclick="excluirCliente(<?php echo $cliente->idCliente; ?>, '<?php echo $cliente->nome; ?>')"> <img src=" <?php echo base_url('images/close_1.png');?>"> </a></td>
                                </tr>   
                            <?php }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

<?php ?>
    </body>
</html>
