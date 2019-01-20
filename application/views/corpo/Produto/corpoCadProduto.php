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
    <div class="w3_login_module"><h3 class="w3l_fruit">Cadastrar produtos</h3>
        <div class="module form-module">
            <div class="form">
            </div>
            <div class="form">
                <?php echo form_open('ControllerProduto/gravarProduto'); ?>
                <input type="hidden" name="acao" value="<?php
                if (isset($produto))
                    echo "alterar";
                else
                    echo "inserir";
                ?>">
                <input type="hidden" name="idProduto" value="<?php
                if (isset($produto))
                    foreach ($produto as $pro) {
                        echo $pro->idProduto;
                    }
                ?>">

                <input class="form-control" type="text" name="nomeProduto" placeholder="Nome do produto" required="" value="<?php
                if (isset($produto))
                    foreach ($produto as $pro) {
                        echo $pro->nomeProduto;
                    }
                ?>">
                <input class="form-control" type="number" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="valorUnitario" placeholder="Valor unitario do produto" required="" value="<?php
                if (isset($produto))
                    foreach ($produto as $pro) {
                        echo $pro->valorUnitario;
                    }
                ?>">
                <br>
                <div class="form-group">
                    <textarea class="form-control" rows="5" name="descricaoProduto" placeholder="Descrição do produto" ><?php
                        if (isset($produto))
                            foreach ($produto as $pro) {
                                echo $pro->descricaoProduto;
                            }
                        ?></textarea>
                </div>
                <input class="form-control" type="number" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="peso" placeholder="Peso do produto em kg ou litro" required="" value="<?php
                if (isset($produto))
                    foreach ($produto as $pro) {
                        echo $pro->peso;
                    }
                ?>">
                <br>
                <input class="form-control" type="text" name="marca" placeholder="Marca" required="" value="<?php
                if (isset($produto))
                    foreach ($produto as $pro) {
                        echo $pro->marca;
                    }
                ?>">
                <select class="form-control" id="categoria" name="categoria" value="">
                    <option><?php
                        if (isset($produto))
                            foreach ($produto as $pro) {
                                echo $pro->categoria;
                            }
                        ?>Catégoria</option>
                    <optgroup label="Alimentação">
                        <option value="arroz">Arroz</option>
                        <option value="feijao">Feijão</option>
                        <option value="sal">Sal</option>
                        <option value="acucar">Açucar</option>
                        <option value="massas">Massas</option>
                        <option value="oleo">Oléo</option>
                        <option value="laticineos">Laticínios</option>
                        <option value="paes">Pães</option>
                    <optgroup label="Frios">
                        <option value="carnes">Carnes</option>
                        <option value="aves">Aves</option>
                        <option value="peixes">Peixes</option>
                    <optgroup label="Hortifruti">
                        <option value="vegetais">Vegetais</option>
                        <option value="frutas">Frutas</option>
                    <optgroup label="Bebidas">
                        <option value="alcoolicas">Alcoólicas</option>
                        <option value="naoalcoolicas">Não alcoólicas</option>
                    <optgroup label="Outras">
                        <option value="limpeza">Produtos de limpeza</option>
                        <option value="higiene">Higiene</option>
                        <option value="pet">Pet</option>
                </select>
                <br>
                
                <!-- <div id="imagemupload">upload</div>-->
                
                <input class="form-control" type="file" required name="imagem" value="<?php
                if (isset($produto))
                    foreach ($produto as $pro) {
                        echo $pro->imagem;
                    }
                ?>">
                <br>
                <input type="hidden" class="form-control" name="data" value="<?php echo date_format(new DateTime(), 'Y/m/d'); ?>" >
                <input type="hidden" name="disponibilidade" value="true">
                <div>
                    Promoção: 
                    <input type="radio" name="tipoDestaque" value="1"><br>
                    Apenas destacar: 
                    <input type="radio" name="tipoDestaque" value="2"><br><br>
                </div>
                <input type="submit" value="Cadastrar">
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<?php


