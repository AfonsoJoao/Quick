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


        <br>
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
                                    <td class="text-right"><?= formataMoedaReal($linha['subtotal'], TRUE) ?></td> <!-- OBS: Depois colocar no formato moeda real -->


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

            <?php foreach ($cliente as $cli) { ?>

                <input type="hidden" name="idCliente" value="<?php echo $cli->idCliente; ?>">
                <input type="hidden" name="nomeCliente" value="<?php echo $cli->nomeCliente; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cli->cpf; ?>">
                <input type="hidden" name="email" value="<?php echo $cli->email; ?>">
                <input type="hidden" name="senha" value="<?php echo $cli->senha; ?>">
                <input type="hidden" name="telefone" value="<?php echo $cli->telefone; ?>">

                <?php
            }
            ?>

            <div class="container">
                <div class="row">

                    <div class="col-sm">
                        <h2> <i class="fa fa-truck"></i> Envio</h2>

                        <label for="cep" class="margin-checkout">CEP</label>
                        <div class="input-group">
                            <input type="text" class="form-control input_cep" name="cep" id="cep" placeholder="CEP">
                         <!--   <span class="input-group-btn">
                                <button class="btn btn-primary btn-calculo-frete-checkout" type="button">Calcular</button>
                            </span> -->
                        </div>

                        <div class="form-group">
                            <label for="endereco" class="margin-top-1">Endereço</label> <!-- OBS: Salvar na tabela endereco no campo nome da rua -->
                            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço">
                        </div>

                        <div class="form-group">
                            <label for="numero">Número</label> <!-- OBS: Salvar na tabela endereco -->
                            <input type="text" class="form-control" name="numero" id="numero" placeholder="Número">
                        </div>

                        <div class="form-group">
                            <label for="complemeto">Complemento</label> <!-- OBS: Salvar na tabela endereco -->
                            <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Complemento">
                        </div>

                        <div class="form-group">
                            <label for="bairro">Bairro</label> <!-- OBS: Salvar na tabela bairro -->
                            <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro">
                        </div>

                        <div class="form-group">
                            <label for="cidade">Cidade</label> <!-- OBS: Salvar na tabela cidade -->
                            <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade">
                        </div>

                        <div class="form-group">
                            <label for="estado">Estado</label> <!-- OBS: Salvar na tabela estado -->
                            <select class="form-control" name="estado" id="estado">
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-sm">
                        <h2> <i class="fa fa-credit-card"></i> Pagamento</h2>
                        <div class="form-group margin-checkout">
                            <label for="forma_pagamento">Forma de Pagamento</label>
                            <select name="forma_Envio" class="form-control select-forma-pagamento">
                                <option>Forma de Pagamento</option>
                                <option value="Cartao_de_Credito">Cartão de Crédito</option>
                                <option value="A_Vista">A Vista</option>
                            </select>
                        </div>

                        <!-- <div class="pagamento-cartao d-none">
                             <div class="form-group margin-checkout">
                                 <label for="cc_numero">Número do Cartão</label>
                                 <input type="text" class="form-control" name="numeroCartao" id="cc_numero" placeholder="0000 0000 0000 0000">
                             </div>

                             <div class="form-group margin-checkout">
                                 <label for="cc_titular">Nome do Titular</label>
                                 <input type="text" class="form-control" name="nomeTitular" id="cc_titular" placeholder="Nome do Titular">
                             </div>

                             <div class="form-group margin-checkout">
                                 <label for="cc_validade">Validade do Cartão</label>
                                 <input type="text" class="form-control input_mes_ano" name="validadeCartao" id="cc_validade" placeholder="00/0000">
                             </div>

                             <div class="form-group margin-checkout">
                                 <label for="cc_codigo">Código de Segurança</label>
                                 <input type="text" class="form-control" name="codigoSeguranca" id="cc_codigo" placeholder="000">
                             </div>

                         </div>

                         <div class="pagamento-avista d-none">
                             <div class="form-group margin-checkout">
                                 <label for="cedulas">Quais cedulas serão utilizadas no pagamento?</label><br>
                                 <input type="checkbox" name="2,00" value="2,00"> R$ 2,00<br>
                                 <input type="checkbox" name="5,00" value="5,00"> R$ 5,00<br>
                                 <input type="checkbox" name="10,00" value="10,00"> R$ 10,00<br>
                                 <input type="checkbox" name="20,00" value="20,00"> R$ 20,00<br>
                                 <input type="checkbox" name="50,00" value="50,00"> R$ 50,00<br>
                                 <input type="checkbox" name="100,00" value="100,00"> R$ 100,00<br>
                             </div>
                         </div> -->
                        <br><br><br><br><br><br>

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

    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
                        <div class="newsletter_title_container">
                            <div class="newsletter_icon"><img src="images/send.png" alt=""></div>
                            <div class="newsletter_title">Sign up for Newsletter</div>
                            <div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
                        </div>
                        <div class="newsletter_content clearfix">
                            <form action="#" class="newsletter_form">
                                <input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
                                <button class="newsletter_button">Subscribe</button>
                            </form>
                            <div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 footer_col">
                    <div class="footer_column footer_contact">
                        <div class="logo_container">
                            <div class="logo"><a href="#">OneTech</a></div>
                        </div>
                        <div class="footer_title">Got Question? Call Us 24/7</div>
                        <div class="footer_phone">+38 068 005 3570</div>
                        <div class="footer_contact_text">
                            <p>17 Princess Road, London</p>
                            <p>Grester London NW18JR, UK</p>
                        </div>
                        <div class="footer_social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-google"></i></a></li>
                                <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 offset-lg-2">
                    <div class="footer_column">
                        <div class="footer_title">Find it Fast</div>
                        <ul class="footer_list">
                            <li><a href="#">Computers & Laptops</a></li>
                            <li><a href="#">Cameras & Photos</a></li>
                            <li><a href="#">Hardware</a></li>
                            <li><a href="#">Smartphones & Tablets</a></li>
                            <li><a href="#">TV & Audio</a></li>
                        </ul>
                        <div class="footer_subtitle">Gadgets</div>
                        <ul class="footer_list">
                            <li><a href="#">Car Electronics</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="footer_column">
                        <ul class="footer_list footer_list_2">
                            <li><a href="#">Video Games & Consoles</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Cameras & Photos</a></li>
                            <li><a href="#">Hardware</a></li>
                            <li><a href="#">Computers & Laptops</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="footer_column">
                        <div class="footer_title">Customer Care</div>
                        <ul class="footer_list">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order Tracking</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Customer Services</a></li>
                            <li><a href="#">Returns / Exchange</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Product Support</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </footer>

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
<script src="<?php echo base_url('js/checkout.js'); ?>"></script>


<!--Fim da pagina do checkout com o cliente logado. -->

</body>

</html>


