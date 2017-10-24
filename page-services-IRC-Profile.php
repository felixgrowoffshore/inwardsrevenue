<?php
/**
 * Template Name: IRC-Profile
 */

?>
<?php get_header(); ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="feat-wrap">
			<?php get_template_part( 'template-parts/_featured_image' ); ?>
			</div>
			<div class="profile-content">
				<?php get_template_part( 'template-parts/ircprofile', 'content' ); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
?>
