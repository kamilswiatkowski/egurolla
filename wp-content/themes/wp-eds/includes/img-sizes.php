<?php

namespace TDS\imgs;

function getSizes() { //TODO: Fill in
	return [
		'article-big'   => [
			'full_hd' => [ 1088, 706 ],
			'smart'   => [ 512, 348 ],
		],
		'article'       => [
			'full_hd' => [ 878, 628 ],
			'smart'   => [ 480, 348 ],
		],
		'article-small' => [
			'full_hd' => [ 566, 402 ],
			'smart'   => [ 480, 348 ],
		],
		'single'       => [
			'full_hd' => [ 1396, 796 ],
			'smart'   => [ 482, 274 ],
		],
		'library'       => [
			'full_hd' => [ 300, 405 ],
		],
        'member'        => [
            'full_hd' => [ 272, 284 ],
        ],
		'avatar'        => [
			'full_hd' => [ 130, 130 ],
		],
		'slider'        => [
			'full_hd' => [ 1212, 532 ],
		],
		'slider-small'        => [
			'full_hd' => [ 276, 276 ],
		],
	];
}
