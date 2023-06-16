<?php

namespace TDS;
$version = \file_get_contents( locate_template( 'version.php' ) );
define( 'TD_nonce_hash', 'hash' ); //TODO: Fill in

function assets_load() {
	global $post_type;
	global $version;
	if ( is_admin() ) {
		return;
	}
	global $is_local;
	$min = ! $is_local ? '.min' : '';
	$uri = get_template_directory_uri();
	wp_enqueue_script( 'jquery' );
	wp_enqueue_style( 'main-styles', $uri . '/dist/style.css', [], $version );

	wp_enqueue_script( 'main-js', $uri . "/dist/main.js", [], $version, true );

	/* Enqueue comment-reply script if needed */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	$settings                = [];
	$settings[ 'template' ]  = basename( get_page_template() );
	$settings[ 'themeuri' ]  = $uri;
	$settings[ 'post_type' ] = get_post_type();
	$settings[ 'ajax_url' ]  = esc_url( wp_nonce_url( admin_url( 'admin-ajax.php' ), TD_nonce_hash, 'ajax_nonce' ) );

	$settings[ 'uri' ]    = get_stylesheet_directory_uri();
	$settings[ 'cat' ]    = get_query_var( 'cat' );
	$settings[ 'tag' ]    = get_query_var( 'tag' );
	$settings[ 's' ]      = get_query_var( 's' );
	$settings[ 'author' ] = get_query_var( 'author' );
	wp_localize_script( 'main-js', 'settings', $settings );

	//	wp_deregister_script( 'underscore' );
	//	wp_deregister_script('jquery');
}

add_action( 'wp_enqueue_scripts', 'TDS\assets_load' );


function td_admin() {
	global $version;
	$uri = get_template_directory_uri();
	//	wp_enqueue_style( 'admin-styles', $uri.'/dist/css/wp-admin.min.css', $version );
//		wp_enqueue_script('admin-js', get_stylesheet_directory_uri().'/wp-admin.js', [], $version, true);
}

add_action( 'login_head', 'TDS\td_admin' );

add_action( 'admin_enqueue_scripts', 'TDS\td_admin' );

add_theme_support( 'post-thumbnails' );
