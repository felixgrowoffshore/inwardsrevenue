<?php
$page_contents = get_field("page_contents");
$sub_links = get_field("sub_links");
if($page_contents) :
	foreach ($page_contents as $key => $page_content) { ?>
		<div class="candidates-con colours <?= $page_content['background_colour'] ?>">
			<div class="container candidates-cont1">

				<div class="col-md-4">
					<h2><?= $page_content['title'] ?></h2>
					<p><?= $page_content['caption'] ?></p>
				</div>
				<div class="col-md-8 col-sm-12 col-xs-12 candidate-p">
					<?= $page_content['description'] ?>
				</div>
				<?php if($page_content['find_out_more_link']) : ?>
					<div>
						<a class="btn" href="irc50-a-proven-process/">FIND OUT MORE</a>
					</div>
				<?php endif; ?>
			</div>
		</div>
	<?php }
endif; ?>


<?php if($sub_links) :
	foreach ($sub_links as $key => $sub_link) {?>
		<div class="wrapper candidates-wrapper blue colours">
			<div class="container candidates-con6">
				<div class="row candidates-row6">
					<h5 class="col-md-6 offset-md-3"><?= $sub_link['description'] ?></h5>
					<a class="btn col-md-3" href="<?= $sub_link['page_link'] ?>"><?= $sub_link['link_text'] ?></a>
				</div>
			</div>
		</div>
	<?php }

endif; ?>
