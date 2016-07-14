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



function tutsplus_widgets_init() {
 
   
    register_sidebar( array(
        'name' => __( 'First Footer Widget Area', 'tutsplus' ),
        'id' => 'footer1',
        'description' => __( 'The first footer widget area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    
    register_sidebar( array(
        'name' => __( 'Second Footer Widget Area', 'tutsplus' ),
        'id' => 'footer2',
        'description' => __( 'The second footer widget area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
   
    register_sidebar( array(
        'name' => __( 'Third Footer Widget Area', 'tutsplus' ),
        'id' => 'footer3',
        'description' => __( 'The third footer widget area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    
    register_sidebar( array(
        'name' => __( 'Fourth Footer Widget Area', 'tutsplus' ),
        'id' => 'footer4',
        'description' => __( 'The fourth footer widget area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
         
}
// Register
add_action( 'widgets_init', 'tutsplus_widgets_init' );


/** Menus **/

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

/** Theme Support **/

add_theme_support('html5',array('search-form'));

