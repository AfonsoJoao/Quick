<script src="<?php echo base_url('js/mascaras.js'); ?>"></script>

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

    <br><br>

    <?php if ($this->session->flashdata("success")) : ?>
        <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>

    <?php endif ?>

    <?php if ($this->session->flashdata("danger")) : ?>

        <center><p class="alert alert-danger"><?= $this->session->flashdata("danger") ?><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button></p></center>
    <?php endif ?>
    <br><br>
    <div class="row justify-content-md-center">
        <div class="col-sm-6">
            <div class="card text-center">
                <div class="card-header">
                    <h2>Faça login em sua conta</h2>
                </div>
                <div class="card-body">
                    <?php echo form_open('ControllerLogin/autenticar'); ?>
                    <input type="text" class="form-control" name="email" placeholder="Email" required=" "><br>
                    <input type="password" class="form-control" name="senha" placeholder="Senha" required=" "><br>
                    <div class="col-sm-12" align="left">
                        <a href="<?php echo base_url('recuperarsenha/'); ?>">Esqueceu sua senha?</a>
                    </div>
                    <center><div class="col-sm-4">
                            <input type="submit" class="btn btn-primary btn-block" value="Entrar">
                        </div></center>
                    ou <a href="<?php echo base_url('cadastroclientes/'); ?>">criar uma conta</a>
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
