<?php
    get_header();

    $page = get_post();

    if ( is_page('tour') ) {
        include 'templates/page-tour.php';
    } else {
        echo '<h1>' . get_the_title($page_id->ID) . '</h1>';
        echo apply_filters('the_content', $page->post_content);
    }

    get_footer();
?>