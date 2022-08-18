<!-- Start of Inner Banner -->
<section class="inner-banner">
    <div class="inner-banner-back bg-img" style="background-image: url('<?php the_field('career_banner_image'); ?>');"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-banner-content text-center">
                    <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('career_banner_title'); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Inner Banner -->

<div class="career-form-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="career-form wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <?php
                    echo do_shortcode('[contact-form-7 id="124" title="Careers Form"]');
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>