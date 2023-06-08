<?php
namespace TDS\imgs;

$bp = json_decode(file_get_contents(get_stylesheet_directory() . '/breakpoints.json'), true);

function getBreakPoint( $breakpoint ) {
	global $bp;
	if ( array_key_exists( $breakpoint, $bp ) ) {
		return $bp[ $breakpoint ];
	} else {
		return (int) $breakpoint;
	}
}

function registerSizes() {
	$sizes = getSizes();
	foreach ( $sizes as $name => $size ) {
		foreach ( $size as $key => $resolution ) {
			add_image_size( "$name-$key", $resolution[0], $resolution[1], true );
		}
	}
}


function getImages( $size = 'full', $post_id = null, $image_provided = false ) {
	if ( empty( $post_id ) || ! is_int( $post_id ) ) {
		$post_id = get_the_ID();
	}
	
	$image_id = $image_provided ? $post_id : get_post_thumbnail_id( $post_id );
	if (!$image_provided && !has_post_thumbnail($post_id)) {
		$image_id = get_field('article-placeholder-image', 'option', false);
	}

	$sizes = getSizes();
	$src = '';
	$srcset = [];

	if ( empty( $size ) || $size === 'full' || ! array_key_exists( $size, $sizes ) ) {
		$size = 'full';
		$src = wp_get_attachment_image_url( $image_id, $size );
		$srcset = '';
		trigger_error( 'No valid image size found!', E_USER_NOTICE );
	} else {
		$resolutions = $sizes[ $size ];
		$src = wp_get_attachment_image_url( $image_id, $size );

		foreach ( $resolutions as $name => $resolution ) {
			array_push(
				$srcset, [
					'width' => getBreakPoint( $name ),
					'url' => wp_get_attachment_image_url( $image_id, "$size-$name" ),
				]
			);
		}
	}
	return [
		'src' => $src,
		'srcset' => $srcset,
	];
}
function hasImages( $size = 'full', $post_id = null, $image_provided = false) {
	$data = getImages( $size, $post_id, $image_provided );
	$srcset = '';
	$i = 0;
	if ( !empty( $data['srcset'] ) ) {
		sort( $data['srcset'] );
		foreach ( $data['srcset'] as $img ) {
			if ( $i > 0 ) {
				$srcset .= ',';
			}
			$srcset .= $img['url'] . ' ' . $img['width'] . 'w';
			$i++;
		}
	}
	if (empty($data['src'])) {
		return false;
	} else {
		return true;
	}
}


function theImages( $size = 'full', $post_id = null, $image_provided = false ) {
	$data = getImages( $size, $post_id, $image_provided );
	$srcset = '';
	$i = 0;
	if ( !empty( $data['srcset'] ) ) {
		sort( $data['srcset'] );
		foreach ( $data['srcset'] as $img ) {
			if ( $i > 0 ) {
				$srcset .= ',';
			}
			$srcset .= $img['url'] . ' ' . $img['width'] . 'w';
			$i++;
		}
	}

	if (empty($data['src'])) {
		return false;
	} else {
		return [
			'src' => $data['srcset'][0]['url'],
			'srcset' => " data-srcset=\"$srcset\" ",
		];
	}
}

add_action( 'after_setup_theme', 'TDS\imgs\registerSizes' );
