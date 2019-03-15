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

        <div class="col-md-6">

            <h3 class="margin-top-20"> Configuração do Pag Seguro</h3>

            <?php // getMsg('msgCadastro'); ?>

            <?php if (isset($mensagens)) { ?>
                <div class="alert alert-danger"> <?php echo $mensagens; ?></div>
            <?php } ?>

            <div class="form">
                <?php echo form_open('pagseguro'); ?>

                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">E-mail</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="email" placeholder="E-mail"
                               required="" value="<?= $query->email ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="token" class="col-sm-2 control-label">Token</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="token" placeholder="Token"
                               required="" value="<?= $query->token ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="a_vista" class="col-sm-2 control-label">A vista</label>
                    <div class="col-sm-3">
                        <select name="a_vista" class="form-control">
                            <option value="1" <?= $query->a_vista == 1 ? 'selected' : '' ?>>Sim</option>
                            <option value="0" <?= $query->a_vista == 0 ? 'selected' : '' ?>>Não</option>
                        </select>               
                    </div>
                </div>

                <div class="form-group">
                    <label for="cartao" class="col-sm-2 control-label">Cartão</label>
                    <div class="col-sm-3">
                        <select name="cartao" class="form-control">
                            <option value="1" <?= $query->cartao == 1 ? 'selected' : '' ?>>Sim</option>
                            <option value="0" <?= $query->cartao == 0 ? 'selected' : '' ?>>Não</option>
                        </select>               
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Salvar</button>

                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>

        </div>

    </body>
</html>

