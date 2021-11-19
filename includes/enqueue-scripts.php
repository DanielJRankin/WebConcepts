<?php

//ENQUEUE WOODMART SCRIPTS AND STYLES

function woodmart_child_enqueue_styles() {
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'woodmart-style' ), woodmart_get_theme_info( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'woodmart_child_enqueue_styles', 10010 );


function enqueue_custom_scripts() { 
	 
     wp_enqueue_script('custom_script', get_bloginfo('stylesheet_directory') . 'js/custom.js', array('jquery'),'1.0' );


	//ONLY LOAD SCRIPTS ON PRODUCT, SHOP AND HOME PAGES

//		if (function_exists('is_product') && is_product() || function_exists('is_shop') && is_shop() || function_exists('is_front_page') && is_front_page()) {
//
//			wp_enqueue_script('custom_script', get_bloginfo('stylesheet_directory') . '/script-path', array('jquery'),'1.0' );
//		}


	//ONLY LOAD SCRIPTS ON CHOSEN PAGE ID

//		if (is_page(1) ):
//
//			wp_enqueue_script('custom_script', get_bloginfo('stylesheet_directory') . '/script-path', array('jquery'),'1.0' );
//		}

}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


?>