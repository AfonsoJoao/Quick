<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> </title>




    </head>
    <body>

        <div class="container">

            <br>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?php echo base_url('paineladministrativo/') ?>">Painel administrativo</a>
                </li>
                <li class="breadcrumb-item active">Documentos do Sistema</li>
            </ol>

            <div class="row">
                <div class="col-md-12 text-center"><br>
                    <h3>Documentos do Sistema</h3>
                </div>
            </div>
            <hr />

            <a href="<?= base_url('application/Documentos/Documentos Do Projeto Integrador III') ?>"
               title="Imprimir Pedido" class="btn btn-primary" > <!-- O comando target="_blank" serve para abrir uma página em uma nova aba do navegador   -->
               <i class="fas fa-file-pdf"></i> Documento do Sistema
            </a>

            <a href="<?= base_url('Application/Documentos/Calendario de Provas') ?>"
               title="Imprimir Pedido" class="btn btn-primary" > <!-- O comando target="_blank" serve para abrir uma página em uma nova aba do navegador   -->
                <i class="fas fa-file-pdf"></i> Documentos de Teste
            </a>

            <a href="<?= base_url('Application/Documentos/Calendario de Provas') ?>"
               title="Imprimir Pedido" class="btn btn-primary" > <!-- O comando target="_blank" serve para abrir uma página em uma nova aba do navegador   -->
                <i class="fas fa-file-pdf"></i> Documento
            </a>


        </div><br>

    </body>
</html>
