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

        <div class="w3_login">
            <h3>Cadastro de Operador</h3>
            <div class="w3_login_module">
                <div class="module form-module">
                    <div class="form">
                    </div>

                    <div class="form">
                        <?php echo form_open('ControllerOperador/gravarOperador'); ?>
                        <input type="hidden" name="acao" value="<?php
                        if (isset($operador))
                            echo "alterar";
                        else
                            echo "inserir";
                        ?>">

                        <input type="hidden" name="idOperador" value="<?php
                        if (isset($operador))
                            foreach ($operador as $ope) {
                                echo $ope->idOperador;
                            }
                        ?>">
                        
                        <input type="hidden" name="tipo" value="operador">
                        
                        <input type="text" name="nome" placeholder="Nome completo" required=" " value="<?php
                        if (isset($operador))
                            foreach ($operador as $ope) {
                                echo $ope->nome;
                            }
                        ?>">

                        <input class="form-control" type="date" name="dataNascimento" required=" " value="<?php
                        if (isset($operador))
                            foreach ($operador as $ope) {
                                echo $ope->dataNascimento;
                            }
                        ?>"><br>

                        <select class="form-control" id="sexo" name="sexo" required placeholder="sexo" value="<?php
                        if (isset($operador))
                            foreach ($operador as $ope) {
                                echo $ope->sexo;
                            }
                        ?>">
                            <option>Sexo</option>
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                            <option value="outros">Outros</option>
                        </select><br>

                        <input type="email" name="email" placeholder="Email" required=" " value="<?php
                        if (isset($operador))
                            foreach ($operador as $ope) {
                                echo $ope->email;
                            }
                        ?>">

                        <input type="password" name="senha" placeholder="Senha" required=" " value="<?php
                        if (isset($operador))
                            foreach ($operador as $ope) {
                                echo $ope->senha;
                            }
                        ?>">

                        <input type="text" name="cpf" placeholder="CPF" required="" value="<?php
                        if (isset($operador))
                            foreach ($operador as $ope) {
                                echo $ope->cpf;
                            }
                        ?>">

                        <input type="text" name="rg" placeholder="RG" required=" " value="<?php
                        if (isset($operador))
                            foreach ($operador as $ope) {
                                echo $ope->rg;
                            }
                        ?>">

                        <input type="text" name="telefone" placeholder="Telefone" required=" " value="<?php
                        if (isset($operador))
                            foreach ($operador as $ope) {
                                echo $ope->telefone;
                            }
                        ?>"><br><br>

                        <input type="submit" value="Salvar">
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>

            <script>
                $('.toggle').click(function () {
                    // Switches the Icon
                    $(this).children('i').toggleClass('fa-pencil');
                    // Switches the forms  
                    $('.form').animate({
                        height: "toggle",
                        'padding-top': 'toggle',
                        'padding-bottom': 'toggle',
                        opacity: "toggle"
                    }, "slow");
                });
            </script>
        </div>

        <?php ?>
    </body>
</html>
