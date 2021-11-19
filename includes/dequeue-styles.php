<?php

function dequeue_styles() {

wp_dequeue_style( 'style-name' );
// wp_dequeue_style( 'style-name' );
// wp_dequeue_style( 'style-name' );
// wp_dequeue_style( 'style-name' );

//ONLY LOAD STYLES ON HOME, SHOP and PRODUCT PAGES

//     if (function_exists('is_product') && ! is_product() && function_exists('is_shop') && ! is_shop() && function_exists('is_front_page') && ! is_front_page()) {      
// 			wp_dequeue_style( 'style-name' );
// 			wp_dequeue_style( 'style-name' );
// 			wp_dequeue_style( 'style-name' );
//   };

//ONLY LOAD STYLES ON CHOSEN PAGE ID

// if (!is_page(001) ):

// 		wp_dequeue_style( 'style-name' );
// 		wp_dequeue_style( 'style-name' );
// 		wp_dequeue_style( 'style-name' );

// }

add_action( 'wp_enqueue_scripts', 'dequeue_styles' );

?>