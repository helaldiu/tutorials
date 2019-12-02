<?php

add_action('admin_init', 'custom_theme_options', 1);

function custom_theme_options() {



    $saved_settings = get_option('option_tree_settings', array());

    $custom_settings = array(
        'sections' => array(
            array(
                'id' => 'init',
                'title' => 'General Settings'
            ),
            array(
                'id' => 'footer',
                'title' => 'Footer'
            ),
            // array(
            //     'id' => 'home_setting',
            //     'title' => 'Home Page'  
            // ),
            array(
                'id' => 'menu_bar',
                'title' => 'Menu Option'  
            )
			
        ),
        // 
        'settings' => array(

            // array(
            //     'id' => 'home_setting',
            //     'label' => 'Home first banner img',
            //     'type' => 'textarea',
            //     'desc' => '',
            //     'section' => 'Home Page'
            // ),
            array(
                'id' => 'copy_right',
                'label' => 'Footer Copy Right Text',
                'type' => 'textarea',
                'section' => 'footer'
            ),
            array(
                'id'       => 'id_select',
                'section' => 'menu_bar',
                'type'     => 'Select',
                'title'    => __('Select Option', 'conditions'), 
                'std' => 'menu_ltd',
                'choices' => array(
                    array(
                        'value' => 'header_menu_1',
                        'label' => __('Top Header logo Left', 'conditions')
                    ),
                    array(
                        'value' => 'header_menu_2',
                        'label' => __('Top Header logo Right', 'conditions')
                    ),
                    'default'  => 'header_menu_2',

            ),
            ),
            array(
                'id' => 'logo',
                'label' => 'LOGO',
                'desc' => '',
                'type' => 'upload',
                'section' => 'init'
            ),
            array(
                'id' => 'home_banner_title',
                'label' => 'home_banner_title',
                'desc' => '',
                'type' => 'text',
                'section' => 'init'
            ),array(
                'id' => 'home_banner_subtitle',
                'label' => 'Home Banner SubTitle',
                'desc' => '',
                'type' => 'text',
                'section' => 'init'
            ),array(
                'id' => 'home_banner_photo',
                'label' => 'Home Banner Photo',
                'desc' => '',
                'type' => 'upload',
                'section' => 'init'
            ),
            array(
                'id' => 'we_first_start_road',
                'label' => 'We First Start Title',
                'desc' => '',
                'type' => 'text',
                'section' => 'init'
            ),
            array(
                'id' => 'we_first_paragrap',
                'label' => 'Test Description',
                'type' => 'textarea',
                'section' => 'init'
            ),
            array(
                'id' => 'banner_img',
                'label' => 'Condition Img',
                'type' => 'upload',
                'section' => 'init'
            ),
            array(
                'id' => 'condition_ai',
                'label' => 'Test Title',
                'type' => 'text',
                'section' => 'init'
            ),array(
                'id' => 'only_paragrap',
                'label' => 'Test paragrap',
                'type' => 'textarea',
                'section' => 'init'
            ),array(
                'id' => 'home_page_about_section',
                'label' => 'Home item count section',
				'section' => 'init',
                'type' => 'list-item',
                    'class' => '',
                    'settings' => array(
                        array(
                            'label' => 'Description',
                            'id' => 'desc',
                            'type' => 'textarea', 
                        )
                    )
            ),array(
                'id' => 'home_buget_title',
                'label' => 'Budget Title',
                'desc' => '',
                'type' => 'text',
                'section' => 'init'
            ),array(
                'id' => 'home_budget_subtitle',
                'label' => 'Home Budget Subtitle',
                'type' => 'textarea',
                'section' => 'init'
            ),array(
                'id' => 'home_budget_img',
                'label' => 'Home Budget Images',
                'type' => 'upload',
                'section' => 'init'
            ),array(
                'id' => 'home_schedule_title',
                'label' => 'Schedule Title',
                'desc' => '',
                'type' => 'text',
                'section' => 'init'
            ),array(
                'id' => 'home_schedule_subtitle',
                'label' => 'Home Schedule Subtitle',
                'type' => 'textarea',
                'section' => 'init'
            ),array(
                'id' => 'home_schedule_img',
                'label' => 'Home Schedule Images',
                'type' => 'upload',
                'section' => 'init'
            ),array(
                'id' => 'home_accuracy_title',
                'label' => 'Accuracy Title',
                'desc' => '',
                'type' => 'text',
                'section' => 'init'
            ),array(
                'id' => 'home_accuracy_subtitle',
                'label' => 'Home Accuracy Subtitle',
                'type' => 'textarea',
                'section' => 'init'
            ),array(
                'id' => 'home_accuracy_img',
                'label' => 'Home Accuracy Images',
                'type' => 'upload',
                'section' => 'init'
            ),array(
                'id' => 'url-facebook',
                'label' => 'Facebook',
                'desc' => '',
                'type' => 'text',
                'section' => 'init'
            ),array(
                'id' => 'url-linkedin',
                'label' => 'Linkedin',
                'desc' => '',
                'type' => 'text',
                'section' => 'init'
            ),array(
                'id' => 'url-twitter',
                'label' => 'twitter',
                'desc' => '',
                'type' => 'text',
                'section' => 'init'
            ),array(
                'id' => 'url-youtube',
                'label' => 'Youtube',
                'desc' => '',
                'type' => 'text',
                'section' => 'init'
            )   
        )
    );



    if ($saved_settings !== $custom_settings) {

        update_option('option_tree_settings', $custom_settings);
    }
}

// hearder Option

?>