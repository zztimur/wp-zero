<?php
/**
 * Helper functions to work with posts.
 */

/**
 * Get a post from its name (slug)
 *
 * @param unknown $args
 */
function ZEROTHEME_find_post( $args ) {
	$query = new WP_Query();
	$args = wp_parse_args( $args, array( 'post_type' => 'post' ) );
	$args['posts_per_page'] = 1;
	$args['no_found_rows'] = true;
	$args['update_term_cache'] = false;
	$args['update_post_cache'] = false;

	$posts = $query->query( $args );

	if ( count( $posts )>0 ) {
		return $posts[0];
	}

	return false;
}



/**
 * Check if a post is an ancestor of another post.
 * Both $post and $ancestor can take a post ID, a post object, or a query string or array.
 *
 * @param unknown $post     - the descendant post
 * @param unknown $ancestor - the ancestor post
 *
 * @return boolean - true if $post is a descendant of $ancestor, false otherwiser
 */
function ZEROTHEME_is_post_ancestor( $post, $ancestor ) {
	$ids = get_post_ancestors( $post );
	$ancestor = get_post( $ancestor );

	foreach( $ids as $id ) {
		if( $ancestor->ID == $id ) {
			return true;
		}
	}

	return false;
}



/**
 * Test if the current page is set to a certain post type.
 *
 * @param unknown s string - pass as arguments the name of the post types to test against, if none, then it test if a post type is set in general
 */
function ZEROTHEME_is_post_type() {
	$types = func_get_args();
	if ( empty( $types ) ) {
		return get_post_type() !== false;
	} else {
		return in_array( get_post_type(), (array) $types );
	}
}
