<?php 
namespace TDS;

function register_nav() {
	register_nav_menus( array(
		'primary' => esc_html__( 'Main menu', 'namespace' ), //TODO: Fill in
	) );

}

add_action( 'after_setup_theme', 'TDS\register_nav' );