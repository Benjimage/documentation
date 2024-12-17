<?php 
require_once get_template_directory() . '/inc/assets.php';

/* Functions */

function zetheme_supports(){
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('menus');
add_theme_support('custom-logo', array('height' => 175,'width' => 400,'flex-width' => true,));
}
function zetheme_register_assets() {
    wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/css/theme.css', array(), filemtime(get_template_directory() . '/css/theme.css'));
	wp_enqueue_script('modal-script', get_template_directory_uri() . '/js/modal.js', array(),filemtime(get_template_directory(). '/js/modal.js'),'1.0', true);
	wp_enqueue_script('gag-script', get_template_directory_uri() . '/js/gag.js', array(),filemtime(get_template_directory(). '/js/gag.js'),'1.0', true);
}
function register_zetheme_menu(){
	register_nav_menus(
		array(
			'header' => esc_html__( 'Menu header', 'zetheme' ),
			'footer' => esc_html__( 'Menu footer', 'zetheme' )
		)
	);
}

function zetheme_menu_class($classes) {
    $classes[] = 'zetheme_menu_class';
    return $classes;
}

function zetheme_menu_link_class($attrs) {
    $attrs['class'] = 'zetheme_menu_link_class';
    return $attrs;
}

function add_menu_item( $items, $args){
	if($args->theme_location === 'header') {
		$items .= '<li id="search" class="zetheme_menu_class seek"><i class="fa-solid fa-magnifying-glass"></i></li>';
	}
	return $items;
 };  
 
 function add_li_item( $items, $args){
	 if($args->theme_location === 'footer') {
		 $items .= "<li class=\"zetheme_menu_class feature\">Ressources</li>";
		 
	 }
	 return $items;
  };  
/* Actions */

add_action( 'init', 'zetheme_register_post_types' ); 
add_action( 'wp_enqueue_scripts', 'zetheme_register_assets' );
add_action('after_setup_theme', 'zetheme_supports');
add_action('after_setup_theme', 'register_zetheme_menu');

/* Filters */
add_filter('nav_menu_css_class', 'zetheme_menu_class');
add_filter('nav_menu_link_attributes', 'zetheme_menu_link_class');
add_filter('wp_nav_menu_items','add_menu_item',10, 2);
add_filter('wp_nav_menu_items','add_li_item',10, 2);