<?php
namespace TDS\cpt;

function register_post_types() {
	/*
    register_post_type('library',
        array(
            'label'               => 'Download library',
            'description'         => 'Download library all item',
            'labels'              => array(
                'name'                => 'Library',
                'singular_name'       => 'Library',
                'menu_name'           => 'Library',
                'name_admin_bar'      => 'Library',
                'parent_item_colon'   => 'Parent',
                'all_items'           => 'Show all',
                'add_new_item'        => 'Add new item',
                'add_new'             => 'Add new',
                'new_item'            => 'New item',
                'edit_item'           => 'Edit item',
                'update_item'         => 'Update',
                'search_items'        => 'Search',
                'not_found'           => 'Not found',
                'not_found_in_trash'  => 'Not found in trash',
            ),
            'supports'            => array('title', 'editor', 'thumbnail','excerpt'),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 6,
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'menu_icon'           => 'dashicons-format-aside'
        )
    );
	*/
}

function register_taxonomies() {
	/*
    register_taxonomy('downloads', 'library', array(
        'labels'        => array(
            'name'               => 'Library category',
            'singular_name'      => 'Category',
            'search_items'       => 'Search',
            'all_items'          => 'All item',
            'parent_item'        => 'Parent',
            'parent_item_colon'  => 'Parents',
            'edit_item'          => 'Edit category',
            'update_item'        => 'Update category',
            'add_new_item'       => 'Add new',
            'new_item_name'      => 'New category',
            'menu_name'          => 'Category',
            'rewrite'            => array (
                'slug'           => 'downloads-category',
            ),
        ),
        'show_ui'       => true,
        'show_tagcloud' => false,
        'hierarchical'  => true,
        'show_admin_column' => true
        )
    );
	*/
    return true;
}

add_action( 'init', 'TDS\cpt\register_post_types', 0 );
add_action( 'init', 'TDS\cpt\register_taxonomies', 0 );
