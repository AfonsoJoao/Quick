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
    <div class="w3_login_module"><h3 class="w3l_fruit">Cadastrar banners</h3>
        <div class="module form-module">
            <div class="form">
            </div>
            <div class="form">
                <?php echo form_open('ControllerBanner/gravarBanner'); ?>
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

                <input class="form-control" type="text" name="nomePromocao" placeholder="Nome da Promoção" required="" value="<?php
                if (isset($banner))
                    foreach ($banner as $ban) {
                        echo $ban->nomePromocao;
                    }
                ?>">
                <div class="form-group">
                    <textarea class="form-control" rows="5" name="descricaoPromocao" placeholder="Texto da Promoção(opcional)" ><?php
                        if (isset($banner))
                            foreach ($banner as $ban) {
                                echo $ban->descricaoPromocao;
                            }
                        ?></textarea>
                </div>
                <input class="form-control" type="file" required name="imagemBanner" value="<?php
                if (isset($banner))
                    foreach ($banner as $ban) {
                        echo $ban->imagemBanner;
                    }
                ?>">
                <br>
                <input type="hidden" class="form-control" name="data" value="<?php echo date_format(new DateTime(), 'Y/m/d'); ?>" >
                <input type="hidden" name="disponibilidade" value="true">
                <input type="submit" value="Cadastrar">
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<?php


