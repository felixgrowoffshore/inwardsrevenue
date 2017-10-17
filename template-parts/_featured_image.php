<?php if ( has_post_thumbnail() ) :
  $thumbnail_id = get_post_thumbnail_id( get_the_ID() );
  //$thumb_img = get_post( $thumbnail_id );
  $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
  //$description = $thumb_img->post_content; ?>
    <div class="featured_image" style="background-image:url('<?php the_post_thumbnail_url('full'); ?>');">

      <div class="feat-info">
        <h1><?= the_title(); ?></h1>
        <?php
        // TO SHOW THE PAGE CONTENTS
        while ( have_posts() ) : the_post(); ?>
          <?php if( '' !== get_post()->post_content ) : ?>
            <?=  the_content(); ?>
          <?php endif;
        endwhile; ?>

      </div>
      <?php if(is_front_page()) : ?>
        <p class="btn-next"><a class="next-block" href="#next-block"><i class="fa fa-long-arrow-down"></i></a></p>
      <?php endif; ?>
    </div>
    <?php if(is_front_page()) : ?>
      <div id="next-block"></div>
    <?php endif; ?>
<?php endif; ?>
