<?php
/**
 * Template Name: Candidates Page
 */

?>
<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="feat-wrap">
				<?php get_template_part( 'template-parts/_featured_image_default' ); ?>
			</div>
			<div class="candidates-content">
				<?php get_template_part( 'template-parts/candidates', 'content' ); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->



<?php
//get_sidebar();
get_footer();
?>
