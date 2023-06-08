<?php
namespace TDS\hooks;

function add_mce_button() {
	if ( !current_user_can( 'edit_posts' ) &&  !current_user_can( 'edit_pages' ) ) {
	   return;
   }

   if ( 'true' == get_user_option( 'rich_editing' ) ) {
	   add_filter('mce_external_plugins', 'TDS\hooks\add_mce_plugin');
	   add_filter( 'mce_buttons', 'TDS\hooks\register_mce_button' );
   }
}
add_action('admin_head', 'TDS\hooks\add_mce_button');

function register_mce_button( $buttons ) {
	array_push( $buttons, 'shortcodes' );
	return $buttons;
}
function add_mce_plugin($plugin_array) {
   $plugin_array['shortcodes'] = get_bloginfo('template_url').'/wp-admin.js';
   return $plugin_array;
}

//TODO: Fill in
/*
function remove_admin_bar() {
	if ( ! current_user_can( 'edit_posts' ) ) {
		show_admin_bar( false );
	}
}

add_action('after_setup_theme', 'TDS\hooks\remove_admin_bar');
*/