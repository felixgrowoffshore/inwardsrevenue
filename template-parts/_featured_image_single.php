<?php if ( has_post_thumbnail() ) :  ?>
  <div class="featured_image" style="background-image:url('<?php the_post_thumbnail_url('full'); ?>');">
<?php else : ?>
  <div class="featured_image">
<?php endif; ?>
    <?php
    $colour = get_field('colour');
    $title = (get_field('title') ? get_field('title') : get_the_title());
    $description = (get_field('description') ? get_field('description') : $desc);

    ?>
    <div class="feat-info colours <?=$colour?>">

      <div class="title <?=$colour?>" style="background-image:url('<?=$sec_feat['url']?>');">
        <h1><?= $title; ?></h1>
      </div>
      <div class="desc">
        <?= $description; ?>
      </div>
    </div>
  </div>

<div id="next-block"></div>
