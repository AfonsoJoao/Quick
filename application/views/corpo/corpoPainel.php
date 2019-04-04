
<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo base_url('paineladministrativo/') ?>">Painel administrativo</a>
            </li>
            <li class="breadcrumb-item active">Início</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-4 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-list"></i>
                        </div>
                        <div class="mr-5">26 Produtos cadastrados!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('listaproduto') ?>">
                        <span class="float-left">Ver detalhes</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-list"></i>
                        </div>
                        <div class="mr-5">11 Banners cadastrados!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('listabanner') ?>">
                        <span class="float-left">Ver detalhes</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-shopping-cart"></i>
                        </div>
                        <div class="mr-5">13 Pedidos recebidos!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('pedidos') ?>">
                        <span class="float-left">Ver detalhes</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-users"></i>
                        </div>
                        <div class="mr-5">123 Clientes cadastrados!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('listacliente') ?>">
                        <span class="float-left">Ver detalhes</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-users"></i>
                        </div>
                        <div class="mr-5">13 Operadores cadastrados!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('listaoperador') ?>">
                        <span class="float-left">Ver detalhes</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-users"></i>
                        </div>
                        <div class="mr-5">12 Administradores cadastrados!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('listaadmnistrador') ?>">
                        <span class="float-left">Ver detalhes</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>


        <head runat="server">
            <title></title>
        </head>

        <script src="<?php echo base_url('js/mascaras.js'); ?>"></script>

        <script src="http://code.jquery.com/jquery-latest.min.js"></script>