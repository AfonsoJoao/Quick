<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Quick - Painel administrativo</title>
        
        <script src="<?php echo base_url('js/jquery-1.11.1.min.js'); ?>"></script> <!-- Plugin do jquery--> 
        
         <!-- Custom fonts for this template-->
        <link href="<?php echo base_url('front/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">

        <!-- Page level plugin CSS-->
        <link href="<?php echo base_url('front/vendor/datatables/dataTables.bootstrap4.css'); ?>" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="<?php echo base_url('css/sb-admin.css'); ?>" rel="stylesheet">

        <link href="<?php echo base_url('css/carrinho.css'); ?>" rel="stylesheet" type="text/css" media="all"/>
        
       
        <script>

            function excluirBanner(id, nome) {
                if (confirm('Deseja excluir o Banner ' + nome)) {
                    location.href = "<?php echo base_url('ControllerBanner/excluirBanner'); ?>" + "/" + id;
                }
            }
        </script>
        <script>

            function excluirProduto(id, nome) {
                if (confirm('Deseja excluir o produto ' + nome)) {
                    location.href = "<?php echo base_url('ControllerProduto/excluirProduto'); ?>" + "/" + id;
                }
            }
        </script>
                <script>

            function excluirOperador(id, nome) {
                if (confirm('Deseja excluir o operador ' + nome)) {
                    location.href = "<?php echo base_url('ControllerOperador/excluirOperador'); ?>" + "/" + id;
                }
            }
        </script>

        <script>

            function excluirAdministrador(id, nome) {
                if (confirm('Deseja excluir o administrador ' + nome)) {
                    location.href = "<?php echo base_url('ControllerAdministrador/excluirAdministrador'); ?>" + "/" + id;
                }
            }
        </script>
        
        
    </head>


    <body id="page-top">

        <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

            <a class="navbar-brand mr-1" href="">Administrador</a>

            <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
                <i class="fas fa-bars"></i>
            </button>

           

            <!-- Navbar -->
            <ul class="navbar-nav d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-circle fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Editar conta</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Sair</a>
                    </div>
                </li>
            </ul>

        </nav>

        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="sidebar navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url('paineladministrativo') ?>">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Painel administrativo</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadproduto">
                        <i class="fas fa-fw fa-list"></i>
                        <span>Cadastrar produtos</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadbanner">
                        <i class="fas fa-fw fa-list"></i>
                        <span>Cadastrar banners</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastroadministrador">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Cadastrar admin</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastrooperador">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Cadastrar operador</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('pagseguro') ?>">
                        <i class="fas fa-fw fa-list"></i>
                        <span>Pag Seguro</span></a>
                </li>
            </ul>
            
    </body>