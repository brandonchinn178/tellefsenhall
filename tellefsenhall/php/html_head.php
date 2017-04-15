<?php

/* Gets the <title> text */
function page_title() {
    wp_title('|', true, 'right');
    bloginfo('name');
}

/* Adds any necessary tags to the <head> section */
function enqueue_scripts() {
    $root = get_template_directory_uri() . '/';

    if ( is_front_page() ) {
        // wp_enqueue_script(
        //     'home',
        //     $root . 'js/home.js',
        //     array('jquery')
        // );
        // wp_enqueue_style(
        //     'home',
        //     $root . 'css/home.css'
        // );
    } else if ( is_page() ) {
        // wp_enqueue_style(
        //     'page',
        //     $root . 'css/page.css'
        // );
        // if ( is_page('tour') ) {
        //     wp_enqueue_style(
        //         'page-tour',
        //         $root . 'css/page-tour.css'
        //     );
        // }
    }
}

add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

?>