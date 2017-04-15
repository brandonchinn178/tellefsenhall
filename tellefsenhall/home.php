<?php
    get_header();

    echo '<div class="slideshow">';

    $query = new WP_Query(array(
        'category_name' => 'slideshow',
        'order' => 'ASC',
        'orderby' => 'meta_value',
        'meta_key' => 'slide_num'
    ));

    while( $query->have_posts() ) {
        $query->the_post();
        $title = get_the_title();
        $description = apply_filters( 'the_content', get_the_content() );
        $image = get_field('image');

        echo(
            "<div class='slide'>
                <div class='slide-content'>
                    <h2>$title</h2>
                    <div class='description'>$description</div>
                </div>
                <div class='image'>
                    <img src=$image>
                </div>
            </div>"
        );
    }
    echo '</div>';

    get_footer();
?>