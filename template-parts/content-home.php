<!-- Start of Main Banner -->
<section class="main-banner bg-img" style="background-image: url('<?php the_field('home_banner_image'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content text-center">
                    <h1 class="h1-title"><?php the_field('home_banner_title'); ?></h1>
                    <h3 class="h3-title"><?php the_field('home_banner_sub_title');?></h3>
                    <?php
                    $phone = get_field('phone_number','options');
                    $val = array("(", ")", " ", "-", ".");
                    $replace = array("", "", "", "", "");
                    //Phone link
                    $phone_link = str_replace($val, $replace, $phone); 
                    ?>
                    <div class="banner-btn">
                        <a href="#" title="Inquiry for bid" class="sec-btn"><span>Inquiry for bid</span></a>
                        <a href="tel:<?php echo $phone_link; ?>" title="Call <?php echo $phone;  ?>" class="sec-btn white-btn"><span>call <span class="callus"><?php echo $phone; ?></span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Main Banner -->

<!-- Start of About Us -->
<section class="about-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img-wp">
                    <div class="about-img">
                        <img width="960" height="821" src="<?php the_field('about_us_image'); ?>" alt="About Img">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h2 class="h2-title"><?php the_field('about_us_title'); ?></h2>
                    <div class="about-text">
                        <?php the_field('about_us_content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of About Us -->

<!-- Start of Our Services -->
<section class="our-service-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <?php
                $service_learn_more__title = strip_tags(get_field('home_service_title'));
                ?>
                <div class="service-content">
                    <h3 class="h3-title"><?php the_field('home_service_main_title'); ?></h3>
                    <h2 class="h2-title"><?php the_field('home_service_title'); ?></h2>
                    <?php the_field('home_service_content'); ?>
                    <a href="<?php the_field('home_service_page_link'); ?>" title="<?php echo $service_learn_more__title; ?>, Learn More" class="learn-more"><span>Learn More</span> <span class="icon"></span></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-img-wp">
                    <div class="service-img bg-img" style="background-image: url('<?php the_field('home_service_image'); ?>');"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Our Services -->