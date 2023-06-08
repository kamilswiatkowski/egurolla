<?php

namespace TDS\ajax;

use WP_Query;

function check_nonce( $nonce ) {
	if ( ! wp_verify_nonce( $nonce, TD_nonce_hash ) ) {
		echo 'Please log in first or try refreshing the site';
		exit();
	}
}

function call_for_posts() {
	$posts_per_page = 6;
	$args           = [
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'posts_per_page' => $posts_per_page,
		'offset'         => $posts_per_page * ( $_POST['paged'] - 1 ),
		'hide_empty' => true,
		'order'=>'desc',

	];
	if ( $_POST['category'] ) {
		$category = [
			'cat' => intval($_POST['category']),
		];
		$args = array_merge($args, $category);
	}
	$query  = new WP_Query( $args );
	$output = '';

	if ( $query->found_posts ) {
		$posts  = $query->posts;
		$output .= '<div class="row">';
		foreach ( $posts as $item ) {
			$output .= '<div class="col-12 col-md-4">';
			$output .= show_post( $item );
			$output .= '</div>';
		}
		$output .= '</div>';
	}
	echo json_encode(
		[
			'output' => $output,
			'query'=> $query,
          'max_pages' => $query->max_num_pages
		]
	);
	die();
}

add_action( 'wp_ajax_nopriv_call_for_posts', 'TDS\ajax\call_for_posts' );
add_action( 'wp_ajax_call_for_posts', 'TDS\ajax\call_for_posts' );
