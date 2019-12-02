<?php

/**
 * Initialize the meta boxes before anything else.
 */
/**
 * Builds the Meta Boxes.
 */
add_action('admin_init', '_custom_meta_boxes');

function _custom_meta_boxes() {

    $meta_args_array = array(

        array(
            'id' => 'subtitle',
            'title' => 'SubTitle',
            'pages' => array('page'),
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
                array(
                    'id' => 'subtitle',
                    'label' => 'SubTitle',
                    'desc' => '',
                    'std' => '',
                    'type' => 'text',


                    )
                )
            ),array(
            'id' => 'subcontent',
            'title' => 'Sub Content',
            'pages' => array('page'),
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
                array(
                    'id' => 'subcontent',
                    'label' => 'Sub Content',
                    'desc' => '',
                    'std' => '',
                    'type' => 'textarea',


                    )
                )
            ),array(
                'id' => 'features',
                'title' => 'Features',
                'pages' => array('page'),
                'context' => 'normal',
                'priority' => 'high',
                'fields' => array(
                    array(
                        'id' => 'features',
                        'label' => 'Features',
                        'desc' => '',
                        'std' => '',
                        'type' => 'list-item',
                        'class' => '',
                        'settings' => array(
                            array(
                                'label' => 'Description',
                                'id' => 'desc',
                                'desc' => '',
                                'std' => '',
                                'rows' => '',
                                'taxonomy' => '',
                                'class' => '',
                                'type' => 'text',
                                'value' => '0',

                                ), array(
                                'label' => 'Image',
                                'id' => 'image',
                                'desc' => '',
                                'std' => '',
                                'rows' => '',
                                'taxonomy' => '',
                                'class' => '',
                                'type' => 'upload',
                                'value' => '0',

                                )
                                )
                        )
                    )
                ),array(
                'id' => 'special_ins',
                'title' => 'Others Element',
                'pages' => array('page'),
                'context' => 'normal',
                'priority' => 'high',
                'fields' => array(
                    array(
                        'id' => 'special_ins',
                        'label' => 'Others Element',
                        'desc' => '',
                        'std' => '',
                        'type' => 'list-item',
                        'class' => '',
                        'settings' => array(
                            array(
                                'label' => 'Description',
                                'id' => 'desc',
                                'desc' => '',
                                'std' => '',
                                'rows' => '',
                                'taxonomy' => '',
                                'class' => '',
                                'type' => 'text',
                                'value' => '0',

                                ), array(
                                'label' => 'Image',
                                'id' => 'image',
                                'desc' => '',
                                'std' => '',
                                'rows' => '',
                                'taxonomy' => '',
                                'class' => '',
                                'type' => 'upload',
                                'value' => '0',

                                )
                                )
                        )
                    )
                ) ,array(
            'id' => 'add_title',
            'title' => 'Additional Content Title',
            'pages' => array('page'),
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
                array(
                    'id' => 'add_title',
                    'label' => 'Additional Content Title',
                    'desc' => '',
                    'std' => '',
                    'type' => 'text',


                    )
                )
            ),array(
            'id' => 'add_content',
            'title' => 'Additional Content Title',
            'pages' => array('page'),
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
                array(
                    'id' => 'add_content',
                    'label' => 'Additional Content Title',
                    'desc' => '',
                    'std' => '',
                    'type' => 'textarea',


                    )
                )
            ),array(
            'id' => 'add_content_image',
            'title' => 'Additional Content Image',
            'pages' => array('page'),
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
                array(
                    'id' => 'add_content_image',
                    'label' => 'Additional Content Image',
                    'desc' => '',
                    'std' => '',
                    'type' => 'upload',


                    )
                )
            )

                );


/* load each metabox */
foreach ($meta_args_array as $meta_args) {
    ot_register_meta_box($meta_args);
}
}
