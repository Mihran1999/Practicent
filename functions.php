<?php 
remove_action('wp_head', 'wp_generator');

/**
* Function for scripts and styles
**/

 function load_style_script()
 {
 	wp_enqueue_script('example', get_template_directory_uri() . '/js/example.js');
 	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js');
 	wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.0.1', true );
 	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.0.0', true );
 	wp_enqueue_script('style', get_template_directory_uri() . '/style.css');
 	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap.min.css' );
 	wp_enqueue_style( 'animations', get_template_directory_uri() . '/animations.css' );
	
 }


/**
* Downloading styles and scripts
**/

add_action('wp_enqueue_scripts', 'load_style_script');


add_theme_support( 'post-thumbnails' ); 

/**
* Posts
**/

/** Content **/ 

add_action('init', 'start');
function start(){
	register_post_type('start', array(
		'public' => true,
		'supports' => array('title', 'thumbnail', 'editor','custom-fields'),
		'labels' => array(
			'name' => 'start',
			'all_items' => 'All start',
			'add_new' => 'Add new',
			'add_new_item' => 'Adding new items'
		)
	));
}
add_action('init', 'form');
function form(){
	register_post_type('form', array(
		'public' => true,
		'supports' => array('title', 'thumbnail', 'editor','custom-fields'),
		'labels' => array(
			'name' => 'form',
			'all_items' => 'All form',
			'add_new' => 'Add new',
			'add_new_item' => 'Adding new items'
		)
	));
}
add_action('init', 'lorem');
function lorem(){
	register_post_type('lorem', array(
		'public' => true,
		'supports' => array('title', 'thumbnail', 'editor','custom-fields'),
		'labels' => array(
			'name' => 'lorem',
			'all_items' => 'All lorem',
			'add_new' => 'Add new',
			'add_new_item' => 'Adding new items'
		)
	));
}
add_action('init', 'services');
function services(){
	register_post_type('services', array(
		'public' => true,
		'supports' => array('title', 'thumbnail', 'editor','custom-fields'),
		'labels' => array(
			'name' => 'services',
			'all_items' => 'All services',
			'add_new' => 'Add new',
			'add_new_item' => 'Adding new items'
		)
	));
}
add_action('init', 'sponsors');
function sponsors(){
	register_post_type('sponsors', array(
		'public' => true,
		'supports' => array('title', 'thumbnail', 'editor','custom-fields'),
		'labels' => array(
			'name' => 'sponsors',
			'all_items' => 'All sponsors',
			'add_new' => 'Add new',
			'add_new_item' => 'Adding new items'
		)
	));
}
add_action('init', 'users');
function users(){
	register_post_type('users', array(
		'public' => true,
		'supports' => array('title', 'thumbnail', 'editor','custom-fields'),
		'labels' => array(
			'name' => 'users',
			'all_items' => 'All users',
			'add_new' => 'Add new',
			'add_new_item' => 'Adding new items'
		)
	));
}






/** Menus **/

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      /** 'extra-menu' => __( 'Extra Menu' ) **/
    )
  );
}
add_action( 'init', 'register_my_menus' );

/** Theme Support **/

add_theme_support('html5',array('search-form'));

