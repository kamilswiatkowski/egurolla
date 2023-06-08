<?php

namespace TDS;

function add_image_sizes( $sizes ) {
	$sizes[] = 'article-full_hd';

	return $sizes;
}

add_filter( 'algolia_post_images_sizes', 'TDS\add_image_sizes' );


function add_custom_attributes( $attributes, $post ) {

	// Advice subcategories

	$terms = get_the_category( $post->ID );

	foreach ( $terms as $term ) {
		if ( $term->parent !== 0 ) {
			if ( get_term_by( 'id', $term->parent, $term->taxonomy )->slug === 'advice' ) {
				$advice = $term->name;
			}
		}
	}

	$attributes[ 'advice_type' ] = $advice;

	// Color class adding

	foreach ( $terms as $term ) {
		$class = $term->slug;
		if ( $term->parent !== 0 ) {
			 $class .= ' ' .get_term_by( 'id', $term->parent, $term->taxonomy )->slug;
		}
	}

	$attributes['class'] = $class;

	// Time reading

	$attributes['reading_time'] = estimated_reading_time( null, $post->post_content );


	// Post year

	$attributes[ 'year' ] = get_post_time( 'Y', false, $post );



	return $attributes;
}


add_filter( 'algolia_searchable_post_shared_attributes', 'TDS\add_custom_attributes', 10, 2 );

function custom_posts_index_settings( $settings ) {
	$settings[ 'attributesForFaceting' ][] = 'year';
	$settings[ 'attributesForFaceting' ][] = 'advice_type';

	return $settings;
}

add_filter( 'algolia_searchable_posts_index_settings', 'TDS\custom_posts_index_settings' );

function exclude_post_types( $should_index, $post ) {
	$excluded_post_types = array( 'page' );
	if ( false === $should_index ) {
		return false;
	}

	return ! in_array( $post->post_type, $excluded_post_types, true );
}

add_filter( 'algolia_should_index_searchable_post', 'TDS\exclude_post_types', 10, 2 );