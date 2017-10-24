<?php
	$client_contents = get_field('page_contents');
	$find_more = get_field('find_out_more');
	foreach ($client_contents as $key => $client_content) {
		?>
		<div class="client-con <?= $client_content['background_color'] ?> colours">
			<div class="container">
				<div class="client-fade">
					<h3 class="col-md-1 col-sm-2 col-xs-3 number"><?= ($key + 1) ?></h3>
					<div class="col-md-2 col-sm-4 col-xs-9 scope">
						<h3><?= $client_content['name'] ?></h3>
						<p><?= $client_content['caption'] ?></p>
					</div>
				</div>
				<div class="col-md-9 col-sm-12 col-xs-12 slide-right">
					<?= $client_content['description'] ?>
				</div>
			</div>
		</div>
		<?php
	}
	foreach ($find_more as $key => $more) { ?>
		<div class="wrapper wrapper-6 <?= $more['background_color'] ?> colours">
			<div class="container client-con6">
				<div class="row client-row6">
					<h5 class="col-md-6 offset-md-3"><?= $more['info'] ?></h5>
					<a class="btn col-md-3" href="<?= $more['link'] ?>">FIND OUT MORE</a>
				</div>
			</div>
		</div>
	<?php } ?>
