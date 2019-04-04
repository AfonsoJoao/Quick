 <div id="content-wrapper">

      <div class="container-fluid">
<!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo base_url('paineladministrativo/') ?>">Painel administrativo</a>
            </li>
            <li class="breadcrumb-item active">Cadastrar produtos</li>
        </ol>

 <!-- Page Content -->
         <!-- Page Content -->
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
                        <center><div class="w3_login_module"><h3 class="w3l_fruit">Cadastrar produtos</h3></center>
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
                                <input type="hidden" name="idProduto" value="">
                                Nome do produto:
                                <input class="form-control" type="text" name="nomeProduto"required="" value="">
                                <br>
                                Valor unitario do produto:
                                <input class="form-control input_moeda" type="text" name="valorUnitario" required="" value="">
                                <br>
                                Descrição do produto:
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" name="descricaoProduto"></textarea>
                                </div>
                                Peso do produto em kg ou litros:
                                <input class="form-control" type="number" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="peso" required="" value="">
                                <br>
                                Marca do produto:
                                <input class="form-control" type="text" name="marca" required="" value="">
                                <br>
                                Categoria do produto:
                                <select class="form-control" id="categoria" name="categoria" value="">
                                    <option></option>
                                    <optgroup label="Alimentação">
                                        <option value="arroz">Arroz</option>
                                        <option value="feijao">Feijão</option>
                                        <option value="sal">Sal</option>
                                        <option value="acucar">Açucar</option>
                                        <option value="massas">Massas</option>
                                        <option value="oleo">Oléo</option>
                                        <option value="laticinios">Laticínios</option>
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
                                Foto do produto:
                                <input class="form-control" type="file" required name="imagem" value="">
                                <br>
                                <input type="hidden" class="form-control" name="data" value="<?php echo date_format(new DateTime(), 'Y/m/d'); ?>" >

                                <input type="hidden" name="disponibilidade" value="1">
                                Destacar produto como:
                                <select class="form-control" id="tipoDestaque" name="tipoDestaque" value="">
                                    <option></option>
                                    <option value="2">Destacar como promoção</option>
                                    <option value="3">Apenas destacar</option>
                                    <option value="NULL">Não destacar</option>
                                </select>
                                <br>
                                Porcentagem da promoção:
                                <input class="form-control" type="text" name="valorPromocao" required="" value="">
                                <br>
                                <center><input type="submit" value="Cadastrar"></center>
                            </div>
<?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
</div>
 </div>
      </div>
 </div>