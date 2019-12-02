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
        ) ,array(
            'id' => 'special_order_type',
            'title' => 'List View Type',
            'pages' => array('page'),
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
                array(
            'id'          => 'special_order_type',
            'label'       => '',
            'desc'        => '',
            'type'        => 'radio',
            'pages' => array('page'),
            'context' => 'normal',
            'priority' => 'high',
            'choices'     => array( 
                array(
                    'value'       => 'flat',
                    'label'       => __( 'Flat List', 'text-domain' ),
                ),
                array(
                    'value'       => 'numaric',
                    'label'       => __( 'Numaric List', 'text-domain' ),
                ),
                array(
                    'value'       => 'odd_even',
                    'label'       => __( 'Odd Even List', 'text-domain' ),
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
        ) 

    );


/* load each metabox */
foreach ($meta_args_array as $meta_args) {
    ot_register_meta_box($meta_args);
}
}
