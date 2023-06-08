<?php
namespace TDS;
function get_file_size( $file ){
	$bytes = filesize($file);
	if ($bytes === 0) {
		return 0;	
	}
	$s = array('b', 'Kb', 'Mb', 'Gb');
	$e = floor(log($bytes)/log(1024));
	return sprintf('%d '.$s[$e], ($bytes/pow(1024, floor($e))));
}
