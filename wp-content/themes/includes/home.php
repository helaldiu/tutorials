<?php 

Kirki::add_panel( 'home_page', array(
	'priority'    => 10,
	'title'       => esc_html__( 'Home Page', 'kirki' ),
	'description' => esc_html__( 'Home page Option for customizer', 'kirki' ),
) );

Kirki::add_section( 'home_banner', array(
	'title'          => esc_html__( 'Banner', 'kirki' ),
	'description'    => esc_html__( 'Banner Section for home page if you use single banner just add one bannerand text', 'kirki' ),
	'panel'          => 'home_page',
	'priority'       => 160,
) );

Kirki::add_section( 'home_about', array(
	'title'          => esc_html__( 'About', 'kirki' ),
	'description'    => esc_html__( '', 'kirki' ),
	'panel'          => 'home_page',
	'priority'       => 160,
) );





Kirki::add_field( 'home_banner_list', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Banner List', 'kirki' ),
	'section'     => 'home_banner',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'text',
		'value' => esc_html__('Banner', 'kirki' ),
	],
	'button_label' => esc_html__('"Add new" button label (optional) ', 'kirki' ),
	'settings'     => 'my_setting',

	'fields' => [
		'banner_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Banner title', 'kirki' ),
			'description' => esc_html__( '', 'kirki' ),
			'default'     => '',
		],
		'banner_desc'  => [
			'type'        => 'text',
			'label'       => esc_html__( 'Banner Description', 'kirki' ),
			'description' => esc_html__( '', 'kirki' ),
			'default'     => '',
		],
		'banner_image'  => [
			'type'        => 'image',
			'settings'    => 'image_setting_array',
			'label'       => esc_html__( 'Image ', 'kirki' ),
			'description' => esc_html__( 'Description Here.', 'kirki' ),			
			'choices'     => [
				'save_as' => 'array',
			]
		],
		'banner_link'  => [
			'type'        => 'text',
			'label'       => esc_html__( 'Banner link', 'kirki' ),
			'description' => esc_html__( '', 'kirki' ),
			'default'     => '',
		]
	]
] );

Kirki::add_field( 'home_about_title', [
	'type'     => 'text',
	'settings' => 'my_setting',
	'label'    => esc_html__( 'About Title', 'kirki' ),
	'section'  => 'home_about',
	'default'  => esc_html__( '', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'home_about_desc', [
	'type'     => 'textarea',
	'settings' => 'my_setting',
	'label'    => esc_html__( 'Home Page About Description', 'kirki' ),
	'section'  => 'home_about',
	'default'  => esc_html__( '', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'home_about_image', [
	'type'        => 'image',
	'settings'    => 'image_setting_array',
	'label'       => esc_html__( 'Home Page About image', 'kirki' ),
	'description' => esc_html__( 'Description Here.', 'kirki' ),
	'section'     => 'home_about',
	'default'     => '',
	'choices'     => [
		'save_as' => 'array',
	],
] );