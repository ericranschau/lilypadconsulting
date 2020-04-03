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
    <img class="bg-header" data-no-retina src="<?php echo get_template_directory_uri() ?>/assets/images/sectionBg-footer.svg" />
    <img class="bg-footer" data-no-retina src="<?php echo get_template_directory_uri() ?>/assets/images/sectionBg-footer.svg" />
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img class="lilypad lilypad-small" data-no-retina src="<?php echo get_template_directory_uri() ?>/assets/images/graphics/lilypad.png" />
                <?php the_title( '<h5 class="hr">', '</h5>' ); ?>
            </div>
        </div>
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
        <div class="row mb-10">
            <div class="col-md-6">
                <?php foreach ( $attached_images as $image ) : ?>
                    <img class="bioPic" data-rjs="3" src="<?php echo( wp_get_attachment_url($image->ID) ) ?>" />
                <?php endforeach; ?>
            </div>
            <div class="col-md-5">
                <?php the_title( '<h1 class="heading-size-3">', '</h1>' ); ?>
                <?php the_content();?>
            </div>
        </div>
        <?php 
                endwhile;
            endif;
            
            wp_reset_postdata();
        ?>
    </div>
</section>
