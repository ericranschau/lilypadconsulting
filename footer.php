<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
* @package WordPress
 * @subpackage Lily Pad Consluting
 * @since 0.0.0
 */

?>
        <footer id="site-footer" role="contentinfo">
			<img id="site-footer-bg" data-no-retina src="<?php echo get_template_directory_uri() ?>/assets/images/footerBg.svg" />
            <div class="container">
				<div class="row">
					<div class="col-md-5 mb-5 mb-md-0 offset-md-1 position-relative">
						<h3>Get In Touch</h3>
						<a class="btn btn-secondary mix_linkedIn" href="<?php echo do_shortcode('[xyz-ihs snippet="CONTACT-LINKED-IN"]'); ?>" target="_blank"><img data-no-retina src="<?php echo get_template_directory_uri() ?>/assets/images/logos/linkedIn.svg"></a>
						<small class="d-none d-md-block">© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</small>
					</div>
					<div class="col-md-5">
						<dl>
							<dt>Call Us</dt>
							<dd><a href="tel:<?php echo do_shortcode('[xyz-ihs snippet="CONTACT-PHONE-LINK"]'); ?>"><?php echo do_shortcode('[xyz-ihs snippet="CONTACT-PHONE"]'); ?></a></dd>
							<dt>Email Us</dt>
							<dd><a href="mailto:<?php echo do_shortcode('[xyz-ihs snippet="CONTACT-EMAIL"]'); ?>"><?php echo do_shortcode('[xyz-ihs snippet="CONTACT-EMAIL"]'); ?></a></dd>
							<dt>Locations</dt>
							<dd><?php echo do_shortcode('[xyz-ihs snippet="CONTACT-ADDRESS"]'); ?></dd>
						</dl>
						<small class="d-block d-md-none">© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</small>
					</div>
				</div>
			</div>
        </footer><!-- #site-footer -->

        <?php wp_footer(); ?>

    </body>
</html>
