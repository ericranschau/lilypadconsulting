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
			<img id="site-footer-bg" src="<?php echo get_template_directory_uri() ?>/assets/images/footerBg.svg" />
            <div class="container">
				<div class="row">
					<div class="col-md-5 mb-5 mb-md-0 offset-md-1 position-relative">
						<h3>Get In Touch</h3>
						<a class="btn btn-secondary mix_linkedIn" href="https://www.linkedin.com/company/lily-pad-consulting/about/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logos/linkedIn.svg"></a>
						<small>© 2020 Lily Pad Consulting. All rights reserved.</small>
					</div>
					<div class="col-md-5">
						<dl>
							<dt>Call Us</dt>
							<dd><a href="tel:1-612-419-4695">(612) 419-4695</a></dd>
							<dt>Email Us</dt>
							<dd><a href="mailto:hello@lilypadconsulting.com">hello@lilypadconsulting.com</a></dd>
							<dt>Locations</dt>
							<dd>Minneapolis/St. Paul, MN<br />Phoenix, AZ</dd>
						</dl>
					</div>
				</div>
			</div>
        </footer><!-- #site-footer -->

        <?php wp_footer(); ?>

    </body>
</html>
