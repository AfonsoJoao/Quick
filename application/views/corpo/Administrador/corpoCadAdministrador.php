<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin - Register</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin.css" rel="stylesheet">

    </head>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



    <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>


    <?php
    if (isset($situacao)) {
        $st = $situacao;
        ?>
        <script> alert('<?php echo $st; ?>');</script>
        <?php
        unset($situacao);
    }
    ?>

    <body class="bg-dark">
        <div class="container">
            <div class="card card-register mx-auto mt-5">
                <div class="card-header">Cadastrar administrador</div>
                <div class="card-body">
                    
                        <?php echo form_open('ControllerAdministrador/gravarAdministrador/'); ?>
                        <input type="hidden" name="acao" value="<?php
                        if (isset($administrador))
                            echo "alterar";
                        else
                            echo "inserir";
                        ?>">

                        <input type="hidden" name="idAdministrador" value="<?php
                        if (isset($administrador))
                            foreach ($administrador as $admin) {
                                echo $admin->idAdministrador;
                            }
                        ?>">
                        <input type="hidden" name="tipo" value="administrador">
                        <input type="text" name="nome" class="form-control" placeholder="Nome completo" required="required">
                        <br>
                        <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                        <br>
                        <input type="password" name="senha" class="form-control" placeholder="Senha" required="required">
                        <br>
                        <input type="text" name="telefone" class="form-control" placeholder="Telefone" required="required">
                        <br>
                        <input type="date" name="dataNascimento" class="form-control" placeholder="Data de nascimento" required="required">
                        <br>
                        <select name="sexo" id="sexo" class="form-control" placeholder="Sexo" required="required">
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                        </select>
                        <br>
                        <input type="text" name="cpf" class="form-control" placeholder="CPF" required="required">
                        <br>
                        <input type="text" name="rg" class="form-control" placeholder="RG" required="required">
                        <br>
                         <input class="btn btn-primary btn-block" type="submit" value="salvar">
                        <?php echo form_close(); ?>
                   
                    
                </div>
            </div>
        </div>
<br>
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    </body>
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
</html>
