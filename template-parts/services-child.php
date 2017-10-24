<?php
  $list = get_field('list_contents');
  $bg_color = get_field('background_color');
?>
<div class="wrapper profile-wrapper colours <?= $bg_color ?>">
	<div class="row">
  	<div class="col-md-12 profile-con">
      <?php if($list) : ?>
      <ul class="profile-list">
        <?php foreach ($list as $key => $value) { ?>
          <li><i class="fa fa-check" aria-hidden="true"></i> <?= $value['content'] ?></li>
        <?php } ?>
      </ul>
      <?php endif; ?>
  	</div>
	</div>


<div class="container button-con">
	<div class="row">
		<a class="btn profile-button" href="#">SIGN UP</a>

		<div class="col-md-12 button-list">
			<a class="btn profile-button" href="../irc-profile/">IRC PROFILE</a>
			<a class="btn profile-button" href="../irc-discover/">IRC DISCOVER</a>
			<a class="btn profile-button" href="../irc-engage/">IRC ENGAGE</a>
		</div>
	</div>
</div>
</div>
