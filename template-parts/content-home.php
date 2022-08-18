<!-- Start of Main Banner -->
<section class="main-banner bg-img" style="background-image: url('<?php the_field('home_banner_image'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content text-center">
                    <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('home_banner_title'); ?></h1>
                    <h3 class="h3-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('home_banner_sub_title'); ?></h3>
                    <?php
                    $phone = get_field('phone_number', 'options');
                    $val = array("(", ")", " ", "-", ".");
                    $replace = array("", "", "", "", "");
                    //Phone link
                    $phone_link = str_replace($val, $replace, $phone);
                    ?>
                    <div class="banner-btn wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <a href="<?php the_permalink(171); ?>" title="Inquiry for bid"  class="sec-btn"><span>Inquiry for bid</span></a>
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
            <div class="col-lg-6 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="about-img-wp">
                    <div class="about-img">
                        <img width="960" height="821" src="<?php the_field('about_us_image'); ?>" alt="About Img">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
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
<section class="our-service-sec" id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
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
            <div class="col-lg-6 order-1 order-lg-2 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="service-img-wp">
                    <div class="service-img bg-img" style="background-image: url('<?php the_field('home_service_image'); ?>');"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Our Services -->

<!-- Start of Career -->
<section class="career-sec bg-img" style="background-image: url('<?php the_field('home_career_jobs_main_image'); ?>');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="career-content">
                    <h3 class="h3-title"><?php the_field('home_career_jobs_main_title'); ?></h3>
                    <h2 class="h2-title"><?php the_field('home_career_jobs_title'); ?></h2>
                    <p>
                        <?php the_field('home_career_jobs_sub_title'); ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="career-btn text-left text-lg-right">
                    <a href="<?php the_permalink(13); ?>"  title="Employment application" class="sec-btn lg-btn"><span>employment application</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Career -->

<?php
get_template_part('template-parts/content', 'gallery');
?>

<!-- Start of Portfolio -->
<section class="portfolio-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="portfolio-content text-center">
                    <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('home_portfolio_title'); ?></h2>
                    <div class="wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <?php the_field('home_portfolio_content'); ?>
                    </div>
                    <div class="wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <a href="javascript:void(0);" title="Our projects" class="sec-btn white-btn"><span>Our Projects</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Portfolio -->