<?php namespace TDS;

function get_partial($location) {
	//usage: include(TDS\get_partial('hero')), hero.php can be inside a folder
	
	$location = str_replace('.php', '', $location);
	$template = glob(get_template_directory() . "/partials/$location.php");
	if (empty($template)) {
		 $template = glob(get_template_directory() . "/partials/**/$location.php");
		if (empty($template)) {
			return d("partial not found: $location");
		}
	}
	foreach ($template as $path){
		return $path;
	}
}