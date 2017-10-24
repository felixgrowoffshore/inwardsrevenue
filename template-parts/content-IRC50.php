<div class="irc-con">

	<!-- <div class="wrapper irc-wrap8">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>HISTORICAL</h2>
				<p>Our process starts where most recruiters end, with a historical review of a candidates CV and the "history" of their career. Of course we need to know what they have done and the past doesn't always equal the future.</p>
			</div>
		</div>
	</div>
	</div>

	<hr> -->
	<div class="animate-this">
		<?php
		$irc_50 = get_field('page_contents');
		if($irc_50 ) :
		foreach ($irc_50 as $key => $irc) { ?>
			<div class="wrapper irc-wrap1">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2><?= $irc['name'] ?></h2>
							<?= $irc['description'] ?>
						</div>
					</div>
				</div>
			</div>
		<?php } endif; ?>
	</div>

	<div class="wrapper2 irc-wrap9">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><?= the_title(); ?></h2>
				<?php
				while ( have_posts() ) : the_post();
		     if( '' !== get_post()->post_content ) :
		       the_content();
		     endif;
		    endwhile;
				?>
		</div>
	</div>
	</div>


</div>
