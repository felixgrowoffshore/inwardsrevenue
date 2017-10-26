<?php if ( has_post_thumbnail() ) :
  $thumbnail_id = get_post_thumbnail_id( get_the_ID() );
  //$thumb_img = get_post( $thumbnail_id );
  $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
  //$description = $thumb_img->post_content; ?>
  <div class="featured_image" style="background-image:url('<?php the_post_thumbnail_url('full'); ?>');">
    <?php
    $colour = get_field('colour');
    $desc = '';
    while ( have_posts() ) : the_post();
     if( '' !== get_post()->post_content ) :
       $desc = get_the_content();
     endif;
    endwhile;
    $sec_feat = get_field('secondary_featured_image');
    $title = (get_field('title') ? get_field('title') : get_the_title());
    $description = (get_field('description') ? get_field('description') : $desc);
    if ( is_singular() ) :
      $description = get_field('sub_heading');
    endif;
    ?>

    <div class="feat-info colours <?=$colour?>">

      <div class="title <?=$colour?>" style="background-image:url('<?=$sec_feat['url']?>');">
        <h1><?= $title; ?></h1>
      </div>
      <div class="desc">
        <?= $description ?>
      </div>
    </div>
  </div>

<?php else :

  if ( is_singular() ) :
    ?>
    <div class="featured_image">
      <?php
      $title = (get_field('title') ? get_field('title') : get_the_title());
      $description = get_field('sub_heading');
      $colour = get_field('colour');
      if(!$colour){
        $colour = 'yellow';
      }
      ?>
      <div class="feat-info colours <?= $colour ?>">
        <div class="title">
          <h1><?= $title; ?></h1>
        </div>
        <div class="desc">
          <?= $description ?>
        </div>
      </div>
    </div>
    <?php
  endif;

endif; ?>
<div id="next-block"></div>
