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
						<img id="site-header-logo" data-alt="<?php echo get_template_directory_uri() ?>/assets/images/logos/lilypad_reversed.svg" data-default="<?php echo get_template_directory_uri() ?>/assets/images/logos/lilypad.svg" data-no-retina src="<?php echo get_template_directory_uri() ?>/assets/images/logos/lilypad.svg">
					</div>
				</div>
			</div>
        </header>
		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-md-5 mb-5 mb-md-0 offset-md-1 position-relative">
						<h3>Get In Touch</h3>
						<a class="btn btn-secondary mix_linkedIn" href="<?php echo do_shortcode('[xyz-ihs snippet="CONTACT-LINKEDIN"]'); ?>" target="_blank"><img data-no-retina src="<?php echo get_template_directory_uri() ?>/assets/images/logos/linkedIn.svg" alt="Linked-In"></a>
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
		</nav>
		