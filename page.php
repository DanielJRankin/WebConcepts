<?php get_header(); ?>

<?php $content_class = woodmart_get_content_class();?>

<div class="site-content <?php echo esc_attr( $content_class ); ?>" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">
						<?php echo woodmart_get_the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'woodmart' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div>

					<?php woodmart_entry_meta(); ?>

				</article>

				<?php 
					if ( woodmart_get_opt('page_comments') && (comments_open() || get_comments_number()) ) :
						comments_template();
					endif;
				 ?>
		<?php endwhile; ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
