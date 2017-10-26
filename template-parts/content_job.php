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

			<header class="entry-header ">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				?>
			</header><!-- .entry-header -->


			<div class="entry-content">
				<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'cap-theme' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

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
	<div class="col-md-3 col-lg-3 colours orange">
		<?php //get_sidebar(); ?>
	</div>
</div>
