<?php

/* Remove Add Media button from posts */
function admin_remove_media_buttons() {
    remove_action('media_buttons', 'media_buttons');
}
add_action('admin_head', 'admin_remove_media_buttons');

/* Remove from admin sidebar */
function admin_remove_menus() {
    remove_menu_page('edit.php'); // Posts
    remove_menu_page('edit-comments.php'); // Comments
}
add_action('admin_menu', 'admin_remove_menus');

/* Creates the Custom Post Type for the Slideshow */
function create_slideshow() {
    $args = array(
        'labels' => array(
            'name' => 'Slideshow'
        ),
        'show_ui' => true,
        'supports' => array('')
    );
    register_post_type( 'slideshow', $args );
}
add_action( 'init', 'create_slideshow' );

/* Customize Slideshow admin page */
function slideshow_table_head($defaults) {
    return array(
        'cb' => 'cb',
        'page' => 'Page',
        'image' => 'Image',
    );
}
add_filter('manage_slideshow_posts_columns', 'slideshow_table_head');
function slideshow_table_content($column_name, $post_id) {
    if ($column_name == 'page') {
        the_field('page', $post_id);
    }
    if ($column_name == 'image') {
        $image = get_field('image', $post_id);
        $permalink = get_edit_post_link($post_id);
        echo "<a href=$permalink><img src='$image' height='100px'></a>";
    }
}
add_action('manage_slideshow_posts_custom_column', 'slideshow_table_content', 10, 2);

?>