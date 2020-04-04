<?php 
    global $post;
    $post_background_graphic = get_post_meta($post->ID, 'background-graphic', true);
    $post_background_graphic_client_list = get_post_meta($post->ID, 'background-graphic-client-list', true);
    $post_slug = $post->post_name;
    $post_sub_head = get_post_meta($post->ID, 'sub-heading', true);

    $args = array( 
        'post_type' => 'attachment', 
        'post_mime_type' => 'image',
        'numberposts' => -1, 
        'post_status' => null, 
        'post_parent' => $post->ID 
    ); 
    
    $attached_images = get_posts( $args );
?>

<section id="<?php echo $post_slug ?>">
    <div class="container graphic <?php echo $post_background_graphic ?>">
        <div class="row overflow-hidden">
            <div class="col-md-9 offset-md-2">
                <h5 class="hr hr-left"><?php echo $post_sub_head ?></h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-2">
                <?php the_title( '<h1 class="heading-size-1 withMargin">', '</h1>' ); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?php the_content();?>
            </div>
            <div class="col-md-4 order-md-first">
                <div class="clientsWrapper">
                    <img class="clients-bg mix_horizontal" data-no-retina src="<?php echo get_template_directory_uri() ?>/assets/images/graphics/lilypadBg_<?php echo $post_background_graphic_client_list ?>_horizontal.png" />
                    <img class="clients-bg mix_vertical" data-no-retina src="<?php echo get_template_directory_uri() ?>/assets/images/graphics/lilypadBg_<?php echo $post_background_graphic_client_list ?>_vertical.png" />
                    <ul class="clients">
                    <?php foreach ( $attached_images as $image ) : ?>
                        <li class="clients-listItem"><img class="clients-img" data-no-retina src="<?php echo( wp_get_attachment_url($image->ID) ) ?>" /></li>
                    <?php endforeach; ?>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</section>
