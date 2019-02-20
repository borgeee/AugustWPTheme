<?php
// register custom navigation menu
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// initialize theme support
function august_theme_support(){
	// Add Post Thumbnails
	add_theme_support( 'post-thumbnails' ); 
	
	// Nav Menus
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'August Theme' ),
		'footer' => __( 'Footer Menu', 'August Theme' ),
	));

	//Post Formats, Post Types Support
	add_theme_support('post-formats', array('aside','gallery')); 
}

//activate theme support
add_action('after_setup_theme','august_theme_support');


//widget location
function init_widgets($id){

	register_sidebar(array(	// Sidebar Widget
		'name'				=>	'Sidebar',
		'id'				=>	'sidebar',
		'before_widget'		=>	'<div class="card card-body bg-light animated fadeInRight sidebar-widget">',
		'after_widget'		=>	'</div> <br/>',
		'before_title'		=>	'<h3>',
		'after_title'		=>	'</h3>',
	));

	register_sidebar(array( //  blog categories top
		'name'				=>	'Subnav',
		'id'				=>	'subnav',
		'before_widget'		=>	'<div class="sub-nav">',
		'after_widget'		=>	'</div>',
		'before_title'		=>	'<div class="d-none">', //hide title
		'after_title'		=>	'</div>',
	));

	register_sidebar(array( //  Bottom
		'name'				=>	'Bottom',
		'id'				=>	'bottom',
		'before_widget'		=>	'<div class="section-1 animated fadeInUp"><div class="container">',
		'after_widget'		=>	'</div></div>',
		'before_title'		=>	'<div class="d-none">', //hide title
		'after_title'		=>	'</div>',
	));
}

//activate widget support
add_action('widgets_init','init_widgets');

//Get Top Parent Page
function get_top_parent(){
	global $post;
	if($post->post_parent){
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
	}
	return $post->ID;
}

// add customizer fuctionality
require get_template_directory() . '/inc/customizer.php';





