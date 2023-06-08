<?php
function custom_sidebar() {

	// Not sure if sidebar will be needed with this project
	// register_sidebar( array(
	// 	'name'          => esc_html__( 'Sidebar', 'tds' ),
	// 	'id'            => 'sidebar-1',
	// 	'description'   => esc_html__( 'Add widgets here.', 'tds' ),
	// 	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</section>',
	// 	'before_title'  => '<h4 class="widget-title">',
	// 	'after_title'   => '</h4>',
	// ) );
}
add_action( 'widgets_init', 'custom_sidebar' );
