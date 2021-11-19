<?php

if( function_exists( 'woodmart_is_woo_ajax' ) && woodmart_is_woo_ajax() ) {
	do_action( 'woodmart_main_loop' );
	die();
}

get_header(); ?>

<?php	$content_class = woodmart_get_content_class();?>

<div class="site-content <?php echo esc_attr( $content_class ); ?>" role="main">

	<?php do_action( 'woodmart_main_loop' ); ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
