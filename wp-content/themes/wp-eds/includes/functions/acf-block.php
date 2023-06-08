<?php

add_action('acf/init', 'my_acf_init');

function my_acf_init()
{
    if (function_exists('acf_register_block')) {
        acf_register_block(
          [
            'name'            => 'sign-up',
            'title'           => __('Sign Up (TD)'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['sign', 'up'],
            'post_types'      => ['page', 'post'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'main-hero',
            'title'           => __('Main Hero (TD)'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['main', 'hero'],
            'post_types'      => ['page'],
          ]
        );

	    acf_register_block(
		    [
			    'name'            => 'about-platform',
			    'title'           => __('About Platform (TD)'),
			    'render_callback' => 'my_acf_block_render_callback',
			    'category'        => 'formatting',
			    'icon'            => 'admin-comments',
			    'align'           => 'full',
			    'keywords'        => ['about', 'platform'],
			    'post_types'      => ['page'],
		    ]
	    );

	    acf_register_block(
		    [
			    'name'            => 'key-features',
			    'title'           => __('Key Features (TD)'),
			    'render_callback' => 'my_acf_block_render_callback',
			    'category'        => 'formatting',
			    'icon'            => 'admin-comments',
			    'align'           => 'full',
			    'keywords'        => ['key', 'features'],
			    'post_types'      => ['page'],
		    ]
	    );

	    acf_register_block(
		    [
			    'name'            => 'feature',
			    'title'           => __('Feature (TD)'),
			    'render_callback' => 'my_acf_block_render_callback',
			    'category'        => 'formatting',
			    'icon'            => 'admin-comments',
			    'align'           => 'full',
			    'keywords'        => ['feature'],
			    'post_types'      => ['page'],
		    ]
	    );

	    acf_register_block(
		    [
			    'name'            => 'comming-features',
			    'title'           => __('Comming Features (TD)'),
			    'render_callback' => 'my_acf_block_render_callback',
			    'category'        => 'formatting',
			    'icon'            => 'admin-comments',
			    'align'           => 'full',
			    'keywords'        => ['feature'],
			    'post_types'      => ['page'],
		    ]
	    );


    }
}

function my_acf_block_render_callback($block)
{
    // convert name ("acf/testimonial") into path friendly slug ("testimonial")
    $slug = str_replace('acf/', '', $block['name']);
    // include a template part from within the "template-parts/block" folder
    if (file_exists(get_theme_file_path("/partials/block/content-{$slug}.php"))) {
        include get_theme_file_path("/partials/block/content-{$slug}.php");
    }
}

$version = \file_get_contents(locate_template('version.php'));

function my_acf_admin_enqueue_scripts()
{
    global $version;
    wp_register_style('my-acf-input-css', get_stylesheet_directory_uri() . '/dist/style.css', false, $version);
    wp_enqueue_style('my-acf-input-css');
    wp_register_script('my-acf-input-js', get_stylesheet_directory_uri() . '/dist/main.js', false, $version);
    wp_enqueue_script('my-acf-input-js');
}

//add_action('acf/input/admin_enqueue_scripts', 'my_acf_admin_enqueue_scripts');
