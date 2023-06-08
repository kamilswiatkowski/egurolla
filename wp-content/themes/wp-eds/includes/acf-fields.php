<?php
namespace TDS\acf;

/*
Usage:
load_file('path/to/file_without_extension', 'type of folder');
example: load_file('home/home-group', 'page'); loads /acf-page/home/home-group.php
That file should contain either:
exported function call from acf export tool
or
plain assoc array with declared fields

id's are automatically generated
if name is not specified, name will be lowercase label with "-" dashes instead of spaces
*/
add_filter( 'acf/settings/remove_wp_meta_box', '__return_true' );

function register_fields() {
	load_files( '*', 'options' );
	load_files( '*', 'page' );
}

add_action( 'acf/init', 'TDS\acf\register_fields' );
// ----------- Loading functions ---------
function _load_fields( $array ) {
	if ( array_key_exists( 'fields', $array ) ) {
		register_field_group( $array ); // the array is a group
	} else {
		if ( array_key_exists( 'type', $array ) ) {
			acf_add_local_field( $array ); // array is a single field
		} else {
			foreach ( $array as $fields ) {
				_load_fields( $fields );
			}
		}
	}
}

function load_files( $glob, $type ) {
	foreach ( glob( __DIR__ . "/acf-$type/$glob" ) as $target_dir ) {
		$file = require_once  $target_dir ;
		if ( gettype( $file ) !== 'array' ) {
			return 0;
		}
		$file = _add_ids( $file );
		_load_fields( $file );
	}
}

function load_file( $file, $type = 'tabs' ) {
	$base_dir = __DIR__ . '/acf-' . $type;
	$target_dir = $base_dir . '/' . $file . '.php';
	if ( ! (function_exists( 'register_field_group' ) && function_exists( 'acf_add_local_field' ) && file_exists( $target_dir )) ) {
		return trigger_error( $target_dir . ' doesn\'exist or acf is disabled', E_USER_NOTICE );
	}
	$file = require_once  $target_dir ;
	if ( gettype( $file ) !== 'array' ) {
		return 0;
	}
	$file = _add_ids( $file );
	_load_fields( $file );
}

function _add_ids( $val ) {
	if ( is_array( $val ) ) {
		if ( array_key_exists( 'type', $val ) ) {
			if ( $val['type'] !== 'tab' && ! array_key_exists( 'name', $val ) ) {
				$name = sanitize_key( strtolower( str_replace( ' ', '-', $val['label'] ) ) );
				$val['name'] = $name;
				$val['key'] = 'field_' . $name;
			} elseif ( array_key_exists( 'name', $val ) && array_key_exists( 'type', $val ) ) {
				$val['key'] = 'field_' . $val['name'] . '-' . $val['type'];
			} elseif ( array_key_exists( 'label', $val ) && array_key_exists( 'type', $val ) ) {
				$name = sanitize_key( strtolower( str_replace( ' ', '-', $val['label'] ) ) );
				$val['key'] = 'field_' . $name . '-' . $val['type'];
			}
		} elseif ( array_key_exists( 'location', $val ) ) {
			$val['key'] = sanitize_key( strtolower( str_replace( ' ', '-', $val['title'] ) ) );
		}
		foreach ( $val as $key => $val2 ) {
			$val[ $key ] = _add_ids( $val2 );
		}
	}
	return $val;
}
