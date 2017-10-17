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


// constant links
DEFINE('THEMEPATH', get_template_directory().'/');
DEFINE('IMAGEPATH', get_template_directory_uri().'/images/');
DEFINE('JAVASCRIPTPATH', get_template_directory().'/js/');
DEFINE('TEMPLATEPATH', get_template_directory().'/template-parts/');
