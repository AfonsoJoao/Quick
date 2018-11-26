 <div class="container-fluid">  
    <div class="bs-docs-example">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>

                <?php
                if (isset($banner)) {
                    foreach ($banner as $banner) {
                    ?>
                    <tr>
                        <td><?php echo $banner->idBanner; ?></td>
                        <td><?php echo $banner->nomePromocao; ?></td>
                        <td><?php echo $banner->descricaoPromocao; ?></td>
                        <td><a href="<?php echo base_url("ControllerBanner/listaUnicoBanner/$banner->idBanner"); ?>"><img src="<?php echo base_url('application/images/edit-Icon.png') ?>"></a></td>
                        <td><a href="javascript:func()" onclick="excluirBanner(<?php echo $banner->idBanner; ?>,'<?php echo $banner->nomePromocao; ?>')"><img src="<?php echo base_url('application/images/close_1.png') ?>"></a></td>
                    </tr>
                <?php } 
                
                            }?>
            </tbody>
        </table>
    </div>
</div>
<?php

