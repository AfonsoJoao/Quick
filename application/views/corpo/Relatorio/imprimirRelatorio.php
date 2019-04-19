<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">

        <title> <?= $titulo ?> </title>

        <link href="<?php echo base_url('css/sb-admin.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('css/bootstrap4/bootstrap.min.css'); ?>" rel="stylesheet">

    </head>
    
    <?php
    echo '<pre>';
    print_r($item);
    
    echo '</pre>';
    
   // echo dataDiaDB();
    ?>
    
    <body>
        <div class="container">
            <h1 class="text-center">Relatório Mensal de Vendas</h1>
            <hr />
            
            <div class="row">
                <div class="col-md-12 text-center">
                    <table class="table table-striped table-bordered">
                        
                        
                    </table>
                </div>
            </div>   

        </div>
        
    </body>
</html>
