
<div class="container-fluid">
<div class="row">
	<div class="col-md-9">

		<?php
		  // set up or arguments for our custom query
		  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
		  $query_args = array(
		    'post_type' => 'post',
		    'posts_per_page' => 2,
		    'paged' => $paged
		  );
		  // create a new instance of WP_Query
		  $the_query = new WP_Query( $query_args );
		?>

		<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
			<div class="row blog-row colours light-yellow">
				<div class="col-md-4 blog-img">
					<?php
					if ( has_post_thumbnail() ) {
					    the_post_thumbnail();
					}
					?>
				</div>
				<div class="col-md-8 blog-info">
					<h3><?php the_title(); ?></h3>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>">BY: <?php the_author(); ?> | <?php echo get_the_date(); ?></a>
					<a class="btn col-md-3" href="<?php the_permalink(); ?>">READ MORE</a>
				</div>
			</div>
		<?php endwhile; ?>

		<!-- pagination here -->
    <?php

      if (function_exists(custom_pagination)) {
        custom_pagination($the_query->max_num_pages,"",$paged);
      }
    ?>

		<?php else: ?>
		  <div class="row blog-row colours light-yellow">
				<div class="col-md-12 blog-info">
			    <h1>Sorry...</h1>
			    <p><?php _e('Sorry, no blog post yet.'); ?></p>
				</div>
			</div>
		<?php endif; ?>

		<div class="text-center paginate">
			<ul class="pagination">
				<li><a href="#"><</a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">></a></li>
			</ul>
		</div>
	</div>
	<div class="col-md-3 colours orange">
	   <?php get_sidebar(); ?>
  </div>
</div>
</div>
