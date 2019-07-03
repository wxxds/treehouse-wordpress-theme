<?php
	
add_action( 'genesis_meta', 'add_viewport_meta_tag' );
 	function add_viewport_meta_tag() {
 	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
 }

/**
 * Register style sheet.
 */
add_action( 'wp_enqueue_scripts', 'register_plugin_styles' );

function register_plugin_styles() {
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style( 'bootstrap' );

}


add_action( 'wp_enqueue_scripts', 'register_plugin_stylesXX' );

function register_plugin_stylesXX() {
	wp_register_style( 'lightbox', get_template_directory_uri() . '/css/lightbox.css', array(), false, 'all');
	wp_enqueue_style( 'lightbox' );

}


function register_plugin_styleX() {
  wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), filemtime(get_template_directory() . '/css/style.css'), false);
}
add_action( 'wp_enqueue_scripts', 'register_plugin_styleX' );



function loadjquery()
{
	wp_deregister_script('jquery');
	
	wp_register_script( 'jquery', get_template_directory_uri()  . '/js/jquery.js', array(), true, 'all');
	wp_enqueue_script( 'jquery' );

}
add_action( 'wp_enqueue_scripts', 'loadjquery' );


function loadjs()
{
	wp_register_script( 'customjs', get_template_directory_uri() . '/js/scripts.js', array(), false, 'all');
	wp_enqueue_script( 'customjs' );

}

add_action( 'wp_enqueue_scripts', 'loadjs' );




function loadhoverjs()
{
	wp_register_script( 'customhoverjs', get_template_directory_uri() . '/js/jquery.hoverplay.js', array(), false, 'all');
	wp_enqueue_script( 'customhoverjs' );

}

add_action( 'wp_enqueue_scripts', 'loadhoverjs' );


function lightboxjs()
{
	wp_register_script( 'customlightboxjs', get_template_directory_uri() . '/js/lightbox.js', array(), false, 'all');
	wp_enqueue_script( 'customlightboxjs' );

}

add_action( 'wp_enqueue_scripts', 'lightboxjs' );


function classiejs()
{
	wp_register_script( 'classie', get_template_directory_uri() . '/js/classie.js', array(), true, 'all');
	wp_enqueue_script( 'classie' );

}

add_action( 'wp_enqueue_scripts', 'classiejs' );




function modern()
{
	wp_register_script( 'modernshit', get_template_directory_uri() . '/js/modernizr.custom.js', array(), true, 'all');
	wp_enqueue_script( 'modernshit' );

}

add_action( 'wp_enqueue_scripts', 'modern' );





add_theme_support( 'custom-logo' );

function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'mouchentheme_custom_logo_setup' );

add_theme_support('menus');

register_nav_menus(
    
    array(
        
       'top-menu' => __('Top Menu', 'theme'),
       'footer-menu' => __('Footer Menu', 'theme') 
        
        )
    
    );

function ea_primary_menu_extras( $menu, $args ) {

    if( 'primary' == $args->theme_location )
      $menu .= '<li class="menu-item search"><a href="#" class="search-toggle"><i class="icon-search"></i></a>' . get_search_form( false ) . '</li>';

    return $menu;
}
add_filter( 'wp_nav_menu_items', 'ea_primary_menu_extras', 10, 2 );


add_theme_support( 'post-thumbnails' );




function componentcss() {
  wp_enqueue_style('component', get_template_directory_uri() . '/css/components.css', array(), filemtime(get_template_directory() . '/css/components.css'), false);
}
add_action( 'wp_enqueue_scripts', 'componentcss' );



function defaultcss() {
  wp_enqueue_style('defaultcssX', get_template_directory_uri() . '/css/default.css', array(), filemtime(get_template_directory() . '/css/default.css'), false);
}
add_action( 'wp_enqueue_scripts', 'defaultcss' );






// Woocommerce

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}

add_theme_support('woocommerce');