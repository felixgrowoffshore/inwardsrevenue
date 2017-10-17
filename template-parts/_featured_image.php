<?php if ( has_post_thumbnail() ) :
  $thumbnail_id = get_post_thumbnail_id( get_the_ID() );
  $thumb_img = get_post( $thumbnail_id );
  $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
  $description = $thumb_img->post_content; ?>
    <div class="featured_image">
      <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo $alt; ?>" />
      <div class="feat-info">
        <h1><?= the_title() ?></h1>
        <p class=""><?php echo $description; ?></p>
      </div>
      <?php if(is_front_page()) : ?>
        <p class="btn-next"><a class="next-block" href="#next-block"><i class="fa fa-long-arrow-down"></i></a></p>
      <?php endif; ?>
    </div>
    <?php if(is_front_page()) : ?>
      <div id="next-block"></div>
    <?php endif; ?>
<?php endif; ?>
