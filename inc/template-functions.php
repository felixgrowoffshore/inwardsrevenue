<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package CAP_Theme
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


// custom post for news
add_action('init', 'news_events');
function news_events() {
  $labels = array(
    'name' => _x('News and events', 'post type general name'),
    'singular_name' => _x('News and events', 'post type singular name'),
    'add_new' => _x('Add New', 'rep'),
    'add_new_item' => __('Add News and events'),
    'edit_item' => __('Edit News and events'),
    'new_item' => __('New News and events'),
    'view_item' => __('View News and events'),
    'search_items' => __('Search News and events'),
    'not_found' =>  __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'menu_icon' => 'dashicons-format-status',
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title', 'editor', 'thumbnail', 'page-attributes')
    );
  register_post_type( 'news_events' , $args );
}

// custom post for resources
add_action('init', 'resources_document');
function resources_document() {
  $labels = array(
    'name' => _x('Resources Document', 'post type general name'),
    'singular_name' => _x('Resources Document', 'post type singular name'),
    'add_new' => _x('Add New', 'rep'),
    'add_new_item' => __('Add Resources Document'),
    'edit_item' => __('Edit Resources Document'),
    'new_item' => __('New Resources Document'),
    'view_item' => __('View Resources Document'),
    'search_items' => __('Search Resources Document'),
    'not_found' =>  __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'menu_icon' => 'dashicons-portfolio',
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title', 'editor', 'thumbnail', 'page-attributes')
    );
  register_post_type( 'resources_document' , $args );
}

add_action('init', 'resources_links');
function resources_links() {
  $labels = array(
    'name' => _x('Resources Links', 'post type general name'),
    'singular_name' => _x('Resources Links', 'post type singular name'),
    'add_new' => _x('Add New', 'rep'),
    'add_new_item' => __('Add Resources Links'),
    'edit_item' => __('Edit Resources Links'),
    'new_item' => __('New Resources Links'),
    'view_item' => __('View Resources Links'),
    'search_items' => __('Search Resources Links'),
    'not_found' =>  __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'menu_icon' => 'dashicons-portfolio',
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title', 'editor', 'thumbnail', 'page-attributes')
    );
  register_post_type( 'resources_links' , $args );
}

// add tags to custom post
add_action( 'init', 'gp_register_taxonomy_for_object_type' );
function gp_register_taxonomy_for_object_type() {
	register_taxonomy_for_object_type( 'post_tag', 'resources_document' );
	register_taxonomy_for_object_type( 'post_tag', 'resources_links' );
  register_taxonomy_for_object_type( 'post_tag', 'news_events' );
};
// add category option
add_action( 'init', 'sk_add_category_taxonomy_to_custom_post' );
function sk_add_category_taxonomy_to_custom_post() {
	register_taxonomy_for_object_type( 'category', 'resources_links' );
	// register_taxonomy_for_object_type( 'category', 'resources_document' );
}
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


// constant links
DEFINE('THEMEPATH', get_template_directory().'/');
DEFINE('IMAGEPATH', get_template_directory().'/images/');
DEFINE('JAVASCRIPTPATH', get_template_directory().'/js/');
DEFINE('TEMPLATEPATH', get_template_directory().'/template-parts/');
