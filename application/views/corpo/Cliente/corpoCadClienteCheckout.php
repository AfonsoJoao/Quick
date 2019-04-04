
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
    <div class="row justify-content-md-center">
        <div class="col-sm-6">
            <div class="card text-center">
                <div class="card-header">
                    <h2><i class="fa fa-user"></i> Cadastre-se</h2>
                </div>
                <div class="card-body">
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

                    <input type="hidden" name="tipo" value="usuario">
                    
                    <div class="form-group">
                       <div class="text-left">Nome:</div>
                    <input type="text" class="form-control margin-top-2" name="nomeCliente" placeholder="Nome completo" required=" ">
                    
                    </div>
                    
                    <div class="form-group">
                       <div class="text-left">E-mail:</div>
                    <input type="email" class="form-control margin-top-2" name="email" placeholder="E-mail" required=" ">
                    
                    </div>
                    
                    <div class="form-group">
                       <div class="text-left">Senha:</div>
                    <input type="password" class="form-control margin-top-2" name="senha" placeholder="Senha" required=" ">
                    
                    </div>
                    
                    <div class="form-group">
                       <div class="text-left">CPF:</div>
                    <input type="text" class="form-control margin-top-2" class="cpf" name="cpf" placeholder="CPF" required="">
                    
                    </div>
                    
                    <div class="form-group">
                       <div class="text-left">Telefone:</div>
                    <input type="text" class="form-control margin-top-2" class="telefone" name="telefone" placeholder="Telefone" required=" ">
                    
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
<!-- Newsletter -->

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

<script src="<?php echo base_url('js/jquery-3.3.1.min.js')?>"></script>
<script src="<?php echo base_url('css/bootstrap4/popper.js')?>"></script>
<script src="<?php echo base_url('css/bootstrap4/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('plugins/greensock/TweenMax.min.js')?>"></script>
<script src="<?php echo base_url('plugins/greensock/TimelineMax.min.js')?>"></script>
<script src="<?php echo base_url('plugins/scrollmagic/ScrollMagic.min.js')?>"></script>
<script src="<?php echo base_url('plugins/greensock/animation.gsap.min.js')?>"></script>
<script src="<?php echo base_url('plugins/greensock/ScrollToPlugin.min.js')?>"></script>
<script src="<?php echo base_url('plugins/OwlCarousel2-2.2.1/owl.carousel.js')?>"></script>
<script src="<?php echo base_url('plugins/slick-1.8.0/slick.js')?>"></script>
<script src="<?php echo base_url('plugins/easing/easing.js')?>"></script>

<script src="<?php echo base_url('plugins/Isotope/isotope.pkgd.min.js')?>"></script>
<script src="<?php echo base_url('plugins/jquery-ui-1.12.1.custom/jquery-ui.js')?>"></script>
<script src="<?php echo base_url('plugins/parallax-js-master/parallax.min.js')?>"></script>

</body>

</html>