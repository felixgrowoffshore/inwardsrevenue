<?php
/**
 * Template Name: IRC-Engage
 */

?>
<?php get_header(); ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="feat-wrap">
			<?php get_template_part( 'template-parts/_featured_image' ); ?>
			</div>
			<div class="engage-content">
				<?php get_template_part( 'template-parts/irc-engage', 'content' ); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
?>
