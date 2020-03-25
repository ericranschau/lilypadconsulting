<?php 
    global $post;
    $post_background_graphic = get_post_meta($post->ID, 'background-graphic', true);
    $post_slug = $post->post_name;
?>

<section id="<?php echo $post_slug ?>">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img class="lilypad lilypad-small" src="<?php echo get_template_directory_uri() ?>/assets/images/graphics/lilypad.png" />
                <?php the_title( '<h5 class="hr">', '</h5>' ); ?>
            </div>
        </div>

    </div>
</section>