<?php 
    global $post;
    $post_slug = $post->post_name;
    $post_template_type = get_post_meta($post->ID, 'template-type', true);
?>

<?php
switch ($post_template_type) {
    case 'intro':
        get_template_part('content', 'section-intro');
    break;
    case 'client-list':
        get_template_part('content', 'section-client-list');
    break;
    case 'sub-sections':
        get_template_part('content', 'section-sub-sections');
    break;
    case 'sub-rows':
        get_template_part('content', 'section-sub-rows');
    break;
    default:
        get_template_part('content', 'section-default');
    break;
}
?>
