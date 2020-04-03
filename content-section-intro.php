<?php 
    global $post;
    $post_slug = $post->post_name;
?>

<section id="<?php echo $post_slug ?>">
    <img class="bg-footer" data-no-retina src="<?php echo get_template_directory_uri() ?>/assets/images/sectionBg-footer.svg" />
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <img class="lilypad" data-no-retina src="<?php echo get_template_directory_uri() ?>/assets/images/graphics/lilypad.png" />
                <?php the_title( '<h1 class="heading-size-2 text-center">', '</h1>' ); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <?php the_content();?>
            </div>
        </div>
    </div>
</section>
