<!-- Start of Inner Banner -->
<section class="inner-banner">
    <div class="inner-banner-back bg-img" style="background-image: url('<?php the_field('service_banner_image'); ?>');"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-banner-content text-center">
                    <h1 class="h1-title"><?php the_field('service_banner_title'); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Inner Banner -->

<!-- Start of Our Services -->
<div class="main-service">
    <section class="our-service-sec service-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="service-detail-content">
                        <h3 class="h3-title"><?php the_field('service_details_title'); ?></h3>
                        <div class="service-detail-text">
                            <?php the_field('service_detials_content'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="service-img-wp">
                        <div class="service-img bg-img" style="background-image: url('<?php the_field('service_details_image'); ?>');"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End of Our Services -->

<div class="main-demolition-back bg-img" style="background-image: url('<?php the_field('service_include_background_image'); ?>');">
    <!-- Start of Demolition -->
    <section class="demolition-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="sec-title">
                        <h2><?php the_field('services_include_title'); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="demolition-content">
                        <?php the_field('services_include_content'); ?>
                        <ul>
                            <?php
                            if(have_rows('services_inlcude_list')):
                                while(have_rows('services_inlcude_list')): the_row();
                            ?>
                            <li>
                                <span class="icon">
                                    <img width="63" height="66" src="<?php the_sub_field('services_inlcude_list_image'); ?>" alt="Removal">
                                </span>
                                <span class="text">
                                    <h4><?php the_sub_field('services_inlcude_list_content'); ?></h4>
                                </span>
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
    </section>
    <!-- End of Demolition -->
<?php
if(have_rows('sub_services_details')):
    while(have_rows('sub_services_details')): the_row();
    $sub_service_image = get_sub_field('sub_services_details_image');
    $sub_service_title = get_sub_field('sub_services_details_title');
    $sub_service_content = get_sub_field('sub_services_details_content');
    $sub_services_points = get_sub_field('sub_services_details_points');
    if(get_row_index() % 2 != 0 ):
?>
    <section class="our-service-sec service-details">
        <div class="container">
            <div class="row odd">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="service-detail-content">
                        <?php
                        if(!empty($sub_service_title)):
                        ?>
                        <h3 class="h3-title"><?php echo $sub_service_title; ?></h3>
                        <?php
                        endif;
                        ?>
                        <?php
                        if(!empty($sub_service_content)):
                        ?>
                        <div class="service-detail-text">
                            <?php echo $sub_service_content; ?>
                        </div>
                        <?php
                        endif;
                        ?>
                        <?php
                        if(!empty($sub_services_points)):
                        ?>
                        <ul>
                            <?php
                            if(have_rows('sub_services_details_points')):
                                while(have_rows('sub_services_details_points')): the_row();
                            ?>
                            <li><?php the_sub_field('sub_services_details_points_list'); ?></li>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </ul>
                        <?php
                        endif;
                        ?> 
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="service-img-wp">
                        <div class="service-img bg-img" style="background-image: url('<?php echo  $sub_service_image; ?>');"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php else: ?>
    <!-- Start of Removal -->
    <div class="removal-service">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="removal-img-wp">
                        <div class="removal-img bg-img" style="background-image: url('<?php echo  $sub_service_image; ?>');"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-detail-content">
                        <?php
                            if(!empty($sub_service_title)):
                            ?>
                            <h3 class="h3-title"><?php echo $sub_service_title; ?></h3>
                            <?php
                            endif;
                        ?>
                        <?php
                        if(!empty($sub_services_points)):
                        ?>
                        <ul>
                            <?php
                            if(have_rows('sub_services_details_points')):
                                while(have_rows('sub_services_details_points')): the_row();
                            ?>
                            <li><?php the_sub_field('sub_services_details_points_list'); ?></li>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </ul>
                        <?php
                        endif;
                        ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
            endif;
        endwhile;
    endif;
    ?>
    
    <!-- End of Removal -->
</div>

