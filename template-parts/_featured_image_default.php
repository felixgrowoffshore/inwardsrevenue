<?php if ( has_post_thumbnail() ) :
  $thumbnail_id = get_post_thumbnail_id( get_the_ID() );
  //$thumb_img = get_post( $thumbnail_id );
  $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
  //$description = $thumb_img->post_content; ?>
  <div class="featured_image" style="background-image:url('<?php the_post_thumbnail_url('full'); ?>');">
    <?php
    $colour = get_field('colour');
    // $rgb = hex2rgba($colour,0.7);
    // TO SHOW THE PAGE CONTENTS
    $desc = '';
    while ( have_posts() ) : the_post();
     if( '' !== get_post()->post_content ) :
       $desc = get_the_content();
     endif;
    endwhile;
    $sec_feat = get_field('secondary_featured_image');
    $title = (get_field('title') ? get_field('title') : get_the_title());
    $description = (get_field('description') ? get_field('description') : $desc);
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
  <div id="next-block"></div>
<?php endif; ?>
