<?php
/**
 * The template for displaying all single job listing posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package inward-revenue
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="feat-wrap">
				<?php get_template_part( 'template-parts/_featured_image_job' ); ?>
			</div>

				<div class="single-job-listing">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
    						<?php
    						while ( have_posts() ) : the_post();

    							get_template_part( 'template-parts/content_job', get_post_type() );

    						endwhile; // End of the loop.
    						?>
              </div>
            </div>
          </div>
				</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
