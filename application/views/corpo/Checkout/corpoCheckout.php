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
        
        <script src="<?php echo base_url('js/checkout.js'); ?>"></script>
      
    </head>
    <body>
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
                <?php foreach ($carrinho as $indice => $linha) { ?> <!-- exibe a lista de produtos do carrinho através do foreach -->
                    <tr>
                        <td><?= $linha['nome'] ?></td>
                        <td class="text-right"><?= formataMoedaReal ($linha['valor'], TRUE) ?></td>
                        <td class="text-center"> <?= $linha['qtd'] ?> </td>
                        <td class="text-right"><?= formataMoedaReal ($linha['subtotal'], TRUE) ?></td> <!-- OBS: Depois colocar no formato moeda real -->
                        

                    </tr>
                <?php } // Fim da lista produtos carrinho ?>

            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="text-right">Total Carrinho</td>
                    <td class="text-right total-carrinho"><?= formataMoedaReal ($this->carrinhocompras->total(), TRUE) ?></td>

                </tr>

            </tfoot>

        </table>
        <br><br>
    </div>

                <div class="form">
                    <?php echo form_open('ControllerProduto/gravarProduto'); ?>

                    <div class="col-md-4">
                        <h2> <i class="fa fa-user"></i> Comprador</h2>
                        <p class="margin-checkout">Já tem cadastro, <a href="<?= base_url('ControllerCheckout/login') ?>" title="login">efetue o login</a></p>

                        <div class="form-group margin-checkout">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo">
                        </div>

                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control input_cpf" name="cpf" id="cpf" placeholder="CPF">
                        </div>

                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="tel" class="form-control" name="telefone" id="cpf" placeholder="(00) 99999-9999">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                        </div>

                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
                        </div>

                    </div>

                    <div class="col-md-4">
                        <h2> <i class="fa fa-truck"></i> Envio</h2>

                        <label for="cep" class="margin-checkout">CEP</label>
                        <div class="input-group">
                            <input type="text" class="form-control input_cep" name="cep" id="cep" placeholder="CEP">
                            <span class="input-group-btn">
                                <button class="btn btn-primary btn-calculo-frete-checkout" type="button">Calcular</button>
                            </span>
                        </div><!-- /input-group -->

                        <div class="form-group">
                            <label for="endereco" class="margin-top-1">Endereço</label> <!-- OBS: Salvar na tabela endereco no campo nome da rua -->
                            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço">
                        </div>

                        <div class="form-group">
                            <label for="numero">Número</label> <!-- OBS: Salvar na tabela endereco -->
                            <input type="text" class="form-control" name="numero" id="numero" placeholder="Número">
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
                    <div class="col-md-4">
                        <h2> <i class="fa fa-credit-card"></i> Pagamento</h2>
                        <div class="form-group margin-checkout">
                            <label for="forma_pagamento">Forma de Pagamento</label>
                            <select name="forma_pagamento" class="form-control select-forma-pagamento">
                                <option value="1">Cartão de Crédito</option>
                                <option value="2">A Vista</option>
                            </select>
                        </div>

                        <div class="pagamento-cartao">
                            <div class="form-group margin-checkout">
                                <label for="cc_numero">Número do Cartão</label>
                                <input type="text" class="form-control" id="cc_numero" placeholder="0000 0000 0000 0000">
                            </div>

                            <div class="form-group margin-checkout">
                                <label for="cc_titular">Nome do Titular</label>
                                <input type="text" class="form-control" id="cc_titular" placeholder="Nome do Titular">
                            </div>

                            <div class="form-group margin-checkout">
                                <label for="cc_validade">Validade do Cartão</label>
                                <input type="text" class="form-control input_mes_ano" id="cc_validade" placeholder="00/0000">
                            </div>

                            <div class="form-group margin-checkout">
                                <label for="cc_codigo">Código de Segurança</label>
                                <input type="text" class="form-control" id="cc_codigo" placeholder="000">
                            </div>

                        </div>

                        <div class="pagamento-avista hide">
                            <div class="form-group margin-checkout">
                                <label for="cedulas">Quais cedulas serão utilizadas no pagamento?</label><br>
                                <input type="checkbox" name="2,00" value="2,00"> R$ 2,00<br>
                                <input type="checkbox" name="5,00" value="5,00"> R$ 5,00<br>
                                <input type="checkbox" name="10,00" value="10,00"> R$ 10,00<br>
                                <input type="checkbox" name="20,00" value="20,00"> R$ 20,00<br>
                                <input type="checkbox" name="50,00" value="50,00"> R$ 50,00<br>
                                <input type="checkbox" name="100,00" value="100,00"> R$ 100,00<br>
                            </div>
                        </div>

                        <div class="pagamento-tranferencia hide">
                            <div class="alert alert-info" role="alert">Você ao final da compra, vai poder acessar o ambiente seguro do seu banco.</div>
                        </div>

                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
        <br><br><br>

    </section>


    <?php
    // put your code here
    ?>
</body>
</html>
