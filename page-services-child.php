<?php
/**
 * Template Name: Services Child Page
 */

?>
<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="feat-wrap">
			<?php get_template_part( 'template-parts/_featured_image_default' ); ?>
			</div>
			<div class="services-content">
				<?php get_template_part( 'template-parts/services', 'child' ); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
?>
