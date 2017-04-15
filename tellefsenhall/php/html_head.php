<?php

/* Gets the <title> text */
function page_title() {
    wp_title('|', true, 'right');
    bloginfo('name');
}

?>