<?php

namespace TDS\cpt;

function register_post_types()
{
    register_post_type(
      'teams',
      [
        'label'               => 'Zespoły',
        'description'         => 'Zespoły',
        'labels'              => [
          'name'               => 'Zespoły',
          'singular_name'      => 'Zespoły',
          'menu_name'          => 'Zespoły',
          'name_admin_bar'     => 'Zespoły',
          'parent_item_colon'  => 'Parent',
          'all_items'          => 'Pokaż wszystkie',
          'add_new_item'       => 'Dodaj nowy',
          'add_new'            => 'Dodaj nowy',
          'new_item'           => 'Nowy',
          'edit_item'          => 'Edytuj',
          'update_item'        => 'Aktualizuj',
          'search_items'       => 'Szukaj',
          'not_found'          => 'Nie znaleziono',
          'not_found_in_trash' => 'Nie znaleziono w koszu',
        ],
        'show_in_rest'        => true,
        'supports'            => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'],
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
        'menu_icon'           => 'dashicons-format-aside',
        'taxonomies'          => ['teams-cat'],
      ]
    );

    register_post_type(
      'instruktorzy',
      [
        'label'               => 'Instruktorzy',
        'description'         => 'Instruktorzy',
        'labels'              => [
          'name'               => 'Instruktorzy',
          'singular_name'      => 'Instruktorzy',
          'menu_name'          => 'Instruktorzy',
          'name_admin_bar'     => 'Instruktorzy',
          'parent_item_colon'  => 'Parent',
          'all_items'          => 'Pokaż wszystkie',
          'add_new_item'       => 'Dodaj nowy',
          'add_new'            => 'Dodaj nowy',
          'new_item'           => 'Nowy',
          'edit_item'          => 'Edytuj',
          'update_item'        => 'Aktualizuj',
          'search_items'       => 'Szukaj',
          'not_found'          => 'Nie znaleziono',
          'not_found_in_trash' => 'Nie znaleziono w koszu',
        ],
        'show_in_rest'        => true,
        'supports'            => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'],
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 6,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'menu_icon'           => 'dashicons-format-aside',
      ]
    );

    register_post_type(
      'styl',
      [
        'label'               => 'Style taneczne',
        'description'         => 'Style taneczne',
        'labels'              => [
          'name'               => 'Style taneczne',
          'singular_name'      => 'Style taneczne',
          'menu_name'          => 'Style taneczne',
          'name_admin_bar'     => 'Style taneczne',
          'parent_item_colon'  => 'Parent',
          'all_items'          => 'Pokaż wszystkie',
          'add_new_item'       => 'Dodaj nowy',
          'add_new'            => 'Dodaj nowy',
          'new_item'           => 'Nowy',
          'edit_item'          => 'Edytuj',
          'update_item'        => 'Aktualizuj',
          'search_items'       => 'Szukaj',
          'not_found'          => 'Nie znaleziono',
          'not_found_in_trash' => 'Nie znaleziono w koszu',
        ],
        'show_in_rest'        => true,
        'supports'            => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'],
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 6,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'menu_icon'           => 'dashicons-format-aside',
      ]
    );
    register_post_type(
      'kariera',
      [
        'label'               => 'Kariera',
        'description'         => 'Kariera',
        'labels'              => [
          'name'               => 'Kariera',
          'singular_name'      => 'Kariera',
          'menu_name'          => 'Kariera',
          'name_admin_bar'     => 'Kariera',
          'parent_item_colon'  => 'Parent',
          'all_items'          => 'Pokaż wszystkie',
          'add_new_item'       => 'Dodaj nowy',
          'add_new'            => 'Dodaj nowy',
          'new_item'           => 'Nowy',
          'edit_item'          => 'Edytuj',
          'update_item'        => 'Aktualizuj',
          'search_items'       => 'Szukaj',
          'not_found'          => 'Nie znaleziono',
          'not_found_in_trash' => 'Nie znaleziono w koszu',
        ],
        'show_in_rest'        => true,
        'supports'            => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'],
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 6,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'menu_icon'           => 'dashicons-format-aside',
      ]
    );
}

function register_taxonomies()
{
    register_taxonomy('teams-cat', 'teams', [
                                   'labels'              => [
                                     'name'              => 'Kategorie zespołów',
                                     'singular_name'     => 'Kategorie zespołów',
                                     'search_items'      => 'Szukaj',
                                     'all_items'         => 'Wszystkie',
                                     'parent_item'       => 'Nadrzędny',
                                     'parent_item_colon' => 'Nadrzędny',
                                     'edit_item'         => 'Edytuj kategorię',
                                     'update_item'       => 'Aktualizuj',
                                     'add_new_item'      => 'Dodaj nową kategorię',
                                     'new_item_name'     => 'Nowa kategoria',
                                     'menu_name'         => 'Kategorie zespołów',
                                   ],
                                   'show_ui'             => true,
                                   'hierarchical'        => true,
                                   'show_admin_column'   => true,
                                   'show_in_quick_edit ' => true,
                                   'show_in_rest'        => true,
                                   'show_admin_column '  => true,
                                 ]
    );

    return true;
}

add_action('init', 'TDS\cpt\register_post_types', 0);
add_action('init', 'TDS\cpt\register_taxonomies', 0);
