<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>


<?php if (isset($mensagens)) { ?>
    <div class="alert alert-danger text-center"> <?php echo $mensagens; ?>

    </div>

<?php } ?>


<?php if (isset($situacao)) { ?>
    <div class="alert alert-success text-center"><?php
        echo $situacao;
        unset($situacao);
        ?></div>
<?php } ?>


<script type="text/javascript">
    $("#telefone").mask("(00) 00000-0000");
    $("#input_cpf").mask('000.000.000-00');
</script>


<div class="w3_login">
    <?php if ($this->session->flashdata("success")) : ?>
        <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>

    <?php endif ?>

    <?php if ($this->session->flashdata("danger")) : ?>

        <center><p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p></center>
    <?php endif ?>
    <br><br>
    <div class="row justify-content-md-center">
        <div class="col-sm-6">
            <div class="card text-center">
                <div class="card-header">
                    <h2><i class="fa fa-user"></i> Cadastre-se</h2>
                </div>
                <div class="card-body">
                    <?php echo form_open('ControllerCliente/validarCadastro'); ?>
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

                    <input type="hidden" name="tipo" value="usuario">

                    <div class="form-group">
                        <div class="text-left">Nome:</div>
                        <input type="text" class="form-control margin-top-2" name="nomeCliente" placeholder="Nome completo" required=" " value="<?php
                        if (isset($cliente))
                            foreach ($cliente as $cli) {
                                echo $cli->nome;
                            }
                        ?>">

                    </div>

                    <div class="form-group">
                        <div class="text-left">E-mail:</div>
                        <input type="email" class="form-control margin-top-2" name="email" placeholder="E-mail" required=" " value="<?php
                        if (isset($cliente))
                            foreach ($cliente as $cli) {
                                echo $cli->email;
                            }
                        ?>">

                    </div>

                    <div class="form-group">
                        <div class="text-left">Senha:</div>
                        <input type="password" class="form-control margin-top-2" name="senha" placeholder="Senha" required=" " value="<?php
                        if (isset($cliente))
                            foreach ($cliente as $cli) {
                                echo $cli->senha;
                            }
                        ?>">

                    </div>

                    <div class="form-group">
                        <div class="text-left">CPF:</div>
                        <input type="text" class="form-control margin-top-2" class="cpf" 
                               id="input_cpf" name="cpf"  placeholder="CPF" required="" value="<?php
                               if (isset($cliente))
                                   foreach ($cliente as $cli) {
                                       echo $cli->cpf;
                                   }
                               ?>">

                    </div>

                    <div class="form-group">
                        <div class="text-left">Telefone:</div> 
                        <input type="text" class="form-control margin-top-2" 
                               name="telefone" placeholder="Telefone" required="" id="telefone">

                    </div>

                    <input type="submit" class="btn btn-primary btn-lg" value="Cadastrar">

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    <br><br>
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

</body>

</html>