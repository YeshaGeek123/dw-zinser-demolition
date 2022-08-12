<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dw-zinser-demolition
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preload" href="<?php echo home_url();?>/wp-content/themes/dw-zinser-demolition/assets/fonts/Poppins-BlackItalic.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url();?>/wp-content/themes/dw-zinser-demolition/assets/fonts/Poppins-Bold.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url();?>/wp-content/themes/dw-zinser-demolition/assets/fonts/Poppins-BoldItalic.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url();?>/wp-content/themes/dw-zinser-demolition/assets/fonts/Poppins-ExtraBoldItalic.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url();?>/wp-content/themes/dw-zinser-demolition/assets/fonts/Poppins-Medium.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url();?>/wp-content/themes/dw-zinser-demolition/assets/fonts/Poppins-Regular.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url();?>/wp-content/themes/dw-zinser-demolition/assets/fonts/Saira-Bold.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url();?>/wp-content/themes/dw-zinser-demolition/assets/fonts/Saira-Regular.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url();?>/wp-content/themes/dw-zinser-demolition/assets/fonts/Sora-Bold.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url();?>/wp-content/themes/dw-zinser-demolition/assets/fonts/Sora-Regular.woff2" as="font" type="font/woff2" crossorigin>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dw-zinser-demolition' ); ?></a>

	<!-- Header Start -->
	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-3">
					<div class="site-branding">
						<?php the_custom_logo(); ?>
					</div>
				</div>
				<div class="col-lg-9">					
					<div class="header-menu">
						<nav id="site-navigation" class="main-navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<div class="header-mobile-menu">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									)
								);
								?>
							</div>
							<div class="for-des">
								<a href="#" title="Inquiry for bid" class="sec-btn"><span>Inquiry for bid</span></a>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header End -->
