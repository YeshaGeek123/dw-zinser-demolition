<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dw-zinser-demolition
 */

?>

<footer id="colophon" class="site-footer">
	<div class="top-footer">
		<div class="footer-img-wp">
			<div class="footer-img bg-img" style="background-image: url('<?php the_field('footer_image'); ?>');"></div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="contact-form">
						<h3>Talk to us</h3>
						<?php
						echo do_shortcode('[contact-form-7 id="5" title="Contact Form"]');
						?>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="footer-map">
						<div class="map-link">
							<ul>
								<li>
									<span class="icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="13.509" height="16" viewBox="0 0 13.509 16">
											<path id="location" d="M15.062,4A6.763,6.763,0,0,0,5.5,13.562l4.224,4.224a.77.77,0,0,0,1.116,0h0l4.224-4.224A6.783,6.783,0,0,0,15.062,4ZM10.28,12.207h0A3.4,3.4,0,0,1,6.853,8.78,3.47,3.47,0,0,1,10.28,5.273,3.4,3.4,0,0,1,13.707,8.7,3.47,3.47,0,0,1,10.28,12.207Z" transform="translate(-3.525 -2.025)" fill="#d6d6d6" opacity="0.5" />
										</svg>
									</span>
									<span class="text">Main Office</span>
								</li>
								<li>
									<a href="<?php the_field('address_link','options'); ?>" target="_blank" title="<?php the_field('address','options'); ?>"><?php the_field('address','options'); ?></a>
								</li>
							</ul>
						</div>
						<div class="footer-frame">
							<iframe src="<?php the_field('iframe_link','options'); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom-box bg-img" style="background-image: url('<?php the_field('footer_background_image','options'); ?>');">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="menu-wp">
						<div class="footer-menu">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-menu',
								)
							);
							?>
						</div>
						<?php
							$phone = get_field('phone_number', 'options');
							$val = array("(", ")", " ", "-", ".");
							$replace = array("", "", "", "", "");
							//Phone link
							$phone_link = str_replace($val, $replace, $phone);
						?>
						<div class="footer-btn">
							<a href="tel:<?php echo $phone_link; ?>" title="<?php echo $phone; ?>"><span class="callus"><?php echo $phone; ?></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-12">
					<div class="footer-bottom-text">
						<div class="copy-right">
							<p>&copy; <?php echo date('Y'); ?> DW Zinser Demolition</p>
						</div>
						<div class="footer-bottom-link">
							<ul>
								<li><a href="<?php echo home_url(); ?>/privacy-policy" title="Privacy Policy">Privacy Policy</a></li>
								<li><a href="<?php echo home_url(); ?>/terms-of-use" title="Terms of Service">Terms of Use</a></li>
								<li><a href="<?php echo home_url(); ?>/cookie-policy" title="Cookies Policy">Cookie Policy</a></li>
							</ul>
						</div>
						<div class="footer-other-link">
							<p>Web Design &amp; Digital Marketing with <span><i class="fa fa-heart" aria-hidden="true"></i></span> by <a href="https://www.dotcomdesign.com" target="_blank" title="Dotcom Design" class="dotcom-link">Dotcom Design</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>

</html>