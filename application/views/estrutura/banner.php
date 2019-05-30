<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
    <?php
    $controle_ativo = 1;
    if (isset($banner)) {
        foreach ($banner as $banner) {
            ?>
            <?php
            if ($controle_ativo == 1) {
                ?>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo base_url('application/images/' . $banner->imagemBanner); ?>" height="400" alt="">
                    </div>
                    <?php
                    $controle_ativo = 2;
                } else {
                    ?>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url('application/images/' . $banner->imagemBanner); ?>" height="400" alt="">
                    </div>
                    <?php
                }
            }
        }
        ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Proximo</span>
    </a>
</div>