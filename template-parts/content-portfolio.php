<!-- Start of Inner Banner -->
<section class="inner-banner">
    <div class="inner-banner-back bg-img" style="background-image: url('<?php the_field('demolition_portfolio_banner_image'); ?>');"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-banner-content text-center">
                    <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('demolition_portfolio_banner_main_title'); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Inner Banner -->

<!-- Start of Portfolio -->
<div class="main-portfolio-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <div class="portfolio-link">
                    <ul>
                        <?php
                        if(have_rows('demolition_portfolio_location_list')):
                            while(have_rows('demolition_portfolio_location_list')): the_row();
                        ?>
                        <li>
                            <div class="main-portfolio-content text-center">
                                <h4><?php the_sub_field('demolition_portfolio_location_list_name'); ?></h4>
                                <p>
                                    <span><img width="13" height="16" src="<?php echo home_url(); ?>/wp-content/themes/dw-zinser-demolition/assets/images/location.svg" alt="map"></span>
                                    <?php the_sub_field('demolition_portfolio_location_list_address'); ?>
                                </p>
                            </div>
                        </li>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Portfolio -->

<?php
get_template_part('template-parts/content', 'gallery');
?>