<?php
/**
 * Contains helpers for working with meta meta/option data.
 *
 * @package Mantle
 */

namespace Mantle\Support\Helpers;

use Mantle\Support\Mixed_Data;
use Mantle\Support\Object_Metadata;
use Mantle\Support\Option;

/**
 * Get the value of an option from the database in a fluent and type-safe manner.
 *
 * @param string $option Option name.
 * @param mixed  $default Default value. Default is null.
 */
function option( string $option, mixed $default = null ): Option {
	return Option::of( $option, $default );
}

/**
 * Retrieve an object metadata instance for a post's meta data.
 *
 * @param int    $post_id Post ID.
 * @param string $meta_key Meta key.
 */
function post_meta( int $post_id, string $meta_key ): Object_Metadata {
	return Object_Metadata::of( 'post', $post_id, $meta_key );
}

/**
 * Retrieve an object metadata instance for a term's meta data.
 *
 * @param int    $term_id Term ID.
 * @param string $meta_key Meta key.
 */
function term_meta( int $term_id, string $meta_key ): Object_Metadata {
	return Object_Metadata::of( 'term', $term_id, $meta_key );
}

/**
 * Retrieve an object metadata instance for a user's meta data.
 *
 * @param int    $user_id User ID.
 * @param string $meta_key Meta key.
 */
function user_meta( int $user_id, string $meta_key ): Object_Metadata {
	return Object_Metadata::of( 'user', $user_id, $meta_key );
}

/**
 * Retrieve a metadata instance for a comment's meta data.
 *
 * @param int    $comment_id Comment ID.
 * @param string $meta_key Meta key.
 */
function comment_meta( int $comment_id, string $meta_key ): Object_Metadata {
	return Object_Metadata::of( 'comment', $comment_id, $meta_key );
}

/**
 * Manage and manipulate mixed data in a type-safe manner.
 *
 * @param mixed $value Value to be wrapped.
 */
function mixed( mixed $value ): Mixed_Data {
	return Mixed_Data::of( $value );
}
