<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package dw-zinser-demolition
 */

get_header();
?>

	<main id="primary" class="site-main">

	<!-- Start of Inner Banner -->
<section class="inner-banner">
    <div class="inner-banner-back bg-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2022/08/banner-img.jpg');"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-banner-content text-center">
				<h1 class="h1-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'redeluxe' ); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Inner Banner -->

	<div class="inner-page-text error-404 not-found text-center">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<img width="1200" height="937" src="<?php echo home_url(); ?>/wp-content/themes/dw-zinser-demolition/assets/images/404.svg" alt="404 Not Found!">
			</div>
		</div>
	</div>
</div>

	</main><!-- #main -->

<?php
get_footer();
