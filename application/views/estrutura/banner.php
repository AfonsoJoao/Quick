<!-- banner -->
        <div class="banner">
            <div class="w3l_banner_nav_left">
                <nav class="navbar nav_bottom">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div> 
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav nav_1">
                            <li class="dropdown mega-dropdown active">
                                <a class="dropdown-toggle" data-toggle="dropdown">Alimentação<span class="caret"></span></a>
                                <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                    <div class="w3ls_vegetables">
                                        <ul>	
                                            <li><a href="<?php echo base_url('ControllerCategorias/listaCate/arroz'); ?>">Arroz</a></li>
                                            <li><a href="<?php echo base_url('ControllerCategorias/listaCate/feijao'); ?>">Feijão</a></li>
                                            <li><a href="<?php echo base_url('ControllerCategorias/listaCate/sal'); ?>">Sal</a></li>
                                            <li><a href="<?php echo base_url('ControllerCategorias/listaCate/acucar'); ?>">Açucar</a></li>
                                            <li><a href="<?php echo base_url('ControllerCategorias/listaCate/massas'); ?>">Massas</a></li>
                                            <li><a href="<?php echo base_url('ControllerCategorias/listaCate/oleos'); ?>">Oléos</a></li>
                                            <li><a href="<?php echo base_url('ControllerCategorias/listaCate/laticineos'); ?>">Laticíneos</a></li>
                                            <li><a href="<?php echo base_url('ControllerCategorias/listaCate/paes'); ?>">Pães</a></li>
                                        </ul>
                                    </div>                  
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown">Frios<span class="caret"></span></a>
                                <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                    <div class="w3ls_vegetables">
                                        <ul>
                                            <li><a href="<?php echo base_url('ControllerCategorias/listaCate/carnes'); ?>">Carnes</a></li>
                                            <li><a href="<?php echo base_url('ControllerCategorias/listaCate/aves'); ?>">Aves</a></li>
                                            <li><a href="<?php echo base_url('ControllerCategorias/listaCate/peixes'); ?>">Peixes</a></li>
                                        </ul>
                                    </div>                  
                                </div>	
                            </li>
                            <li class="dropdown mega-dropdown active">
                                <a class="dropdown-toggle" data-toggle="dropdown">Hortifruti<span class="caret"></span></a>				
                                <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                    <div class="w3ls_vegetables">
                                        <ul>	
                                            <li><a href="<?php echo base_url('ControllerCategorias/listaCate/vegetais'); ?>">Vegetais</a></li>
                                            <li><a href="<?php echo base_url('ControllerCategorias/listaCate/frutas'); ?>">Frutas</a></li>
                                        </ul>
                                    </div>                  
                                </div>				
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown">Bebidas<span class="caret"></span></a>
                                <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                    <div class="w3ls_vegetables">
                                        <ul>
                                            <li><a href="<?php echo base_url('ControllerCategorias/listaCate/alcoolicas'); ?>">Alcoólicas</a></li>
                                            <li><a href="<?php echo base_url('ControllerCategorias/listaCate/naoalcoolicas'); ?>">Não alcoólicas</a></li>
                                        </ul>
                                    </div>                  
                                </div>	
                            </li>
                            <li><a href="<?php echo base_url('ControllerCategorias/listaCate/limpeza'); ?>">Produtos de limpeza</a></li>
                            <li><a href="<?php echo base_url('ControllerCategorias/listaCate/higiene'); ?>">Higiene</a></li>
                            <li><a href="<?php echo base_url('ControllerCategorias/listaCate/pet'); ?>">Pet</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
<div class="w3l_banner_nav_right">
                <section class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="w3l_banner_nav_right_banner">
                                    <h3>Make your <span>food</span> with Spicy.</h3>
                                    <div class="more">
                                        <a href="<?php echo base_url('#'); ?>" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Compre Agora</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="w3l_banner_nav_right_banner1">
                                    <h3>Make your <span>food</span> with Spicy.</h3>
                                    <div class="more">
                                        <a href="<?php echo base_url('#'); ?>" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Compre Agora</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="w3l_banner_nav_right_banner2">
                                    <h3>upto <i>50%</i> off.</h3>
                                    <div class="more">
                                        <a href="<?php echo base_url('#'); ?>" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Compra Agora</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                                    </section>
    <link rel="stylesheet" href="<?php echo base_url('css/flexslider.css');?>" type="text/css" media="screen" property="" />
                <script defer src="<?php echo base_url('js/jquery.flexslider.js');?>"></script>
                <script type="text/javascript">
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
                </script>
                </div>
            <div class="clearfix"></div>
        </div>