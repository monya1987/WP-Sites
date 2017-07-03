<?php 
	
function wpbaos_setup() {
	load_theme_textdomain('wpbaos');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('html5', array(
		'search_form', 
		'comment-form',
		'caption',));
	register_nav_menu('primary', 'Primary menu');
}

add_action('after_setup_theme', 'wpbaos_setup');

function wpbaos_scripts() {
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );
	wp_register_script( 'scripts-jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', null, '3.2.1', true );
	wp_enqueue_script('scripts-jquery');
}

add_action( 'wp_enqueue_scripts', 'wpbaos_scripts' );

if ( ! class_exists( 'Foundationpress_Mobile_Walker' ) ) :
	class Foundationpress_Mobile_Walker extends Walker_Nav_Menu {
		function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat("\t", $depth);
			$output .= "\n$indent<ul class=\"vertical nested menu\">\n";
		}
	}
endif;

if ( ! class_exists( 'Foundationpress_Top_Bar_Walker' ) ) :
	class Foundationpress_Top_Bar_Walker extends Walker_Nav_Menu {
		function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat("\t", $depth);
			$output .= "\n$indent<ul class=\"dropdown menu vertical\" data-toggle>\n";
		}
	}
endif;