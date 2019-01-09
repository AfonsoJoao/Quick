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
    <!-- Inicio carroussel -->
    <div class="w3l_banner_nav_right">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <?php
            $controle_ativo = 1;
            foreach ($banner as $banner) {
                ?>
                <?php
                if ($controle_ativo == 1) {
                    ?>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="<?php echo base_url('application/images/' . $banner->imagemBanner); ?>" alt="...">
                            <div class="carousel-caption">
                                
                            </div>
                        </div>
                        <?php
                        $controle_ativo = 2;
                    } else {
                        ?>
                        <div class="item">
                            <img src="<?php echo base_url('application/images/' . $banner->imagemBanner); ?>" alt="...">
                            <div class="carousel-caption">
                              
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- Fim carroussel -->
    <link rel="stylesheet" href="<?php echo base_url('css/flexslider.css'); ?>" type="text/css" media="screen" property="" />
    <script defer src="<?php echo base_url('js/jquery.flexslider.js'); ?>"></script>
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