<!-- DataTables Example -->
<div class="container">
<div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i>
                            Lista de banners cadastrastrados</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nome</th>
                                            <th>Descrição</th>
                                            <th>Editar</th>
                                            <th>Excluir</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>Id</th>
                                            <th>Nome</th>
                                            <th>Descrição</th>
                                            <th>Editar</th>
                                            <th>Excluir</th>

                                        </tr>
                                    </tfoot>
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
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>

</div>
                <!-- /.container-fluid -->


