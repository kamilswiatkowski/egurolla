<?php

add_action('acf/init', 'my_acf_init');

function my_acf_init()
{
    if (function_exists('acf_register_block')) {
        acf_register_block(
          [
            'name'            => 'events',
            'title'           => __('Wydarzenia'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['wydarzenia'],
            'post_types'      => ['page', 'post', 'teams'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'about-agustin',
            'title'           => __('O Agustin Egurrola'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['o', 'agustin', 'egurrola'],
            'post_types'      => ['page', 'post', 'teams'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'advantages',
            'title'           => __('Zalety szkoły'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['zalety', 'szkoły'],
            'post_types'      => ['page', 'post', 'teams'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'why-you-should-dance',
            'title'           => __('Dlaczego warto tańczyć'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['dlaczego', 'warto', 'tańczyć'],
            'post_types'      => ['page', 'post', 'teams'],
          ]
        );
		    acf_register_block(
			    [
				    'name'            => 'home-hero',
				    'title'           => __('Strona główna hero'),
				    'render_callback' => 'my_acf_block_render_callback',
				    'category'        => 'formatting',
				    'icon'            => 'admin-comments',
				    'align'           => 'full',
				    'keywords'        => ['strona', 'główna', 'hero'],
				    'post_types'      => ['page', 'post', 'teams'],
			    ]
		    );
		    acf_register_block(
			    [
				    'name'            => 'teams',
				    'title'           => __('Zespoły'),
				    'render_callback' => 'my_acf_block_render_callback',
				    'category'        => 'formatting',
				    'icon'            => 'admin-comments',
				    'align'           => 'full',
				    'keywords'        => ['zespoły'],
				    'post_types'      => ['page', 'post', 'teams'],
			    ]
		    );
		    acf_register_block(
			    [
				    'name'            => 'map',
				    'title'           => __('Mapa'),
				    'render_callback' => 'my_acf_block_render_callback',
				    'category'        => 'formatting',
				    'icon'            => 'admin-comments',
				    'align'           => 'full',
				    'keywords'        => ['mapa'],
				    'post_types'      => ['page', 'post', 'teams'],
			    ]
		    );
		    acf_register_block(
			    [
				    'name'            => 'about-team',
				    'title'           => __('O zespole'),
				    'render_callback' => 'my_acf_block_render_callback',
				    'category'        => 'formatting',
				    'icon'            => 'admin-comments',
				    'align'           => 'full',
				    'keywords'        => ['o', 'zespole'],
				    'post_types'      => ['page', 'post', 'teams'],
			    ]
		    );
		    acf_register_block(
			    [
				    'name'            => 'experience',
				    'title'           => __('Wyjątkowe doświadczenia'),
				    'render_callback' => 'my_acf_block_render_callback',
				    'category'        => 'formatting',
				    'icon'            => 'admin-comments',
				    'align'           => 'full',
				    'keywords'        => ['wyjątkowe', 'doświadczenia'],
				    'post_types'      => ['page', 'post', 'teams'],
			    ]
		    );
		    acf_register_block(
			    [
				    'name'            => 'team-wins',
				    'title'           => __('Najważniejsze osiągnięcia'),
				    'render_callback' => 'my_acf_block_render_callback',
				    'category'        => 'formatting',
				    'icon'            => 'admin-comments',
				    'align'           => 'full',
				    'keywords'        => ['najważniejsze', 'osiągnięcia'],
				    'post_types'      => ['page', 'post', 'teams'],
			    ]
		    );

        acf_register_block(
          [
            'name'            => 'discover-more',
            'title'           => __('Odkryj więcej'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['odkryj', 'więcej'],
            'post_types'      => ['page', 'post', 'teams'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'who-is-agustin',
            'title'           => __('Kim jest Agustin Egurrola'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['kim', 'jest', 'agustin', 'egurrola'],
            'post_types'      => ['page', 'post', 'teams'],
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
		if (file_exists(get_theme_file_path("/partials/block/hero/content-{$slug}.php"))) {
				include get_theme_file_path("/partials/block/hero/content-{$slug}.php");
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
