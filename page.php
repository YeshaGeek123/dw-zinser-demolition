<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dw-zinser-demolition
 */

get_header();
?>

<!-- Banner Start -->
<!-- Start of Inner Banner -->
<section class="inner-banner">
    <div class="inner-banner-back bg-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2022/08/banner-img.jpg');"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-banner-content text-center">
				<h1 class="h1-title"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Inner Banner -->

<div class="inner-page-text">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<main id="primary" class="site-main">
					<?php
					while (have_posts()) :
						the_post();

						get_template_part('template-parts/content', 'page');

						// If comments are open or we have at least one comment, load up the comment template.
						if (comments_open() || get_comments_number()) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</main><!-- #main -->
			</div>
		</div>
	</div>
</div>


<?php
get_footer();
