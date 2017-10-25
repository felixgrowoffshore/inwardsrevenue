<div class="service-wrapper service-flex row">
	<?php
	$args = array(
	    'post_type'      => 'page',
	    'posts_per_page' => -1,
	    'post_parent'    => get_the_ID(),
	    'orderby'        => 'menu_order'
	 );


	$parent = new WP_Query( $args );

	if ( $parent->have_posts() ) : ?>

	    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
					<?php
					$background_color = get_field('background_color',get_the_ID());
					$list_description = get_field('list_description',get_the_ID());
					$list_contents = get_field('list_contents',get_the_ID());
					?>
					<div class="col-md-3 col-sm-6 col-xs-12 irc-col colours <?= $background_color ?>">
						<h2><?php the_title(); ?></h2>
						<?= $list_description ?>

						<div class="">
							<?php if($list_contents) :?>
							<ul class="irc-profile">
								<?php foreach ($list_contents as $key => $list) { ?>
									<li><i class="fa fa-check" aria-hidden="true"></i><?= $list['content'] ?></li>
								<?php } ?>
							</ul>
							<?php endif;?>
						</div>

						<div class="service-links">
							<a class="btn" href="#">SIGN UP</a>
							<a class="btn" href="<?php the_permalink(); ?>">FIND OUT MORE</a>
						</div>
					</div>

	    <?php endwhile; ?>

	<?php endif; wp_reset_query(); ?>

</div>
<div class="service-wrapper row">
	<div class="col-md-12 colours blue-green info-row">
		<div class="col-md-4 ">
			<h2>ACTIONS NOT WORDS</h2>
		</div>
		<div class="col-md-8">
			<p>Recruiting sales people is sometimes painful and you shouldn't worry as we can help make it  a lot easier. The difference between getting it wrong or right is often the difference between your success and failure in your own role. Our proven consistent methodlogy coupled with our comfort in sharing the risk of hiring with you means you can be fully assured. Call us to find out how we can making sales hiring easier for you.</p>
		</div>

	</div>
</div>
