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
        <br>
        <section class="margin-top-40 checkout-loja">
            <div class="container">
              
                <div class="form">
                <?php echo form_open('ControllerProduto/gravarProduto'); ?>
                  <div class="col-md-13">  
                <div class="col-md-3">
                    <h2 class="text-left"> <i class="fa fa-user"></i> Comprador</h2>
                    <p class="text-left margin-checkout">Já tem cadastro, <a href="<?= base_url('ControllerCheckout/login') ?>" title="login">efetue o login</a></p>

                    <div class="form-group margin-checkout">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control center-block" name="nome" id="nome" placeholder="Nome Completo">
                    </div>
                    
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF">
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
                    <h2 class="text-center"> <i class="fa fa-truck"></i> Envio</h2>
                    
                </div>
                <div class="col-md-5">
                    <h2 class="text-center"> <i class="fa fa-credit-card"></i> Pagamento</h2>
                    
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
