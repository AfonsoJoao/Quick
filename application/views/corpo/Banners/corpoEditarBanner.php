<div class="container-fluid">
    <br>
    <!-- Breadcrumbs-->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?php echo base_url('paineladministrativo/')?>">Painel administrativo</a>
                        </li>
                        <li class="breadcrumb-item active">Editar Banner</li>
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
    <center><div class="w3_login_module"><h3 class="w3l_fruit">Editar banner</h3></center>
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
                <input type="hidden" name="idBanner" value="<?php
                if (isset($banner))
                    foreach ($banner as $ban) {
                        echo $ban->idBanner;
                    }
                ?>">
                Nome do banner*
                <input class="form-control" type="text" name="nomePromocao" required="" value="<?php
                if (isset($banner))
                    foreach ($banner as $ban) {
                        echo $ban->nomePromocao;
                    }
                ?>">
                <br>
                Descrição do banner*
                <div class="form-group">
                    <textarea class="form-control" rows="5" name="descricaoPromocao" ><?php
                        if (isset($banner))
                            foreach ($banner as $ban) {
                                echo $ban->descricaoPromocao;
                            }
                        ?></textarea>
                </div>
                Foto do banner(1600x400)*
                <input class="form-control" type="file" required name="imagemBanner" value="<?php
                if (isset($banner))
                    foreach ($banner as $ban) {
                        echo $ban->imagemBanner;
                    }
                ?>">
                <br>
                Disponibilidade do banner*
                    <br> <br>
                        <div class="radio">
 			 <label><input type="radio" name="status" value="1">Ativo</label>
			</div>
			<div class="radio">
  			<label><input type="radio" name="status"  value="2">Desativado</label>
			</div>
                        <br>
                <center><input type="submit" value="Editar"></center>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
    <br><br><br><br>
</div>