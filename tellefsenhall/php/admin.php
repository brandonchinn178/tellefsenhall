<?php

/* Customize admin sidebar */
function admin_customize_menu() {
    remove_menu_page('edit.php'); // Posts
    remove_menu_page('edit-comments.php'); // Comments
}
add_action('admin_menu', 'admin_customize_menu');

/* Create the custom post type for the footer */
function create_footer_post_type() {
    register_post_type('footer', array(
        'labels' => array(
            'name' => 'Footer Content',
        ),
        'show_ui' => true,
        'supports' => array(''),
    ));
}
add_action( 'init', 'create_footer_post_type' );

/* Footer Content admin page */
function admin_footer_table_head($defaults) {
    return array(
        'cb' => 'cb',
        'footer_title' => 'Title',
    );
}
add_filter('manage_footer_posts_columns', 'admin_footer_table_head');
function admin_footer_table_row($column_name, $post_id) {
    if ($column_name == 'footer_title') {
        $title = get_field('title', $post_id);
        $permalink = get_edit_post_link($post_id);
        echo "<a href=$permalink>$title</a>";
    }
}
add_action('manage_footer_posts_custom_column', 'admin_footer_table_row', 10, 2);

/* Create the custom post type for the photo gallery */
function create_photo_gallery_post_type() {
    register_post_type('photo_gallery', array(
        'labels' => array(
            'name' => 'Photo Gallery',
        ),
        'show_ui' => true,
        'supports' => array(''),
    ));
}
add_action( 'init', 'create_photo_gallery_post_type' );

/* Photo Gallery admin page */
function admin_photo_gallery_table_head($defaults) {
    return array(
        'cb' => 'cb',
        'photo_gallery_title' => 'Title',
        'photo_gallery_image' => 'Image',
    );
}
add_filter('manage_photo_gallery_posts_columns', 'admin_photo_gallery_table_head');
function admin_photo_gallery_table_row($column_name, $post_id) {
    if ($column_name == 'photo_gallery_title') {
        $title = get_field('title', $post_id);
        $permalink = get_edit_post_link($post_id);
        echo "<a href=$permalink>$title</a>";
    } else if ($column_name == 'photo_gallery_image') {
        $url = get_field('image', $post_id);
        echo "<img src=$url height=200>";
    }
}
add_action('manage_photo_gallery_posts_custom_column', 'admin_photo_gallery_table_row', 10, 2);

?>
