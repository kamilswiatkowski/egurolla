<?php
namespace TDS;
/**
 * Estimate time required to read the article
 *
 * @return string
 */
function estimated_reading_time( $id = null, $words = false ) {

	if ( ! $words ) {
		$post = get_post($id);
	}

	if ( ! $words ) {
		$words = str_word_count( strip_tags( $post->post_content ) );
	} else {
		$words = str_word_count( strip_tags( $words) );
	}
	$minutes = floor( $words / 120 );

	$minutes = ($minutes == 0) ? '1' : $minutes;

	return $minutes.' min';

}