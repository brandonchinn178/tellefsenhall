<?php

    get_header();

    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            the_content();
        }
    } else {
        include 'templates/404.php';
    }

    get_footer();
?>