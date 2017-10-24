<?php
/**
 * Template Name: Blog
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="feat-wrap">
			<?php get_template_part( 'template-parts/_featured_image_default' ); ?>
		</div>
		<div class="page-content">
			<?php get_template_part( 'template-parts/content','blog' ); ?>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->
<?php

//get_sidebar();
get_footer();
