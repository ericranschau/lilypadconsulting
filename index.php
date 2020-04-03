<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Lily Pad Consluting
 * @since 0.0.0
 */

get_header();
?>

<main id="site-content" role="main">
    <section id="site-logo-mobile">
        <img data-no-retina src="<?php echo get_template_directory_uri() ?>/assets/images/logos/lilypad.svg" />
    </section>

    <?php
    // Query for pages.
    $args = array(
        'order' => 'ASC',
        'orderby' => 'menu_order',
        'post_parent' => 0,
        'post_type' => 'page'
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ( $query->have_posts() ) {
            $query->the_post();

            get_template_part("content", "page");
        }
    }
    
    // Restore original post data.
    wp_reset_postdata();
    ?>
</main><!-- #site-content -->

<?php
get_footer();
?>
