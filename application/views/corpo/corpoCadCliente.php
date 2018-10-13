<?php
        if (isset($situacao)) {
            $st = $situacao;
            ?>
            <script> alert('<?php echo $st; ?>');</script>
            <?php
            unset($situacao);
        }
        ?>
            <div class="w3_login">
            <?php if($this->session->flashdata("success")) :   ?>
            <p class="alert alert-success"><?= $this->session->flashdata("success")?></p>
            
            <?php endif ?>
            
            <?php if($this->session->flashdata("danger")) :   ?>
            
            <center><p class="alert alert-danger"><?= $this->session->flashdata("danger")?></p></center>
            <?php endif ?>
           
                <h3>Entre ou Cadastre-se</h3>
                <div class="w3_login_module">
                    <div class="module form-module">
                        <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                            <div class="tooltip">Login</div>
                        </div>

                        <div class="form">
                            <h2>Criar uma conta</h2>
                            <?php echo form_open('ControllerCliente/gravarCliente'); ?>
                            <input type="hidden" name="acao" value="<?php
                            if (isset($cliente))
                                echo "alterar";
                            else
                                echo "inserir";
                            ?>">
                           
                            <input type="hidden" name="idCliente" value="<?php
                            if (isset($cliente))
                                foreach ($cliente as $cli) {
                                    echo $cli->idCliente;
                                }
                            ?>">
                            <input type="text" name="nome" placeholder="Nome completo" required=" " value="<?php
                            if (isset($cliente))
                                foreach ($cliente as $cli) {
                                    echo $cli->nome;
                                }
                            ?>">

                            <input class="form-control" type="date" name="dataNascimento" required=" " value="<?php
                            if (isset($cliente))
                                foreach ($cliente as $cli) {
                                    echo $cli->dataNascimento;
                                }
                            ?>"><br>

                            <select class="form-control" id="sexo" name="sexo" required placeholder="sexo">
                                <option value="">Sexo</option>
                                <option value="masculino">Masculino</option>
                                <option value="feminino">Feminino</option>
                                <option value="feminino">Outros</option>
                            </select><br>

                            <input type="email" name="email" placeholder="Email" required=" " value="<?php
                            if (isset($cliente))
                                foreach ($cliente as $cli) {
                                    echo $cli->email;
                                }
                            ?>">
                            
                            <input type="password" name="senhaCliente" placeholder="Senha" required=" " value="<?php
                            if (isset($cliente))
                                foreach ($cliente as $cli) {
                                    echo $cli->senhaCliente;
                                }
                            ?>">
                            
                            <input type="text" name="cpf" placeholder="CPF" required="" value="<?php
                            if (isset($cliente))
                                foreach ($cliente as $cli) {
                                    echo $cli->cpf;
                                }
                            ?>">

                            <input type="text" name="rg" placeholder="RG" required=" " value="<?php
                            if (isset($cliente))
                                foreach ($cliente as $cli) {
                                    echo $cli->rg;
                                }
                            ?>">
                            
                            <input type="text" name="telefone" placeholder="Telefone" required=" " value="<?php
                            if (isset($cliente))
                                foreach ($cliente as $cli) {
                                    echo $cli->telefone;
                                }
                            ?>"><br><br>

                            <input type="submit" value="Salvar">
                            <?php echo form_close(); ?>
                        </div>
                        <div class="form">
                            <?php if(!$this->session->userdata("usuario_logado")); ?>
                            <h2>Faça login em sua conta</h2>
                            <?php echo form_open('ControllerLogin/autenticar'); ?>
                                <input type="text" name="email" placeholder="Email" required=" ">
                                <input type="password" name="senhaCliente" placeholder="Senha" required=" ">
                                <input type="submit" value="Entrar">
                                
                            <?php echo form_close(); ?>
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
        <div class="clearfix"></div>

        <?php
// put your code here
        ?>
