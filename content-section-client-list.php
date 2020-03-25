<?php 
    global $post;
    $post_background_graphic = get_post_meta($post->ID, 'background-graphic', true);
    $post_slug = $post->post_name;
    $post_sub_head = get_post_meta($post->ID, 'sub-heading', true);
?>

<section id="<?php echo $post_slug ?>" class="graphic <?php echo $post_background_graphic ?>">
    <div class="container">
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
                <!-- <div class="clientsWrapper">
                    <img class="clients-bg mix_horizontal" src="<?php echo get_template_directory_uri() ?>/assets/images/graphics/lilypadBg_v1_horizontal.png" />
                    <img class="clients-bg mix_vertical" src="<?php echo get_template_directory_uri() ?>/assets/images/graphics/lilypadBg_v1_vertical.png" />
                    <ul class="clients">
                        <li class="clients-listItem"><img class="clients-img" src="<?php echo get_template_directory_uri() ?>/assets/images/FPO/clients/mac.svg" /></li>
                        <li class="clients-listItem"><img class="clients-img" src="<?php echo get_template_directory_uri() ?>/assets/images/FPO/clients/3m.svg" /></li>
                        <li class="clients-listItem"><img class="clients-img" src="<?php echo get_template_directory_uri() ?>/assets/images/FPO/clients/artSpace.svg" /></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</section>