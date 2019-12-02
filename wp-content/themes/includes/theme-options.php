<?php

add_action('admin_init', 'custom_theme_options', 1);

function custom_theme_options() {



    $saved_settings = get_option('option_tree_settings', array());





    $custom_settings = array(
        'sections' => array(
            array(
                'id' => 'init',
                'title' => 'General Settings '
            ),  array(
                'id' => 'contentpanel',
                'title' => 'Content Panel'
            )
            
        ),
        'settings' => array(
        
            array(
                'id' => 'home_banner',
                'label' => 'Home Page Banner',
                'desc' => '',
                 'section' => 'init',
                'type' => 'list-item',
                    'class' => '',
                    'settings' => array(
                        array(
                            'label' => 'Description',
                            'id' => 'desc',
                            
                            'type' => 'text',
                            
                        ),array(
                            'label' => 'Image',
                            'id' => 'image',
                            
                            'type' => 'upload',
                            
                        )
                    )
            ),array(
                'id' => 'home_about_title',
                'label' => 'Home About Title',
                'desc' => '',
                'type' => 'text',
                'section' => 'init'
            ),array(
                'id' => 'home_about_desc',
                'label' => 'Home About Description',
                'desc' => '',
                'type' => 'text',
                'section' => 'init'
            ),array(
                'id' => 'home_about_image',
                'label' => 'Home About image',
                'desc' => '',
                'type' => 'upload',
                'section' => 'init'
            ),array(
                'id' => 'home_service_list',
                'label' => 'Home Service List',
                'desc' => '',
                 'section' => 'init',
                'type' => 'list-item',
                    'class' => '',
                    'settings' => array(
                        array(
                            'label' => 'Description',
                            'id' => 'desc',
                            
                            'type' => 'text',
                            
                        ),array(
                            'label' => 'Image',
                            'id' => 'image',
                            
                            'type' => 'upload',
                            
                        ),array(
                            'label' => 'Link',
                            'id' => 'link',
                            
                            'type' => 'text',
                            
                        )
                    )
            ),array(
                'id' => 'home_company_title',
                'label' => 'Home Company Title',
                'desc' => '',
                'type' => 'text',
                'section' => 'init'
            ),array(
                'id' => 'home_company_desc',
                'label' => 'Home Campany Description',
                'desc' => '',
                'type' => 'text',
                'section' => 'init'
            ),array(
                'id' => 'home_company_image',
                'label' => 'Home Company Image',
                'desc' => '',
                'type' => 'upload',
                'section' => 'init'
            ),array(
                'id' => 'home_stack_title',
                'label' => 'Home Tech Stack Title',
                'desc' => '',
                'type' => 'text',
                'section' => 'init'
            ),array(
                'id' => 'home_stack_desc',
                'label' => 'Home Tech Stack Description',
                'desc' => '',
                'type' => 'text',
                'section' => 'init'
            ),array(
                'id' => 'home_stack_image',
                'label' => 'Home Tech Stack Image',
                'desc' => '',
                 'section' => 'init',
                'type' => 'upload',
                 
            ),array(
                'id' => 'copyright',
                'label' => 'Copyright Text',
                'desc' => '',
                 'section' => 'init',
                'type' => 'text',
                 
            ),array(
                'id' => 'office_address',
                'label' => 'Office Address',
                'desc' => '',
                 'section' => 'init',
                'type' => 'text',
                 
            ),array(
                'id' => 'help_center',
                'label' => 'Help Center',
                'desc' => '',
                 'section' => 'init',
                'type' => 'text',
                 
            ),array(
                'id' => 'subscrib_text',
                'label' => 'Subscrib Text',
                'desc' => '',
                 'section' => 'init',
                'type' => 'text',
                 
            ),array(
                'id' => 'google_map_api',
                'label' => 'Google map Api',
                'desc' => '',
                 'section' => 'init',
                'type' => 'text',
                 
            ),array(
                'id' => 'google_latitude',
                'label' => 'Google latitude',
                'desc' => '',
                 'section' => 'init',
                'type' => 'text',
                 
            ),array(
                'id' => 'google_longitude',
                'label' => 'Google  Longitude',
                'desc' => '',
                 'section' => 'init',
                'type' => 'text',
                 
            ),array(
                'id' => 'social_share',
                'label' => 'Social Links and Icons',
                'desc' => '',
                 'section' => 'init',
                'type' => 'list-item',
                    'class' => '',
                    'settings' => array(
                        array(
                            'label' => 'Icon Class',
                            'id' => 'icon_class',
                            
                            'type' => 'text',
                            
                        ),array(
                            'label' => 'Link',
                            'id' => 'link',
                            
                            'type' => 'text',
                            
                        )
                    )
            )
        )
    );



    if ($saved_settings !== $custom_settings) {

        update_option('option_tree_settings', $custom_settings);
    }
}

?>