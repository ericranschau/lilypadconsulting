<?php 
    global $post;
    $post_background_graphic = get_post_meta($post->ID, 'background-graphic', true);
    $post_slug = $post->post_name;
?>

<section id="<?php echo $post_slug ?>">
    <div class="container graphic graphic-left <?php echo $post_background_graphic ?>">
        <div class="row">
            <div class="col-md-10 offset-md-2">
                <?php the_title( '<h1 class="heading-size-1 withMargin">', '</h1>' ); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-4">
                <?php the_content();?>
            </div>
        </div>
    </div>
</section>
