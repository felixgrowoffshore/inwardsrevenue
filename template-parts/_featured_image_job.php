<?php
  if ( is_singular() ) :
    if ( has_post_thumbnail() ) :
      $thumbnail_id = get_post_thumbnail_id( get_the_ID() );
      ?><div class="featured_image" style="background-image:url('<?php the_post_thumbnail_url('full'); ?>');">
    <?php else :
      ?><div class="featured_image"><?php
    endif;

    $title = (get_field('title') ? get_field('title') : get_the_title());
    $colour = get_field('colour');
    $expected_compensation = get_field('expected_compensation');

    $post = get_post( get_the_ID() );
    // var_dump($post);
    if(!$colour){
      $colour = 'yellow';
    } ?>
        <div class="feat-info colours <?= $colour ?>">
          <div class="title">
            <h1><?= $title; ?></h1>
          </div>
          <div class="desc">
            <ul>
              <li>Fulll Time</li>
              <li>Posted: <?= get_the_date('m/d/Y') ?></li>
              <li><?= $expected_compensation ?></li>
            </ul>
          </div>
        </div>
      </div><?php
  endif;

  ?>
