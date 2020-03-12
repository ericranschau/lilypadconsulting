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
        <footer class="" id="site-footer" role="contentinfo">
            <div id="site-footer-bg"></div>
            <div class="container">
				<div class="row ml-3 ml-md-0 mr-3 mr-md-0">
					<div class="col-md-5 mb-5 mb-md-0 offset-md-1 position-relative">
						<h3>Get In Touch</h3>
						<a class="btn btn-secondary" href="https://www.linkedin.com" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logos/linkedIn.svg"></a>
						<small>© 2020 Lily Pad Consulting. All rights reserved</small>
					</div>
					<div class="col-md-5">
						<dl>
							<dt>Call Us</dt>
							<dd>(612) 419-4695</dd>
							<dt>Email Us</dt>
							<dd>hello@lilypadconsulting.com</dd>
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
