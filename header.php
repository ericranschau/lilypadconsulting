<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
* @package WordPress
 * @subpackage Lily Pad Consluting
 * @since 0.0.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

    <head>

		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="profile" href="https://gmpg.org/xfn/11" />

		<?php wp_head(); ?>

	</head>

    <body <?php body_class(); ?>>

        <?php wp_body_open(); ?>

        <header class="" id="site-header" role="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<button class="btn btn-primary" data-alt="Close" data-default="Contact Us" id="site-header-button" type="button">Contact Us</button>
					</div>
					<div class="col-md-8 offset-md-1 order-md-first">
						<img id="site-header-logo" data-alt="<?php echo get_template_directory_uri() ?>/assets/images/logos/lilypad_reversed.svg" data-default="<?php echo get_template_directory_uri() ?>/assets/images/logos/lilypad.svg" src="<?php echo get_template_directory_uri() ?>/assets/images/logos/lilypad.svg">
					</div>
				</div>
			</div>
        </header>
		<nav id="nav">
			<div class="container">
				<div class="row ml-3 ml-md-0 mr-3 mr-md-0">
					<div class="col-md-5 mb-5 mb-md-0 offset-md-1 position-relative">
						<h3>Get In Touch</h3>
						<a class="btn btn-secondary" href="https://www.linkedin.com/company/lily-pad-consulting/about/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logos/linkedIn.svg"></a>
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
		</nav>