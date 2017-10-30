<div class="service-wrapper service-flex clearfix">
	<?php
	$services = get_field('services');
	if($services) :
		foreach ($services as $key => $service) { ?>
			<div class="col-md-3 col-sm-6 col-xs-12 irc-col colours <?= $service['background_color'] ?>">
				<h2><?= $service['service_title'] ?></h2>
				<div class="service-desc"><?= $service['list_description']; ?></div>

				<div class="">
					<?php if($service['list_contents']) :?>
					<ul class="irc-profile">
						<?php foreach ($service['list_contents'] as $key => $list) { ?>
							<li><i class="fa fa-check" aria-hidden="true"></i><?= $list['content'] ?></li>
						<?php } ?>
					</ul>
					<?php endif;?>
				</div>
				<div class="service-links">
					<a class="btn" href="#">SIGN UP</a>
					<a class="btn" href="<?= $service['service_link'] ?>">FIND OUT MORE</a>
				</div>
			</div>
		<?php }
	endif; ?>

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
