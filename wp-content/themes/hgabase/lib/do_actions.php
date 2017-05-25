<?php
/*
|--------------------------------------------------------------------------
| Do_Actions.php
|--------------------------------------------------------------------------
|
| Any theme-related do_action functions should be added into this document
| because they sit outside of the core purpose of the functions.php file.
|
| Shortcodes should be added into a plugin as they sit outside of accepted
| theme standards for coding WordPress themes
| 
| This document should be maintained in accordance with phpDocumentor syntax
| 
| @package WordPress
| @subpackage hga-digital
| @since 1.0.0
*/
/**
 * 	Action to return the URL of a post/page featured image
 *
 * 	@since hga-digital 1.0.0
 */
function get_post_thumbnail_url() {
	
	global $post;
	
	echo ($post->ID !== '') ? wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) : false;
	
}
add_action( 'thumbnail_url', 'get_post_thumbnail_url' );


/**
 * @ignore
 * 	Example of how to start a custom do_action
 *
 * This basic layout should be used as a template/reference
 * for creating other custom do_actions
 * 
 */
function custom_doaction_function() {
	
	// do something here
		
}
add_action('action_name', 'custom_doaction_function');