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

    // Footer contents
    register_field_group(array(
        'id' => 'acf_footer',
        'title' => 'Footer Content',
        'fields' => array(
            array(
                'key' => 'field_2',
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'required' => 1,
            ),
            array(
                'key' => 'field_3',
                'label' => 'Content',
                'name' => 'content',
                'type' => 'wysiwyg',
                'required' => 1,
                'media_upload' => 'no',
            ),
            array(
                'key' => 'field_4',
                'label' => 'Column Number',
                'name' => 'column',
                'instructions' => 'The column this content should be in in the footer. The columns will be ordered left to right from lowest to highest value.',
                'type' => 'number',
                'required' => 1,
            ),
        ),
        'location' => array(
            array(array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'footer',
            )),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
        ),
    ));
}

?>