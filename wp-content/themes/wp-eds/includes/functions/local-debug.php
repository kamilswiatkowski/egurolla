<?php

define("WHITELIST", serialize(array(
	'127.0.0.1',
	'::1',
	'localhost',
	'localhost:3000',
	'egurolla'
)) );

function var_dymp(){
	if(in_array($_SERVER['SERVER_NAME'], unserialize(WHITELIST))){
		call_user_func_array('var_dump', func_get_args());
	}
}

function deb() {
	call_user_func_array('var_dymp', func_get_args());
}



//for kint debug
if (!function_exists("d")){
	function d(){
		return false;
	}
}

global $is_local;

$is_local = in_array($_SERVER['SERVER_NAME'], unserialize(WHITELIST));

?>
