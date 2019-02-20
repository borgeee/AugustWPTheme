<?php

function august_customize_register($wp_customize){
// Add Showcase Settings
		$wp_customize->add_section('showcase', array(
			'title'			=>	__('Showcase Settings','august'),
			'description'	=>	sprintf( __('Options for Showcase Area','august')),
			'priority'		=>	130,

		));

	// Image Setting
		$wp_customize->add_setting('showcase_image', array(
			'default'		=>	get_bloginfo('template_directory') . '/img/showcase.jpg',
			'type'			=>	'theme_mod'
		));

	// Image Control
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,
			'showcase_image', array(
			'label'		=>	__('Background Image', 'august'),
			'section'	=>	'showcase',
			'settings'	=>	'showcase_image',
			'priority'	=>	1,
		)));

	// Image Height Setting
		$wp_customize->add_setting('showcase_height', array(
			'default'		=>	_x(750, 'august'),
			'type'			=>	'theme_mod'
		));	

	// Image Height Control
		$wp_customize->add_control('showcase_height', array(
			'label'		=>	__('Showcase Height', 'august'),
			'section'	=>	'showcase',
			'priority'	=>	2,
		));

	// Heading Setting
		$wp_customize->add_setting('showcase_heading', array(
			'default'		=>	_x('August Theme','august'),
			'type'			=>	'theme_mod'
		));

	// Heading Control
		$wp_customize->add_control('showcase_heading', array(
			'label'		=>	__('Heading', 'august'),
			'section'	=>	'showcase',
			'priority'	=>	3,
		));

	// Text Setting
		$wp_customize->add_setting('showcase_text', array(
			'default'		=>	_x('by Borgee','august'),
			'type'			=>	'theme_mod'
		));

	// Text Control
		$wp_customize->add_control('showcase_text', array(
			'label'		=>	__('Text', 'august'),
			'section'	=>	'showcase',
			'priority'	=>	4,
		));


// Add Social Media Section
		$wp_customize->add_section('social', array(
			'title'			=>	__('Add Social Media','august'),
			'description'	=>	sprintf( __('Social Media URLs','august')),
			'priority'		=>	140,

		));	

	// Facebook Setting
		$wp_customize->add_setting('facebook_url', array(
			'default'		=>	_x('https://facebook.com','august'),
			'type'			=>	'theme_mod'
		));

	// Facebook Control
		$wp_customize->add_control('facebook_url', array(
			'label'		=>	__('Facebook URL', 'august'),
			'section'	=>	'social',
			'priority'	=>	1,
		));

	// Twitter Setting
		$wp_customize->add_setting('twitter_url', array(
			'default'		=>	_x('https://twitter.com/borgeeph','august'),
			'type'			=>	'theme_mod'
		));

	// Twitter Control
		$wp_customize->add_control('twitter_url', array(
			'label'		=>	__('Twitter URL', 'august'),
			'section'	=>	'social',
			'priority'	=>	2,
		));

	// Instagram Setting
		$wp_customize->add_setting('instagram_url', array(
			'default'		=>	_x('https://www.instagram.com/borgeeee/','august'),
			'type'			=>	'theme_mod'
		));

	// Instagram Control
		$wp_customize->add_control('instagram_url', array(
			'label'		=>	__('Instagram URL', 'august'),
			'section'	=>	'social',
			'priority'	=>	3,
		));


// Add Banner Section
		$wp_customize->add_section('banner', array(
			'title'			=>	__('Bottom Banner','august'),
			'description'	=>	sprintf( __('Options for Bottom Banner Area','august')),
			'priority'		=>	160,

		));

	// Image Setting
		$wp_customize->add_setting('banner_image', array(
			'default'		=>	get_bloginfo('template_directory') . '/img/banner.jpg',
			'type'			=>	'theme_mod'
		));

	// Image Control
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,
			'showcase_image', array(
			'label'		=>	__('Background Image', 'august'),
			'section'	=>	'banner',
			'settings'	=>	'banner_image',
			'priority'	=>	1,
		)));

	// Heading Setting
		$wp_customize->add_setting('banner_heading', array(
			'default'		=>	_x('Follow Us','august'),
			'type'			=>	'theme_mod'
		));

	// Heading Control
		$wp_customize->add_control('banner_heading', array(
			'label'		=>	__('Heading', 'august'),
			'section'	=>	'banner',
			'priority'	=>	3,
		));


// Misc Option Section
		$wp_customize->add_section('misc', array(
			'title'			=>	__('Misc Options','august'),
			'description'	=>	sprintf( __('Misc Options for Theme','august')),
			'priority'		=>	150,

		));

		// Animation Setting
			$wp_customize->add_setting('animation', array(
				'default'		=>	'1'
			));

		// Heading Control
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,
				'animation', array(
				'label'		=>	__('Enable Animation', 'august'),
				'section'	=>	'misc',
				'settings'	=>	'animation',
				'type'		=>	'checkbox',
			)));




}

add_action('customize_register','august_customize_register');