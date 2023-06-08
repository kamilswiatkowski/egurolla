<?php
function clean($string) {
	$string = str_replace(' ', '', $string); // Replaces all spaces with hyphens.
	$string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
	$string = preg_replace( "/\r|\n/", "", $string ); // Removes all newline and tabs
	return preg_replace('/-+/', '', $string); // Replaces multiple hyphens with single one.
}
