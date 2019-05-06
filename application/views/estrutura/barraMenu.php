<!-- Main Navigation -->

<nav class="main_nav">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="main_nav_content d-flex flex-row">

                    <!-- Categories Menu -->

                    <div class="cat_menu_container">
                        <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                            <div class="cat_burger"><span></span><span></span><span></span></div>
                            <div class="cat_menu_text">categorias</div>
                        </div>

                        <ul class="cat_menu">
                            <li class="hassubs">
                                <a href="#">Alimentação<i class="fas fa-chevron-right"></i></a>
                                <ul>
                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/arroz'); ?>">Arroz<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/feijao'); ?>">Feijão<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/sal'); ?>">Sal<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/acucar'); ?>">Açucar<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/massas'); ?>">Massas<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/oleos'); ?>">Oléos<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/laticinios'); ?>">Laticínios<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/paes'); ?>">Pães<i class="fas fa-chevron-right"></i></a></li>
                                </ul>
                            </li>
                            <li class="hassubs">
                                <a href="#">Frios<i class="fas fa-chevron-right"></i></a>
                                <ul>
                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/carnes'); ?>">Carnes<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/aves'); ?>">Aves<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/peixes'); ?>">Peixes<i class="fas fa-chevron-right"></i></a></li>
                                </ul>
                            </li>
                            <li class="hassubs">
                                <a href="#">Hortifruti<i class="fas fa-chevron-right"></i></a>
                                <ul>
                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/frutas'); ?>">Frutas<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/vegetais'); ?>">Vegetais<i class="fas fa-chevron-right"></i></a></li>
                                </ul>
                            </li>
                            <li class="hassubs">
                                <a href="#">Bebidas<i class="fas fa-chevron-right"></i></a>
                                <ul>
                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/alcoolicas'); ?>">Alcoólicas<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="<?php echo base_url('ControllerCategorias/listaCate/naoalcoolicas'); ?>">Não alcoólicas<i class="fas fa-chevron-right"></i></a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url('ControllerCategorias/listaCate/limpeza'); ?>">Produtos de limpeza <i class="fas fa-chevron-right ml-auto"></i></a></li>
                            <li><a href="<?php echo base_url('ControllerCategorias/listaCate/higiene'); ?>">Higiene<i class="fas fa-chevron-right"></i></a></li>
                            <li><a href="<?php echo base_url('ControllerCategorias/listaCate/pet'); ?>">Pets<i class="fas fa-chevron-right"></i></a></li>
                        </ul>
                    </div>

                    <!-- Main Nav Menu -->
                    <div class="main_nav_menu ml-auto">
                        <ul class="standard_dropdown main_nav_dropdown">
                            <li><a href="<?php echo base_url('index') ?>">Início<i class="fas fa-chevron-down"></i></a></li>
                            <!-- Barras de menus das categorias-->
                            <?php if ($this->uri->segment(3) == 'arroz') { ?>
                                <li><a>Arroz<i class="fas fa-chevron-down"></i></a></li>
                                <title>Quick - Categoria Arroz</title>
                            <?php } else if ($this->uri->segment(3) == 'feijao') { ?>
                                <li><a>Feijão<i class="fas fa-chevron-down"></i></a></li>
                                <title>Quick - Categoria Feijão</title>
                            <?php } else if ($this->uri->segment(3) == 'sal') { ?>
                                <li><a>Sal<i class="fas fa-chevron-down"></i></a></li>
                                <title>Quick - Categoria Sal</title>
                            <?php } else if ($this->uri->segment(3) == 'acucar') { ?>
                                <li><a>Açucar<i class="fas fa-chevron-down"></i></a></li>
                                <title>Quick - Categoria Açucar</title>
                            <?php } else if ($this->uri->segment(3) == 'massas') { ?>
                                <li><a>Massas<i class="fas fa-chevron-down"></i></a></li>
                                <title>Quick - Categoria Massa</title>
                            <?php } else if ($this->uri->segment(3) == 'oleos') { ?>
                                <li><a>Oléos<i class="fas fa-chevron-down"></i></a></li>
                                <title>Quick - Categoria Oléos</title>
                            <?php } else if ($this->uri->segment(3) == 'laticinios') { ?>
                                <li><a>Laticínios<i class="fas fa-chevron-down"></i></a></li>
                                <title>Quick - Categoria Laticínios</title>
                            <?php } else if ($this->uri->segment(3) == 'paes') { ?>
                                <li><a>Pães<i class="fas fa-chevron-down"></i></a></li>
                                <title>Quick - Categoria Pães</title>
                            <?php } else if ($this->uri->segment(3) == 'carnes') { ?>
                                <li><a>Carnes<i class="fas fa-chevron-down"></i></a></li>
                                <title>Quick - Categoria Carnes</title>
                            <?php } else if ($this->uri->segment(3) == 'aves') { ?>
                                <li><a>Aves<i class="fas fa-chevron-down"></i></a></li>
                                <title>Quick - Categoria Aves</title>
                            <?php } else if ($this->uri->segment(3) == 'peixes') { ?>
                                <li><a>Peixes<i class="fas fa-chevron-down"></i></a></li>
                                <title>Quick - Categoria Peixes</title>
                            <?php } else if ($this->uri->segment(3) == 'vegetais') { ?>
                                <li><a>Vegetais<i class="fas fa-chevron-down"></i></a></li>
                                <title>Quick - Categoria Vegetais</title>
                            <?php } else if ($this->uri->segment(3) == 'frutas') { ?>
                                <li><a>Frutas<i class="fas fa-chevron-down"></i></a></li>
                                <title>Quick - Categoria Frutas</title>
                            <?php } else if ($this->uri->segment(3) == 'alcoolicas') { ?>
                                <li><a>Bebidas alcoólicas<i class="fas fa-chevron-down"></i></a></li>
                                <title>Quick - Categoria Alcoólicas</title>
                            <?php } else if ($this->uri->segment(3) == 'naoalcoolicas') { ?>
                                <li><a>Bebidas não alcoólicas<i class="fas fa-chevron-down"></i></a></li>
                                <title>Quick - Categoria Não alcoólicas</title>
                            <?php } else if ($this->uri->segment(3) == 'limpeza') { ?>
                                <li><a>Produtos de limpeza<i class="fas fa-chevron-down"></i></a></li>
                                <title>Quick - Categoria Produtos de limpeza</title>
                            <?php } else if ($this->uri->segment(3) == 'higiene') { ?>
                                <li><a>Higiene<i class="fas fa-chevron-down"></i></a></li>
                                <title>Quick - Categoria Higiene</title>
                            <?php } else if ($this->uri->segment(3) == 'pet') { ?>
                                <li><a>Pets<i class="fas fa-chevron-down"></i></a></li>
                                <title>Quick - Categoria Pets</title>
                            <?php } ?>
                            <!-- //Barras de menu das categorias -->
                            <!-- Barras de menu do login e cadastro e listagem dos cliente -->
                            <?php if ($this->uri->segment(1) == 'login') { ?>
                                <li><a>Login<i class="fas fa-chevron-down"></i></a></li>
                                <title>Quick - Login</title>
                            <?php } else if ($this->uri->segment(1) == 'cadastroclientes') { ?>
                                <title>Quick - Cadastro de cliente</title>
                                <li><a>Cadastro de clientes<i class="fas fa-chevron-down"></i></a></li>
                            <?php } else if ($this->uri->segment(1) == 'listacliente') { ?>
                                <div class="products-breadcrumb">
                                    <div class="container">
                                        <ul>
                                            <i class="fa fa-home" aria-hidden="true"></i><li><a href=<?php echo base_url('index') ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Início</a><span>|</span></li>
                                            <li><?php echo "Clientes cadastrados"; ?></li>
                                        </ul>
                                    </div>
                                </div>
                            <?php } else if ($this->uri->segment(1) == 'resultadodabusca') { ?>
                                <!-- //Barras de menu do login e cadastro dos cliente -->
                                <!-- //Barras de menu da tela de pesquisa -->
                                <li><a>Resultado da busca<i class="fas fa-chevron-down"></i></a></li>
                                <title>Quick - Resultado da busca</title>
                            <?php } ?>
                            <!-- //Barras de menu da tela de pesquisa -->
                        </ul>
                    </div>

                    <!-- Menu Trigger -->

                    <div class="menu_trigger_container ml-auto">
                        <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                            <div class="menu_burger">
                                <div class="menu_trigger_text">menu</div>
                                <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</nav>
<!-- Menu -->

<div class="page_menu">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page_menu_content">

                    <div class="page_menu_search">
                        <form action="<?php echo base_url('resultadodabusca/') ?>" method="post" >
                            <input type="search" name="busca" class="page_menu_search_input" placeholder="Procurar por um produto...">
                        </form>
                    </div>
                    <ul class="page_menu_nav">
                        <li class="page_menu_item"><a href = "<?php echo base_url('login/'); ?>">Entre</a></li>
                        <li class="page_menu_item"><a href = "<?php echo base_url('cadastroclientes/'); ?>">Cadastre-se&nbsp;
                                &nbsp;
                            </a></i></a></li>
                    </ul>

                    <div class="menu_contact">
                        <div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+XX XXXXX.XXXX</div>
                        <div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div>quicksupermercados.contato@gmail.com</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</header>

