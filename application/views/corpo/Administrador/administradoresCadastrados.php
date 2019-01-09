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
                <center><h1>Lista de Administradores</h1></center><br><br>
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
                         <!--   <th>CEP</th>
                            <th>Estado</th>
                            <th>Cidade</th>
                            <th>Bairro</th>
                            <th>Rua</th>
                            <th>Número da Residência</th> -->
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($administradores)) {
                            foreach ($administradores as $administrador) {

                                //depois cria o isset de ends aqui dentro
                                ?>

                                <?php
                           /*     if (isset($cidades)) {
                                    foreach ($cidades as $cidade) { */
                                        ?>




                                        <tr>
                                            <td><?php echo $administrador->idAdministrador; ?></td>
                                            <td><?php echo $administrador->nome; ?></td>
                                            <td><?php echo $administrador->dataNascimento; ?></td>
                                            <td><?php echo $administrador->sexo; ?></td>
                                            <td><?php echo $administrador->email; ?></td>
                                            <td><?php echo $administrador->senha; ?></td>
                                            <td><?php echo $administrador->cpf; ?></td>
                                            <td><?php echo $administrador->rg; ?></td>
                                            <td><?php echo $administrador->telefone; ?></td>
                                           <!-- <td><?php // echo $administrador->cep;    ?></td>
                                            <td><?php // echo $administrador->nomeEstado;       ?></td>
                                            <td><?php // echo $cidade->nomeCidade; ?></td>
                                            <td><?php // echo $administrador->nomeBairro;       ?></td>
                                            <td><?php // echo $administrador->nomeRua;    ?></td>
                                            <td><?php // echo $administrador->numeroResidencia;    ?></td> -->

                                            <td><a href="<?php echo base_url("ControllerAdministrador/listaUnicoAdministrador/$administrador->idAdministrador"); ?>"><img src="<?php echo base_url('application/images/edit-Icon.png'); ?>"></a></td>
                                            <td><a href="javascript:func()" onclick="excluirAdministrador(<?php echo $administrador->idAdministrador; ?>, '<?php echo $administrador->nome; ?>')"> <img src=" <?php echo base_url('application/images/close_1.png'); ?>"> </a></td>
                                        </tr>   

                                        <?php
                                    }
                                }
                                //   }
                                // }
                                ?>


                    </tbody>
                </table>
            </div>
        </div>
        <?php ?>
    </body
</html>
