<!-- Start of Inner Banner -->
<section class="inner-banner">
    <div class="inner-banner-back bg-img" style="background-image: url('<?php the_field('contact_banner_background_image'); ?>');"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-banner-content text-center">
                    <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('contact_banner_main_title'); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Inner Banner -->

<!-- Start of Contac -->
<section class="main-contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="contact-content">
                    <?php the_field('contact_content'); ?>
                    <ul>
                        <li>
                            <span class="icon"><i class="fas fa-envelope"></i></span>
                            <a href="mailto:<?php the_field('email','options'); ?>" title="<?php the_field('email','options'); ?>"><?php the_field('email','options'); ?></a>
                        </li>
                        <?php
                            $phone = get_field('phone_number', 'options');
                            $val = array("(", ")", " ", "-", ".");
                            $replace = array("", "", "", "", "");
                            //Phone link
                            $phone_link = str_replace($val, $replace, $phone);
                        ?>
                        <li>
                            <span class="icon"><i class="fas fa-phone-alt"></i></span>
                            <a href="tel:<?php echo $phone_link; ?>" title="<?php echo $phone; ?>" class="phone"><span class="callus"><?php echo $phone; ?></span></a>
                        </li>
                        <li>
                            <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                            <a href="<?php the_field('address_link','options'); ?>" target="_blank" title="<?php the_field('address','options'); ?>"><?php the_field('address','options'); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="contact-form">
                    <h3>Talk To Us</h3>
                    <?php
                    echo do_shortcode('[contact-form-7 id="5" title="Contact Form"]');
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Contac -->