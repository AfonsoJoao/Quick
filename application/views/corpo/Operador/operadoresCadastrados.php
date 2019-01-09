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
                <center><h1>Lista de Operadores</h1></center><br><br>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Data Nascimento</th>
                            <th>Sexo</th>
                            <th>E-mail</th>
                            <th>Senha do Operador</th>
                            <th>CPF</th>
                            <th>RG</th>
                            <th>Telefone</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($operadores)) {
                            foreach ($operadores as $operador) {
                                ?>
                                <tr>
                                    <td><?php echo $operador->idOperador; ?></td>
                                    <td><?php echo $operador->nome; ?></td>
                                    <td><?php echo $operador->dataNascimento; ?></td>
                                    <td><?php echo $operador->sexo; ?></td>
                                    <td><?php echo $operador->email; ?></td>
                                    <td><?php echo $operador->senha; ?></td>
                                    <td><?php echo $operador->cpf; ?></td>
                                    <td><?php echo $operador->rg; ?></td>
                                    <td><?php echo $operador->telefone; ?></td>
                                    <td><a href="<?php echo base_url("ControllerOperador/listaUnicoOperador/$operador->idOperador"); ?>"><img src="<?php echo base_url('application/images/edit-Icon.png'); ?>"></a></td>
                                    <td><a href="javascript:func()" onclick="excluirOperador(<?php echo $operador->idOperador; ?>, '<?php echo $operador->nome; ?>')"> <img src=" <?php echo base_url('application/images/close_1.png'); ?>"> </a></td>
                                </tr>   
                            <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php ?>
    </body>
</html>
