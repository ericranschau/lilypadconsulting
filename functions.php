<?php
/**
 * Lily Pad Consulting functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Lily_Pad_Consulting
 * @since 1.0.0
 */

/**
 * Table of Contents:
 * Theme Support
 * Required Files
 * Register Styles
 * Register Scripts
 * Register Menus
 * Custom Logo
 * WP Body Open
 * Register Sidebars
 * Enqueue Block Editor Assets
 * Enqueue Classic Editor Styles
 * Block Editor Settings
 */

 /**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function lilypadconsulting_theme_support() {

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

	// Custom logo.
	$logo_width  = 204;
	$logo_height = 48;

	// If the retina setting is active, double the recommended width and height.
	if ( get_theme_mod( 'retina_logo', false ) ) {
		$logo_width  = floor( $logo_width * 2 );
		$logo_height = floor( $logo_height * 2 );
	}

	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'lilypadconsulting_theme_support' );

/**
 * Register and Enqueue Styles.
 */
function lilypadconsulting_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );
    
    // Add Bootstrap CSS.
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.css' );
    
    wp_enqueue_style( 'lilypadconsulting-style', get_stylesheet_uri(), array(), $theme_version );

	// // Add output of Customizer settings as inline style.
	// wp_add_inline_style( 'lilypadconsulting-style', lilypadconsulting_get_customizer_css( 'front-end' ) );

	// // Add print CSS.
    // wp_enqueue_style( 'lilypadconsulting-print-style', get_template_directory_uri() . '/print.css', null, $theme_version, 'print' );

}

add_action( 'wp_enqueue_scripts', 'lilypadconsulting_register_styles' );

/**
 * Register and Enqueue Scripts.
 */
function lilypadconsulting_register_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

	// CSS Variables Polyfill
	wp_enqueue_script( 'css-polyfill-js', '//cdn.jsdelivr.net/npm/css-vars-ponyfill@2' );
	wp_script_add_data( 'css-polyfill-js', 'async', true );
	
	// Google Font Loader.
	wp_enqueue_script('google-font-loader', '//ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js');
    wp_script_add_data( 'google-font-loader', 'async', true );
	wp_enqueue_script( 'google-fonts', get_template_directory_uri() . '/assets/js/fonts.js');
    wp_script_add_data( 'google-fonts', 'async', true );

    // Add jQuery JS.
    wp_enqueue_script( 'jquery-js', '//code.jquery.com/jquery-3.4.1.min.js' );
	wp_script_add_data( 'jquery-js', 'async', true );
	
	// ScrollMagic JS.
	wp_enqueue_script( 'scrollmagic-js', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js' );
	wp_script_add_data( 'scrollmagic-js', 'async', true );
    
    // Add Bootstrap JS.
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.js' );
	wp_script_add_data( 'bootstrap-js', 'async', true );
	// RetinaJS.
	wp_enqueue_script( 'retina-js', get_template_directory_uri() . '/assets/js/retina.min.js' );
	wp_script_add_data( 'retina-js', 'async', true );

	if ( ( ! is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Lily Pad Generic JS.
	wp_enqueue_script( 'lilypadconsulting-js', get_template_directory_uri() . '/assets/js/index.js', array(), $theme_version, false );
    wp_script_add_data( 'lilypadconsulting-js', 'async', true );

	// Lily Pad ScrollMagic JS.
	wp_enqueue_script( 'lilypadconsulting-scrollmagic-js', get_template_directory_uri() . '/assets/js/scrollMagicController.js', array(), $theme_version, false );
    wp_script_add_data( 'lilypadconsulting-scrollmagic-js', 'async', true );

}

add_action( 'wp_enqueue_scripts', 'lilypadconsulting_register_scripts' );

/**
* Fix skip link focus in IE11.
*
* This does not enqueue the script because it is tiny and because it is only for IE11,
* thus it does not warrant having an entire dedicated blocking script being loaded.
*
* @link https://git.io/vWdr2
*/
function lilypadconsulting_skip_link_focus_fix() {
   // The following is minified via `terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
   ?>
   <script>
   /(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
   </script>
   <?php
}
add_action( 'wp_print_footer_scripts', 'lilypadconsulting_skip_link_focus_fix' );
