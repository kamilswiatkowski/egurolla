<?php
namespace TDS;
function get_excerpt($content, $char_limit){
	if ( strlen($content) < $char_limit ) {
		return $content;
	}
	$excerpt = $content;
	$excerpt = preg_replace(" ([.*?])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, $char_limit);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	// $excerpt = trim(preg_replace( '/s+/', ' ', $excerpt));
	$excerpt = $excerpt.'...';
	return $excerpt;
}
?>
