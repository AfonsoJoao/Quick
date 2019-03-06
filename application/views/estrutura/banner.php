<!-- Banner -->

<div class="banner">
    <?php
    if (isset($banner)) {
        foreach ($banner as $banner) {
            ?>
            <?php if ($banner->status == 1) { ?>
                <div class="banner_background" style="background-image:url(<?php echo base_url('application/images/' . $banner->imagemBanner); ?>)"></div>
                <?php
            }
        }
    }
    ?>
    <br><br><br><br><br><br><br><br><br><br><br>
</div>
