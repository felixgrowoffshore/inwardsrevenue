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
    }
    $product_cats = wp_get_post_terms(get_the_ID(), 'job_listing_type');
    // var_dump($product_cats);
    $cat_str = '';
    foreach ($product_cats as $key => $product_cat) {
      // echo $product_cat->name;
      $cat_str .= $product_cat->name .', ';
    }
    $cat_str = rtrim($cat_str,', ');
    // echo $cat_str;
    // var_dump(the_terms( get_the_ID(), 'job_listing_category', '', ' / ' ));
    ?>
        <div class="feat-info colours <?= $colour ?>">
          <div class="title">
            <h1><?= $title; ?></h1>
          </div>
          <div class="desc">
            <ul>
              <?php if($cat_str) : ?><li><?= $cat_str ?></li><?php endif; ?>
              <li>Posted: <?= get_the_date('m/d/Y') ?></li>
              <?php if($expected_compensation) : ?><li><?= $expected_compensation ?></li><?php endif; ?>
            </ul>
          </div>
        </div>
      </div><?php
  endif;
  ?>
<div id="next-block"></div>
