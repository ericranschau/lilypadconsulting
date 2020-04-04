<?php 
    global $post;
    $post_background_graphic = get_post_meta($post->ID, 'background-graphic', true);
    $post_slug = $post->post_name;

    $args = array(
        'post_type' => 'page',
        'posts_per_page' => -1,
        'post_parent' => $post->ID,
        'order' => 'ASC',
        'orderby' => 'menu_order'
    );

    $parent = new WP_Query( $args );
?>

<section id="<?php echo $post_slug ?>">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img class="lilypad lilypad-small" data-no-retina src="<?php echo get_template_directory_uri() ?>/assets/images/graphics/lilypad.png" />
                <?php the_title( '<h3 class="heading-size-5 hr mb-4">', '</h3>' ); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 text-center">
            <?php the_content();?>
            </div>
        </div>
    </div>
</section>
<?php 
    if ( $parent->have_posts() ) : 
        while ( $parent->have_posts() ) : $parent->the_post();

        $args = array( 
            'post_type' => 'attachment', 
            'post_mime_type' => 'image',
            'numberposts' => -1, 
            'post_status' => null, 
            'post_parent' => $post->ID 
        ); 
        
        $attached_images = get_posts( $args );
?>
<section class="pt-0">
    <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 order-md-last text-center">
                    <?php foreach ( $attached_images as $image ) : ?>
                        <img class="resourcePic" data-rjs="3" src="<?php echo( wp_get_attachment_url($image->ID) ) ?>" />
                    <?php endforeach; ?>
                </div>
                <div class="col-12 col-md-7 offset-md-1">
                    <?php the_title( '<h3 class="mb-0">', '</h3>' ); ?>
                    <?php the_content();?>
                </div>
            </div>
        </div>
</section>
<?php 
        endwhile;
    endif;
    
    wp_reset_postdata();
?>