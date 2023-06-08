<?php 
namespace TDS;

function register_nav() {
	register_nav_menus( array(
		'landing' => esc_html__( 'Landing pages menu', 'namespace' ), //TODO: Fill in
	) );

}

add_action( 'after_setup_theme', 'TDS\register_nav' );