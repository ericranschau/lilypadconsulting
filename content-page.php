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
    case 'sub-pages':
        get_template_part('content', 'section-sub-pages');
    break;
    default:
        get_template_part('content', 'section-default');
    break;
}
?>