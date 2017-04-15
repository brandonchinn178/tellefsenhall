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

?>
