<?php

if ( function_exists('register_field_group') ) {
    // Home page slideshow
    register_field_group(array(
        'id' => 'acf_homepage',
        'title' => 'Homepage Slideshow',
        'fields' => array(
            array(
                'key' => 'field_1',
                'label' => 'Page',
                'instructions' => 'The page to get the title and caption from.',
                'name' => 'page',
                'type' => 'page_link',
                'formatting' => 'none',
                'required' => 1,
            ),
            array(
                'key' => 'field_2',
                'label' => 'Image',
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
                    'value' => 'slideshow'
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box'
        ),
    ));

    // Tour page sections
    register_field_group(array(
        'id' => 'acf_tourpage',
        'title' => 'Tour Sections',
        'fields' => array(
            array(
                'key' => 'field_3',
                'label' => 'Location',
                'name' => 'location',
                'type' => 'textarea',
            ),
            array(
                'key' => 'field_4',
                'label' => 'Academics',
                'name' => 'academics',
                'type' => 'textarea',
            ),
            array(
                'key' => 'field_5',
                'label' => 'Room and Board',
                'name' => 'room_and_board',
                'type' => 'textarea',
            ),
            array(
                'key' => 'field_6',
                'label' => 'Social Events',
                'name' => 'socials',
                'type' => 'textarea',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page',
                    'operator' => '==',
                    'value' => get_page_by_path('tour')->ID
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
                0 => 'the_content',
            ),
        ),
    ));
}

?>