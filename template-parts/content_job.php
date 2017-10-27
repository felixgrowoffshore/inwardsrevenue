<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package inward-revenue
 */

?>

<div class="row flex-display">
	<div class="col-md-9 col-lg-9">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="entry-content">
				<?php
					the_content();
					
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cap-theme' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
		</article><!-- #post-<?php the_ID(); ?> -->

	</div>
	<div class="col-md-3 col-lg-3">
		<?php //get_sidebar(); ?>
	</div>
</div>
