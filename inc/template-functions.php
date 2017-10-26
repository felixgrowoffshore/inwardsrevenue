<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package inward-revenue
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function cap_theme_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'cap_theme_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function cap_theme_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'cap_theme_pingback_header' );


// excerpt custom
function getExcerpt($str, $startPos=0, $maxLength=100) {
	// print_r($str);
	if(strlen($str) > $maxLength) {
		$excerpt   = substr($str, $startPos, $maxLength-3);
		$lastSpace = strrpos($excerpt, ' ');
		$excerpt   = substr($excerpt, 0, $lastSpace);
		$excerpt  .= '...';
	} else {
		$excerpt = $str;
	}
	return "<p>".$excerpt."</p>";
}

// get list of resources links
function get_resources_links($slug){
	$q = array(
	    'post_type'      => 'resources_links',
	    'posts_per_page' => -1,
			'category_name'    => $slug,
	    'post_status'    => 'publish',
			'orderby'          => 'date',
			'order'            => 'DESC',
	);

	$res = get_posts($q);

	return $res;
}


function hex2rgba($color, $opacity = false) {

	$default = 'rgb(0,0,0)';

	//Return default if no color provided
	if(empty($color))
          return $default;

	//Sanitize $color if "#" is provided
        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        }

        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        }

        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);

        //Check if opacity is set(rgba or rgb)
        if($opacity){
        	if(abs($opacity) > 1)
        		$opacity = 1.0;
        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
        	$output = 'rgb('.implode(",",$rgb).')';
        }

        //Return rgb(a) color string
        return $output;
}
function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   *
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged, $wp_rewrite;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /**
   * We construct the pagination arguments to enter into our paginate_links
   * function.
   */
  $pagination_args = array(
    'base'            => @add_query_arg('page','%#%'),
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => true,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('<'),
    'next_text'       => __('>'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);
	//
  // if ($paginate_links) {
  //   echo "<nav class='custom-pagination'>";
  //     echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
			if ( $paged == 1) echo '<span class="page-numbers disabled"><a href="#" class="disabled">'.$pagination_args['prev_text'].'</a></span>';
      echo $paginate_links;
  //   echo "</nav>";
  // }
	// if ( $wp_rewrite->using_permalinks() )
  //           $pagination_args['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
  //   if ( !empty( $wp_query->query_vars['s'] ) )
  //           $pagination_args['add_args'] = array( 's' => get_query_var( 's' ) );
  //   $pages = paginate_links( $pagination_args );
	// 	var_dump($pages);
  //   echo '<ul>';
  //   if ( $paged == 1) echo '<li><a href="#" class="disabled">&laquo;</a></li>';
  //   foreach ($pages as $page) :
  //       echo '<li>'.$page.'</li>';
  //   endforeach;
  //   if ( $paged == $wp_query->max_num_pages ) echo '<li><a href="#" class="disabled">&raquo;</a></li>';
  //   echo '</ul>';
}

// constant links
DEFINE('THEMEPATH', get_template_directory().'/');
DEFINE('IMAGEPATH', get_template_directory_uri().'/images/');
DEFINE('JAVASCRIPTPATH', get_template_directory().'/js/');
DEFINE('TEMPLATEPATH', get_template_directory().'/template-parts/');
