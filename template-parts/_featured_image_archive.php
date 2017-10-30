<?php

    $colour = get_field('colour');

    // var_dump($post);
    if(!$colour){
      $colour = 'yellow';
    }

    ?>
      <div class="featured_image">
        <div class="feat-info colours <?= $colour ?>">
          <div class="title">
            <h1>Filter By Tags</h1>
          </div>
          <div class="desc">
          </div>
        </div>
      </div>
<div id="next-block"></div>
