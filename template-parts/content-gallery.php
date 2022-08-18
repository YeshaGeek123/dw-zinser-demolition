<!-- Start of Gallery -->
<div class="gallery-sec bg-img" style="background-image: url('<?php the_field('gallery_background_image',9); ?>');">
    <div class="back-shep"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="sec-title">
                    <h2 class="h2-title"><span><?php the_field('gallery_main_title',9); ?></span></h2>
                </div>
            </div>
        </div>
        <div class="row wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
            <div class="col-lg-12 gallery-slider">
                <?php
                $gallery_image = get_field('gallery_images',9);
                if(isset($gallery_image) && !empty($gallery_image)) :
                    foreach ($gallery_image as $key => $image) :
                ?>
                <div class="gallery-img-wp">
                    <div class="gallery-img bg-img" style="background-image: url('<?php echo $image['url']; ?>');"></div>
                </div>
                <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>
        <div class="row gallery-slider-nav gallery-thumb-slider wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
            <?php
            $gallery_image_nav = get_field('gallery_images',9);
            if(isset($gallery_image_nav) && !empty($gallery_image_nav)) :
                foreach ($gallery_image_nav as $key => $image) :
            ?>
            <div class="col-lg-3">
                <div class="gallery-thumb-box bg-img" style="background-image: url('<?php echo $image['url']; ?> ');"></div>
            </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</div>
<!-- End of Gallery -->