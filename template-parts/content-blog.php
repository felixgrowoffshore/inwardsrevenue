
<div class="container-fluid">
<div class="row flex-display">
	<div class="col-md-9">

		<?php
		  // set up or arguments for our custom query
		  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
		  $query_args = array(
		    'post_type' => 'post',
		    'posts_per_page' => 12,
		    'paged' => $paged
		  );
		  // create a new instance of WP_Query
		  $the_query = new WP_Query( $query_args );
		?>

		<?php if ( $the_query->have_posts() ) : $counter = 0; while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
			<?php
			$counter++;
			?>
			<div class="row blog-row <?= $counter%2 == 0 ? '' : 'colours light-yellow' ?>">

					<?php if ( has_post_thumbnail() ) { ?>
						<div class="col-md-4 blog-img">
					    <?php the_post_thumbnail(); ?>
						</div>
					<?php } ?>

				<div class="col-md-<?= has_post_thumbnail() ? '8' : '12 blog-img' ?> blog-info">
					<h3><?php the_title(); ?></h3>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>">BY: <?php the_author(); ?> | <?php echo get_the_date(); ?></a>
					<a class="btn col-md-3" href="<?php the_permalink(); ?>">READ MORE</a>
				</div>
			</div>
		<?php endwhile; ?>

		<!-- pagination here -->
		<div class="text-center paginate row">
			<div class="col-sm-12">
				<?php
		      if (function_exists(custom_pagination)) {
		        custom_pagination($the_query->max_num_pages,"",$paged);
		      }
		    ?>
			</div>
		</div>


		<?php else: ?>
		  <div class="row blog-row colours light-yellow">
				<div class="col-md-12 blog-info">
			    <h1>Sorry...</h1>
			    <p><?php _e('Sorry, no blog post yet.'); ?></p>
				</div>
			</div>
		<?php endif; ?>


	</div>
	<div class="col-md-3 colours orange">
	   <?php get_sidebar(); ?>
  </div>
</div>
</div>
