<?php
/**
 * Template Name: Clients
 */

?>
<?php get_header(); ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="home-feat-wrap">
			<?php get_template_part( 'template-parts/_featured_image' ); ?>
				<?php get_template_part( 'template-parts/content','clients' ); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->



<?php
//get_sidebar();
get_footer();
?>
