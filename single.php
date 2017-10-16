<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CAP_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="home-feat-wrap">
				<?php get_template_part( 'template-parts/_get_featured' ); ?>
			</div>
			<div class="container">
				<?php get_template_part( 'template-parts/_get_breadcrumb' ); ?>
				<div class="row">
					<div class="col-sm-12">

						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', get_post_type() );



							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
