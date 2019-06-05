<?php
$acesso = 0;
if (isset($_SESSION['administrador_logado']) || isset($_SESSION['operador_logado'])) {
    $acesso = 1;
}

if ($acesso == 1) {
    ?>
    <div id="content-wrapper">

        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?php echo base_url('paineladministrativo/') ?>">Painel administrativo</a>
                </li>
                <li class="breadcrumb-item active">Cadatrar banners</li>
            </ol>
            <div class="form">
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
                    <center><div class="w3_login_module"><h3 class="w3l_fruit">Cadastrar banners</h3></center>
                    <div class="module form-module">
                        <div class="form">
                        </div>
                        <div class="form">
                            <?php echo form_open_multipart('ControllerBanner/gravarBanner'); ?>
                            <input type="hidden" name="acao" value="<?php
                            if (isset($banner))
                                echo "alterar";
                            else
                                echo "inserir";
                            ?>">
                            <input type="hidden" name="idBanner" value="">
                            Nome do banner*
                            <input class="form-control" type="text" name="nomePromocao" required value="">
                            <br>
                            Descrição do banner*
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="descricaoPromocao" ></textarea>
                            </div>
                            Foto do banner(1400x400)*
                            <input class="form-control" type="file" required name="imagemBanner" value="">
                            <br>
                            <input type="hidden" class="form-control" name="data" value="" >
                            <input type="hidden" name="status" value="1">
                            <center><input type="submit" value="Cadastrar"></center>
                            <input type="hidden">
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <?php
}