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

      
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



        <!-- Adicionando JQuery -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

        <!-- Adicionando Javascript -->
        <script type="text/javascript" >

            $(document).ready(function () {

                function limpa_formulário_cep() {
                    // Limpa valores do formulário de cep.
                    $("#uf").val("");
                    $("#cidade").val("");
                    $("#bairro").val("");
                    $("#rua").val("");
                    $("#numero").focus();

                }

                //Quando o campo cep perde o foco.
                $("#cep").blur(function () {

                    //Nova variável "cep" somente com dígitos.
                    var cep = $(this).val().replace(/\D/g, '');

                    //Verifica se campo cep possui valor informado.
                    if (cep != "") {

                        //Expressão regular para validar o CEP.
                        var validacep = /^[0-9]{8}$/;

                        //Valida o formato do CEP.
                        if (validacep.test(cep)) {

                            //Preenche os campos com "..." enquanto consulta webservice.
                            $("#uf").val("Carregando ...");
                            $("#cidade").val("Carregando ...");
                            $("#bairro").val("Carregando ...");
                            $("#rua").val("Carregando ...");
                            $("#numero").focus();

                            //Consulta o webservice viacep.com.br/
                            $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                                if (!("erro" in dados)) {
                                    //Atualiza os campos com os valores da consulta.
                                    $("#uf").val(dados.uf);
                                    $("#cidade").val(dados.localidade);
                                    $("#bairro").val(dados.bairro);
                                    $("#rua").val(dados.logradouro);
                                    $("#numero").focus();

                                } //end if.
                                else {
                                    //CEP pesquisado não foi encontrado.
                                    limpa_formulário_cep();
                                    alert("CEP não encontrado.");
                                }
                            });
                        } //end if.
                        else {
                            //cep é inválido.
                            limpa_formulário_cep();
                            alert("Formato de CEP inválido.");
                        }
                    } //end if.
                    else {
                        //cep sem valor, limpa formulário.
                        limpa_formulário_cep();
                    }
                });
            });

        </script>
        
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
            <h3>Cadastro de Administrador</h3>
            <div class="w3_login_module">
                <div class="module form-module">
                    <div class="form">
                    </div>

                    <div class="form">
                        <?php echo form_open('ControllerAdministrador/gravarAdministrador'); ?>

                        <!-- o tipo hidden serve para armazenar dados que serão utilizados ou seja 
                        serão manipulados durante a execução do formulario mas as informações não
                        são exibidas para os usuários-->


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
                        
                        <input type="text" name="nome" placeholder="Nome completo" required=" " value="<?php
                        if (isset($administrador))
                            foreach ($administrador as $admin) {
                                echo $admin->nome;
                            }
                        ?>">

                        <input class="form-control" type="date" name="dataNascimento" required placeholder="Data Nascimento" value="<?php
                        if (isset($administrador))
                            foreach ($administrador as $admin) {
                                echo $admin->dataNascimento;
                            }
                        ?>"><br>

                        <select class="form-control" id="sexo" name="sexo" required placeholder="sexo" value="<?php
                        if (isset($administrador))
                            foreach ($administrador as $admin) {
                                echo $admin->sexo;
                            }
                        ?>">
                            <option value="">Sexo</option>
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                            <option value="outros">Outros</option>
                        </select><br>

                        <input type="email" name="email" placeholder="Email" required=" " value="<?php
                        if (isset($administrador))
                            foreach ($administrador as $admin) {
                                echo $admin->email;
                            }
                        ?>">

                        <input type="password" name="senha" placeholder="Senha" required=" " value="<?php
                        if (isset($administrador))
                            foreach ($administrador as $admin) {
                                echo $admin->senha;
                            }
                        ?>">

                        <input type="text" name="cpf" placeholder="CPF" required="" value="<?php
                        if (isset($administrador))
                            foreach ($administrador as $admin) {
                                echo $admin->cpf;
                            }
                        ?>">

                        <input type="text" name="rg" placeholder="RG" required=" " value="<?php
                        if (isset($administrador))
                            foreach ($administrador as $admin) {
                                echo $admin->rg;
                            }
                        ?>">

                        <input type="text" name="telefone" placeholder="Telefone" required=" " value="<?php
                        if (isset($administrador))
                            foreach ($administrador as $admin) {
                                echo $admin->telefone;
                            }
                        ?>">

                       <!-- <input type="text" name="cep" id="cep" placeholder="Cep" required=" " value="<?php
                       // if (isset($administrador))
                       //     foreach ($administrador as $admin) {
                       //         echo $admin->cep;
                       //     }
                        ?>">

                        <input type="text" id="uf"  name="nomeEstado" required placeholder="Estado" value="<?php
                      //  if (isset($administrador))
                      //      foreach ($administrador as $admin) {
                      //          echo $admin->nomeEstado;
                      //      }
                        ?>">

                        <input type="text" id="cidade" name="nomeCidade" required placeholder="Cidade" value="<?php
                      //  if (isset($administrador))
                      //      foreach ($administrador as $admin) {
                      //          echo $admin->nomeCidade;
                      //      }
                        ?>">

                        <input type="text" name="nomeBairro" id="bairro" placeholder="Bairro" required=" " value="<?php
                     //   if (isset($administrador))
                     //       foreach ($administrador as $admin) {
                     //           echo $admin->nomeBairro;
                     //       }
                        ?>">

                        <input type="text" name="nomeRua" id="rua" placeholder="Rua" required=" " value="<?php
                     //    if (isset($administrador))
                     //       foreach ($administrador as $admin) {
                     //           echo $admin->nomeRua;
                     //       }
                        ?>">

                        <input type="text" name="numeroResidencia" id="numero" placeholder="Número Resisdência" required=" " value="<?php
                     //          if (isset($administrador))
                     //              foreach ($administrador as $admin) {
                     //                  echo $admin->numeroResidencia;
                     //              }
                     //          ?>"> -->


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
        <?php
        ?>
    </body>
</html>
