<?php

if ( function_exists('register_field_group') ) {
    // Cover photo for each page
    register_field_group(array(
        'id' => 'acf_coverphoto',
        'title' => 'Cover Photo',
        'fields' => array(
            array(
                'key' => 'field_1',
                'label' => 'Image',
                'instructions' => 'Sets the cover photo at the top of each page',
                'name' => 'image',
                'type' => 'image',
                'save_format' => 'url',
                'required' => 1,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
        ),
    ));
}

?>