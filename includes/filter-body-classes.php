<?php

//FILTER BODY CLASSES ------------------------------------------

function filter_body_classes( $wp_classes, $extra_classes ) {

    // List of the only WP generated classes allowed
    $whitelist = array( 
        'portfolio', 
        'home', 
        'home-page', 
        'wp-embed-responsive', 
        'theme-picostrap5', 
        'page-template', 
        'page-template-empty', 
        'error404', 
        'shop', 
        'woocommerce', 
        'woocommerce-shop', 
        'woocommerce-page', 
        'woocommerce-js',
        'woocommerce-cart',
        'woocommerce-checkout',
        'archive', 
        'single', 
        'woocommerce-account',
        'page-id-1',               
    );

    $wp_classes = array_intersect( $wp_classes, $whitelist );

    return array_merge( $wp_classes, (array) $extra_classes );
}

add_filter( 'body_class', 'filter_body_classes', 10, 2 );


//ADD NEW BODY CLASSES ------------------------------------------

function new_body_classes($classes) {


	//ADD BODY CLASSES TO ALL PAGES

    $classes[] = 'class-name';
	// $classes[] = 'class-name';

	//ADD BODY CLASSES TO SPECIFIC PAGE

	// if (is_page(001) ): {
		// $classes[] = 'class-name';
		// $classes[] = 'class-name';
	// }

    return $classes;
}

// add_filter('body_class', 'new_body_classes');



?>