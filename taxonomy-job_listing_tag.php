
<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package inward-revenue
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="feat-wrap">
				<?php get_template_part( 'template-parts/_featured_image_archive' ); ?>
			</div>
			<div class="single-job-listing">
				<div class="container">
					<div class="row">
						<div class="col-md-12">


        			<header class="page-header">
        				<?php
        					the_archive_title( '<h1 class="page-title">', '</h1>' );
        					the_archive_description( '<div class="archive-description">', '</div>' );
        				?>
        			</header><!-- .page-header -->
        			<?php
              $tag = single_tag_title("",false);
        			echo do_shortcode('[jobs_by_tag per_page="10" tag="'.$tag.'"]');
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
