<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Quick - Finalizar pedido</title>

    </head>
    <body>

        <!-- Inicio da página sem o cliente está logado -->        
        <?php
        if (!isset($_SESSION['usuario_logado'])) {
            ?>

            <br>

            <?php if ($this->session->flashdata("success")) : ?>
                <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>

            <?php endif ?>

            <?php if ($this->session->flashdata("danger")) : ?>

            <center><p class="alert alert-danger"><?= $this->session->flashdata("danger") ?><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button></p></center>
        <?php endif ?>

        <section class="margin-top-40 checkout-loja">
            <div class="container">

                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Descrição</th>
                                <th class="text-right">Valor</th>
                                <th class="text-center">Quantidade</th>
                                <th class="text-right">Subtotal</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($carrinho as $indice => $linha) { ?> <!-- exibe a lista de produtos do carrinho através do foreach -->
                                <tr>
                                    <td><?= $linha['nome'] ?></td>
                                    <td class="text-right"><?= formataMoedaReal($linha['valor'], TRUE) ?></td>
                                    <td class="text-center"> <?= $linha['qtd'] ?> </td>
                                    <td class="text-right"><?= formataMoedaReal($linha['subtotal'], TRUE) ?></td>


                                </tr>

                            <?php } // Fim da lista produtos carrinho ?>

                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3" class="text-right">Total Carrinho</td>
                                <td class="text-right total-carrinho"><?= formataMoedaReal($this->carrinhocompras->total(), TRUE) ?></td>

                            </tr>

                        </tfoot>

                    </table>
                    <br><br>
                </div>
            </div>


            <div class="container">
                <div class="row">     
                    <div class="col-sm">

                        <div class="row justify-content-md-center">
                            <div class="col-sm-6">
                                <div class="card text-center">
                                    <div class="card-header">
                                        <h2>Faça login em sua conta</h2>
                                    </div>
                                    <div class="card-body">
                                        <?php echo form_open('ControllerCheckout/autenticarCliente'); ?>


                                        <div class="form-group">
                                            <div class="text-left">E-mail:</div>
                                            <input type="text" class="form-control margin-top-2" name="email" placeholder="E-mail" required=" ">    
                                        </div>

                                        <div class="form-group">
                                            <div class="text-left">Senha:</div>
                                            <input type="password" class="form-control margin-top-2" name="senha" placeholder="Senha" required=" ">
                                        </div>

                                        <input type="submit" class="btn btn-primary btn-lg" value="Entrar">

                                        <div class="text-left">
                                            Não tem uma conta? <br>
                                            <i class="fa fa-user"></i> <a href="<?php echo base_url('ControllerCheckout/cadClienteCheckout'); ?>"> Cadastre-se</a>
                                        </div>

                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
        </section>

        <!--Fim da pagina do checkout sem o cliente tá logado. -->


        <!--Inicio da pagina do checkout com o cliente logado. -->
        <?php
    } else {
        ?> 
        <?php
        if (isset($situacao)) {
            $st = $situacao;
            ?>
            <script> alert('<?php echo $st; ?>');</script>
            <?php
            unset($situacao);
        }
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

        <script type="text/javascript">
                $("#cep").mask('00000-000');
        </script>



        <?php if ($this->session->flashdata("success")) : ?>
            <center><p class="alert alert-success"><?= $this->session->flashdata("success") ?><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button></p></center>

        <?php endif ?>

        <?php if ($this->session->flashdata("danger")) : ?>

            <center><p class="alert alert-danger"><?= $this->session->flashdata("danger") ?><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button></p></center>
        <?php endif ?>



        <section class="margin-top-40 checkout-loja">
            <div class="container">

                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Descrição</th>
                                <th class="text-right">Valor</th>
                                <th class="text-center">Quantidade</th>
                                <th class="text-right">Subtotal</th>
                            </tr>
                        </thead>


                        <tbody>

                            <?php echo form_open('ControllerCheckout/enviarPedido'); ?>
                            <?php $_SESSION ['dados'] = array(); ?> <!-- criado a sessão dados que é um array. -->

                            <?php foreach ($carrinho as $indice => $linha) { ?> <!-- exibe a lista de produtos do carrinho através do foreach -->    

                                <tr>
                                    <td><?= $linha['nome'] ?></td>
                                    <td class="text-right"><?= formataMoedaReal($linha['valor'], TRUE) ?></td>
                                    <td class="text-center"> <?= $linha['qtd'] ?> </td>
                                    <td class="text-right"><?= formataMoedaReal($linha['subtotal'], TRUE) ?></td>


                                </tr>

                                <?php
                                array_push($_SESSION ['dados'], array('nome_Item' => $linha['nome'],
                                    'valorUnitario' => $linha['valor'],
                                    'quantidade' => $linha['qtd'],
                                    'subtotal' => $linha['subtotal']
                                        )
                                ); //array push é responsavel por adicionar itens a um array já existente 
                                ?>   

                            <?php } // Fim da lista produtos carrinho   ?>



                        <input type="hidden" name="total" value="<?= $this->carrinhocompras->total() ?>">
                        <input type="hidden" name="status" value="Aguardando Pagamento">

                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3" class="text-right">Total Carrinho</td>
                                <td class="text-right total-carrinho"><?= formataMoedaReal($this->carrinhocompras->total(), TRUE) ?></td>

                            </tr>

                        </tfoot>

                    </table>
                    <br><br>
                </div>
            </div>


            <?php
            if (isset($cliente)) {
                foreach ($cliente as $cli) {
                    ?>

                    <input type="hidden" name="idCliente" value="<?php echo $cli->idCliente; ?>">
                    <input type="hidden" name="nomeCliente" value="<?php echo $cli->nomeCliente; ?>">
                    <input type="hidden" name="cpf" value="<?php echo $cli->cpf; ?>">
                    <input type="hidden" name="email" value="<?php echo $cli->email; ?>">
                    <input type="hidden" name="senha" value="<?php echo $cli->senha; ?>">
                    <input type="hidden" name="telefone" value="<?php echo $cli->telefone; ?>">

                    <?php
                }
            }
            ?>


            <!-- Adicionando JQuery -->
            <script src="https://code.jquery.com/jquery-3.2.1.min.js"
                    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

            <!-- Adicionando Javascript -->
            <script type="text/javascript" >

                $(document).ready(function () {

                    function limpa_formulário_cep() {
                        // Limpa valores do formulário de cep.
                        $("#rua").val("");
                        $("#bairro").val("");
                        $("#cidade").val("");
                        $("#uf").val("");

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
                                $("#rua").val("Carregando");
                                $("#bairro").val("Carregando");
                                $("#cidade").val("Carregando");
                                $("#uf").val("Carregando");


                                //Consulta o webservice viacep.com.br/
                                $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                                    if (!("erro" in dados)) {
                                        //Atualiza os campos com os valores da consulta.
                                        $("#rua").val(dados.logradouro);
                                        $("#bairro").val(dados.bairro);
                                        $("#cidade").val(dados.localidade);
                                        $("#uf").val(dados.uf);

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


            <div class="container">
                <div class="row">

                    <div class="col-sm">
                        <h2> <i class="fa fa-truck"></i> Envio</h2>

                        <label for="cep" class="margin-checkout">CEP:</label>
                        <div class="input-group">
                            <input type="text" class="form-control input_cep" name="cep" id="cep" placeholder="CEP">
                         <!--   <span class="input-group-btn">
                                <button class="btn btn-primary btn-calculo-frete-checkout" type="button">Calcular</button>
                            </span> -->
                        </div>

                        <div class="form-group">
                            <label for="endereco" class="margin-top-1">Endereço:</label> <!-- OBS: Salvar na tabela endereco no campo nome da rua -->
                            <input type="text" class="form-control" name="endereco" id="rua" placeholder="Endereço">
                        </div>

                        <div class="form-group">
                            <label for="bairro">Bairro:</label> <!-- OBS: Salvar na tabela bairro -->
                            <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro">
                        </div>

                        <div class="form-group">
                            <label for="cidade">Cidade:</label> <!-- OBS: Salvar na tabela cidade -->
                            <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade">
                        </div>

                        <div class="form-group">
                            <label for="estado">Estado:</label> <!-- OBS: Salvar na tabela estado -->
                            <input type="text" class="form-control" name="estado" id="uf" placeholder="Estado">

                        </div>

                        <div class="form-group">
                            <label for="complemeto">Complemento:</label> <!-- OBS: Salvar na tabela endereco -->
                            <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Complemento">
                        </div>

                        <div class="form-group">
                            <label for="numero">Número:</label> <!-- OBS: Salvar na tabela endereco -->
                            <input type="text" class="form-control" name="numero" id="numero" placeholder="Número">
                        </div>



                    </div>

                    <div class="col-sm">
                        <h2> <i class="fa fa-credit-card"></i> Pagamento</h2>
                        <div class="form-group margin-checkout">
                            <label for="forma_pagamento">Selecione a forma de pagamento:</label>
                            <select name="forma_Envio" class="form-control select-forma-pagamento">
                                <option>Selecione</option>
                                <option value="Cartão de Crédito">Cartão de Crédito</option>
                                <option value="A Vista">A Vista</option>
                            </select>
                        </div>

                        <div class="pagamento-cartao d-none">
                            <div class="form-group margin-checkout">
                                <label for="bandeiras">Selecione a bandeira do seu cartão de crédito:</label>
                                <select name="bandeira_cartao" class="form-control">
                                    <option>Selecione</option>
                                    <option value="Visa">Visa</option>
                                    <option value="Mastercard">Mastercard</option>
                                    <option value="American Express">American Express</option>
                                    <option value="Elo">Elo</option>
                                    <option value="Hipercard">Hipercard</option>
                                    <option value="Diners Club">Diners Club</option>
                                    <option value="Sorocred">Sorocred</option>
                                </select>
                            </div>

                        </div>

                        <div class="pagamento-avista d-none">
                            <div class="form-group margin-checkout">
                                <label for="cedulas">Quais cedulas serão utilizadas no pagamento?</label><br>
                                <input type="checkbox" name="cedulas" value="2,00"> R$ 2,00<br>
                                <input type="checkbox" name="cedulas" value="5,00"> R$ 5,00<br>
                                <input type="checkbox" name="cedulas" value="10,00"> R$ 10,00<br>
                                <input type="checkbox" name="cedulas" value="20,00"> R$ 20,00<br>
                                <input type="checkbox" name="cedulas" value="50,00"> R$ 50,00<br>
                                <input type="checkbox" name="cedulas" value="100,00"> R$ 100,00<br>
                            </div>
                        </div>

                        <div class="col margin-top-40">
                            <button type="submit" class="btn btn-success btn-lg">Enviar Pedido</button>

                        </div>
                    </div>
                    <?php echo form_close(); ?>

                </div>
            </div>
            <br><br>

        </section>

    <?php } ?>
    <!-- Copyright -->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                        <div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="logos ml-sm-auto">
                            <ul class="logos_list">
                                <li><a href="#"><img src="images/logos_1.png" alt=""></a></li>
                                <li><a href="#"><img src="images/logos_2.png" alt=""></a></li>
                                <li><a href="#"><img src="images/logos_3.png" alt=""></a></li>
                                <li><a href="#"><img src="images/logos_4.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('js/jquery-3.3.1.min.js') ?>"></script>
<script src="<?php echo base_url('css/bootstrap4/popper.js') ?>"></script>
<script src="<?php echo base_url('css/bootstrap4/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/greensock/TweenMax.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/greensock/TimelineMax.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/scrollmagic/ScrollMagic.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/greensock/animation.gsap.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/greensock/ScrollToPlugin.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/OwlCarousel2-2.2.1/owl.carousel.js') ?>"></script>
<script src="<?php echo base_url('plugins/slick-1.8.0/slick.js') ?>"></script>
<script src="<?php echo base_url('plugins/easing/easing.js') ?>"></script>


<script src="<?php echo base_url('plugins/Isotope/isotope.pkgd.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/jquery-ui-1.12.1.custom/jquery-ui.js') ?>"></script>
<script src="<?php echo base_url('plugins/parallax-js-master/parallax.min.js') ?>"></script>
<script src="<?php echo base_url('js/shop_custom.js') ?>"></script>

<!--Fim da pagina do checkout com o cliente logado. -->

</body>

</html>


