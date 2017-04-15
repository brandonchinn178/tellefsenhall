<?php

/* Remove Add Media button from posts */
function admin_remove_media_buttons() {
    remove_action('media_buttons', 'media_buttons');
}
add_action('admin_head', 'admin_remove_media_buttons');

/* Customize admin sidebar */
function admin_customize_menu() {
    remove_menu_page('edit.php'); // Posts
    remove_menu_page('edit-comments.php'); // Comments
}
add_action('admin_menu', 'admin_customize_menu');

?>
