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
        <?php if (isset($situacao)) {
            $st = $situacao; ?>
            <script> alert ('<?php echo $st; ?>'); </script>
<?php unset($situacao); } ?>
        
        <div class="w3l_banner_nav_right">

            <div class="w3_login">
                <h3>Entre ou Cadastre-se</h3>
                <div class="w3_login_module">
                    <div class="module form-module">
                        <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                            <div class="tooltip">Login</div>
                        </div>

                        <div class="form">
                            <h2>Criar uma conta</h2>
                            <?php echo form_open('ControllerCliente/gravarCliente'); ?>
                            <input type="text" name="nome" placeholder="Nome completo" required=" ">
                            <input class="form-control" type="date" name="dataNascimento" required=" "><br>
                            <select class="form-control" id="sexo" name="sexo" required placeholder="sexo">
                                <option value="">Sexo</option>
                                <option value="masc">Masculino</option>
                                <option value="femi">Feminino</option>
                                <option value="femi">Outros</option>
                            </select><br>

                            <input type="email" name="email" placeholder="Email" required=" ">
                            <input type="password" name="senhaCliente" placeholder="Senha" required=" ">
                            <input type="text" name="cpf" placeholder="CPF" required="">


                            <input type="text" name="rg" placeholder="RG" required=" ">
                            <input type="text" name="telefone" placeholder="Telefone" required=" "><br><br>

                            <input type="submit" value="Cadastrar">
                            <?php echo form_close(); ?>
                        </div>
                        <div class="form">
                            <h2>Faça login em sua conta</h2>
                            <form action="#" method="post">
                                <input type="text" name="email" placeholder="Email" required=" ">
                                <input type="password" name="senha" placeholder="Senha" required=" ">
                                <input type="submit" value="Entrar">
                            </form>
                        </div>
                        <div class="cta"><a href="#">Esqueceu sua senha?</a></div>

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
            <!-- //login -->
        </div>
        <div class="clearfix"></div>

        <?php
        // put your code here
        ?>
    </body>
</html>
