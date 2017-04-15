<?php

if ( function_exists('register_field_group') ) {
    // // Image for each page
    // register_field_group(array(
    //     'id' => 'acf_pageimages',
    //     'title' => 'Page Images',
    //     'fields' => array(
    //         array(
    //             'key' => 'field_1',
    //             'label' => 'Image',
    //             'instructions' => 'Sets the image for the top of each page',
    //             'name' => 'image',
    //             'type' => 'image',
    //             'save_format' => 'url',
    //             'required' => 1,
    //         ),
    //     ),
    //     'location' => array(
    //         array(
    //             array(
    //                 'param' => 'post_type',
    //                 'operator' => '==',
    //                 'value' => 'page'
    //             ),
    //         ),
    //     ),
    //     'options' => array(
    //         'position' => 'normal',
    //         'layout' => 'no_box'
    //     ),
    // ));

    // // Tour page sections
    // register_field_group(array(
    //     'id' => 'acf_tourpage',
    //     'title' => 'Tour Sections',
    //     'fields' => array(
    //         array(
    //             'key' => 'field_3',
    //             'label' => 'Location',
    //             'name' => 'location',
    //             'type' => 'textarea',
    //         ),
    //         array(
    //             'key' => 'field_4',
    //             'label' => 'Academics',
    //             'name' => 'academics',
    //             'type' => 'textarea',
    //         ),
    //         array(
    //             'key' => 'field_5',
    //             'label' => 'Room and Board',
    //             'name' => 'room_and_board',
    //             'type' => 'textarea',
    //         ),
    //         array(
    //             'key' => 'field_6',
    //             'label' => 'Social Events',
    //             'name' => 'socials',
    //             'type' => 'textarea',
    //         ),
    //     ),
    //     'location' => array(
    //         array(
    //             array(
    //                 'param' => 'page',
    //                 'operator' => '==',
    //                 'value' => get_page_by_path('tour')->ID
    //             ),
    //         ),
    //     ),
    //     'options' => array(
    //         'position' => 'normal',
    //         'layout' => 'no_box',
    //         'hide_on_screen' => array(
    //             0 => 'the_content',
    //         ),
    //     ),
    // ));
}

?>