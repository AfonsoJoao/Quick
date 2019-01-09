            <div class="w3_login_module">
                <div class="module form-module">
                    <div class="">
                    </div>

                    <div class="form">
                        
                        <h2>Insira o seu email</h2>
                        <?php echo form_open('ControllerCliente/recuperarSenha'); ?>
                        <input type="email" name="email" placeholder="Email" required=" ">
                        <input type="submit" value="Enviar">
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
