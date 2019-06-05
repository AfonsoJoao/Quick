<?php
$acesso = 0;
if (isset($_SESSION['administrador_logado']) || isset($_SESSION['operador_logado'])) {
    $acesso = 1;
}

if ($acesso == 1) {
    ?>
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
                <center>
                    <a href="<?= base_url('application/Documentos/Documentos Do Projeto Integrador III v0.16 Atualizado.pdf') ?>"
                       title="Documentos do sistema" class="btn btn-primary" > <!-- O comando target="_blank" serve para abrir uma página em uma nova aba do navegador   -->
                        <i class="fas fa-file-pdf"></i> Documentos do Sistema
                    </a>

                    <a href="<?= base_url('application/Documentos/TestLink 1.9.14 (Padawan).pdf') ?>"
                       title="Relatório de testes do testlink" class="btn btn-primary" > <!-- O comando target="_blank" serve para abrir uma página em uma nova aba do navegador   -->
                        <i class="fas fa-file-pdf"></i> Relatório de testes do testlink
                    </a>

                    <a href="<?= base_url('application/Documentos/Documento de Testes.pdf') ?>"
                       title="Relatório de testes não funcionais" class="btn btn-primary" > <!-- O comando target="_blank" serve para abrir uma página em uma nova aba do navegador   -->
                        <i class="fas fa-file-pdf"></i> Relatório de testes não funcionais
                    </a>
                </center>

            </div><br>

        </body>
    </html>
    <?php
}