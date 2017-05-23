<?php
    /* Template Name: Photo Gallery */

    wp_enqueue_style('gallery-style', get_template_directory_uri() . "/css/gallery.css");
    wp_enqueue_script('gallery-script', get_template_directory_uri() . "/js/gallery.js", array('jquery'));

    get_header();

    $query = new WP_Query(array(
        'post_type' => 'photo_gallery',
    ));

    while ($query->have_posts()) {
        $query->the_post();
        $title = get_field('title');
        $caption = get_field('caption');
        $image_url = get_field('image');
        echo(
            "<div class='gallery-photo' data-title='$title' data-caption='$caption'>
                <img src=$image_url>
            </div>"
        );
    }

    get_footer();
?>

<div class="popup">
    <div class="popup-box">
        <img>
        <h1 class="title"></h1>
        <p class="caption"></p>
    </div>
</div>
