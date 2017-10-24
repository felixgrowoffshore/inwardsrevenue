<?php
/**
 * Template Name: IRC50
 */

?>
<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="feat-wrap">
			<?php get_template_part( 'template-parts/_featured_image_default' ); ?>
			</div>
			<div class="home-content">
				<?php get_template_part( 'template-parts/content', 'IRC50' ); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
?>
