<?php
/*
|--------------------------------------------------------------------------
| Custom_Functions.php
|--------------------------------------------------------------------------
|
| Provides extra functionality to the website powered by themes that are
| outside of the organic WordPress scope.  These functions are essential to
| the look of the wesite, but importantly, do not cross into plugin-territory.
| 
| This document should be maintained in accordance with phpDocumentor syntax
| 
| @package WordPress
| @subpackage hga-digital
| @since 1.0.0
*/

/**
 * 	Add in Page schema type for structured data mark up
 *
 * 	@since hga-digital 1.0.0
 */
function webpage_schema() {
	
	/**
	 * Build the elements
	 *
	 * @param array 	$post_types			An array of post types
	 * @param array 	$profile_pt			An array of the staff post type
	 * @param int		$about_page			The ID of the about page
	 * @param int		$contact_page		The ID of the contact page
	 */
	$post_types 		= array();
	$profile_pt 		= array();
	$about_page		= 000;
	$contact_page	= 000;
	
	// Detail the schema url
	$schema_url = 'http://schema.org/';
	
	/* 	Webpage type
	 *
	 * @since 1.0.0
	 */
	$page_type = 'WebPage';

	/* 	Contact Page itemtype
	 * is_page should contain the post ID of the contact page.
	 *
	 * @since 1.0.0
	 */
	if( is_page( $contact_page ) ) {
		$page_type = 'ContactPage';
	}
	
	/* 	About Page itemtype
	 *
	 * @since 1.0.0
	 */
	elseif( is_page( $about_page ) ) {
		$page_type = 'AboutPage';
	}
	
	/* 	Item Page type
	 *
	 * @since 1.0.0
	 */
	elseif( is_singular( $post_types )  ) {
		$page_type = 'ItemPage';
	}
	
	/* 	Item Page type
	 *
	 * @since 1.0.0
	 */
	elseif( is_singular( $profile_pt ) ) {
		$page_type = 'ProfilePage';
	}
	
	/* 	Search Page type
	 *
	 * @since 1.0.0
	 */
	elseif( is_search() ) {
		$page_type = 'SearchResultsPage';
	}
		
	// Build the output
	echo 'itemscope itemtype="' . $schema_url . $page_type . '"';
}


/**
 * 	Change the excerpt ending to an ellipses
 *
 * 	@since hga-digital 1.0.0
 */
function prettier_excerpt_ending( $more ) {
	
	return '...';
	
}
add_filter('excerpt_more', 'prettier_excerpt_ending');


/**
 * 	Correct post parent page for custom post types
 *
 * Custom post types default to using the page for
 * posts as their parent - which isn't always the
 * case, so we use this function to correct that.
 *
 * 	@since hga-digital 1.0.0
 */
function add_class_to_wp_nav_menu($classes) {
	
	if( !function_exists('remove_parent_classes') ) {
		/*
		 * This function is only relevant to removing parent classes
		 * and is only called from within add_class_to_wp_nav_menu
		 * function - so it's been nested.
		 */
		function remove_parent_classes($class) {
			
			// check for current page classes, return false if they exist.
			return ($class == 'current_page_item' || $class == 'current_page_parent' || $class == 'current_page_ancestor'  || $class == 'current-menu-item') ? false : true;
			
		}
		
	}
	
	switch (get_post_type()) {
	  	// cpt slug
		case 'post_type_name_here':
			// remove parent class' if defined
			$classes = array_filter( $classes, "remove_parent_classes" );
			// add new parent class to menu item
			if ( in_array( 'menu-item-27', $classes ) ) {
				// specify the class to add
				$classes[] = 'current_page_parent';
			}
			break;
	}
	
	return $classes;
	
}
add_filter('nav_menu_css_class', 'add_class_to_wp_nav_menu');


/**
 * 	Add custom HTML to wp_nav_menu
 *
 * The function helps in adding structured data markup
 * to wp_nav_menu menu links
 *
 * 	@since hga-digital 1.0.0
 */
function add_menu_atts( $atts, $item, $args ) {
	
	$atts['itemprop'] = 'url';
	
    return $atts;
	
}
add_filter( 'nav_menu_link_attributes', 'add_menu_atts', 10, 3 );


/**
 * 	Remove the query string
 *
 * The function helps resource caching by removing the ?ver
 * query string from CSS and JS files.
 *
 * 	@since hga-digital 1.0.0
 */
function remove_ver( $src ){
	
    return remove_query_arg( 'ver', $src );
	
}

add_filter( 'script_loader_src', 'remove_ver' );
add_filter( 'style_loader_src', 'remove_ver' );

/**
 * 	Remove classes from the post_class function
 *
 * The function helps declutter the post_class return
 * by filtering out cats and tags, thus making the website
 * lighter and more efficient whilst confirming to theme rules
 *
 * 	@since hga-digital 1.0.0
 */
function clean_up_post_class( $classes ) {
	
	// refine arrays by getting elements with a hyphen
	$tags = preg_grep('/-/i', $classes);

	// remove the refined patterns from the main array
 	$classes = array_diff( $classes, $tags );
	
	// return the lightweight version
    return $classes;
}
add_filter( 'post_class', 'clean_up_post_class' );

/**
 * This function reduces the size of the WordPress excerpt
 *
 * @since hga-digital 1.0.0
 */ 
function ep_excerpt_length($length) {
	
    return 50;
	
}
add_filter('excerpt_length', 'ep_excerpt_length');