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
            'post_types'      => ['page', 'post', 'teams', 'events'],
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
            'post_types'      => ['page', 'post', 'teams', 'events'],
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
            'post_types'      => ['page', 'post', 'teams', 'events'],
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
            'post_types'      => ['page', 'post', 'teams', 'events'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'event-desc',
            'title'           => __('Opis wydarzenia'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['opis', 'wydarzenia'],
            'post_types'      => ['page', 'post', 'teams', 'events'],
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
            'post_types'      => ['page', 'post', 'teams', 'events'],
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
            'post_types'      => ['page', 'post', 'teams', 'events'],
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
            'post_types'      => ['page', 'post', 'teams', 'events'],
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
            'post_types'      => ['page', 'post', 'teams', 'events', 'instruktorzy', 'style'],
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
            'post_types'      => ['page', 'post', 'teams', 'events'],
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
            'post_types'      => ['page', 'post', 'teams', 'events'],
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
            'post_types'      => ['page', 'post', 'teams', 'events'],
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
            'post_types'      => ['page', 'post', 'teams', 'events'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'our-team',
            'title'           => __('Poznaj trenerów pełnych pasji'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['poznaj', 'trenerów'],
            'post_types'      => ['page', 'post', 'teams', 'events'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'event-plan',
            'title'           => __('Poznaj program wydarzenia'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['poznaj', 'program', 'wydarzenia'],
            'post_types'      => ['page', 'post', 'teams', 'events'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'participation-conditions',
            'title'           => __('Jakie warunki musisz spełni, by z nami pojechać'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['jakie', 'warunki', 'musisz', 'spełnić', 'by', 'z', 'nami', 'pojechać'],
            'post_types'      => ['page', 'post', 'teams', 'events'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'departure-information',
            'title'           => __('Informacje o wyjeździe i zebrania'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['informacje', 'o', 'wyjeźdie', 'i', 'zebrania'],
            'post_types'      => ['page', 'post', 'teams', 'events'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'camp-prize',
            'title'           => __('Poznaj cenę campa'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['poznaj', 'cenę', 'campa'],
            'post_types'      => ['page', 'post', 'teams', 'events'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'do-you-have-questions',
            'title'           => __('Masz pytania'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['masz', 'pytania'],
            'post_types'      => ['page', 'post', 'teams', 'events'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'instructor-description',
            'title'           => __('Opis instruktora'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['opis', 'instruktora'],
            'post_types'      => ['page', 'post', 'teams', 'events', 'instruktorzy'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'about-instructor',
            'title'           => __('O instruktorze'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['o', 'instruktorze'],
            'post_types'      => ['page', 'post', 'teams', 'events', 'instruktorzy'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'teams-led-by',
            'title'           => __('Zespoły prowadzone przez'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['zespoły', 'prowadzone', 'przez'],
            'post_types'      => ['page', 'post', 'teams', 'events', 'instruktorzy'],
          ]
        );

        acf_register_block(
          [
            'name'            => 'contact',
            'title'           => __('Kontakt'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['kontakt', 'dane'],
            'post_types'      => ['page', 'post', 'teams', 'events', 'instruktorzy'],
          ]
        );

        acf_register_block(
          [
            'name'            => 'newsletter',
            'title'           => __('Newsletter'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['newsletter'],
            'post_types'      => ['page', 'post', 'teams', 'events', 'instruktorzy'],
          ]
        );

        acf_register_block(
          [
            'name'            => 'contact-map',
            'title'           => __('Kontakt mapa'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['mapa', 'kontakt mapa'],
            'post_types'      => ['page', 'post', 'teams', 'events', 'instruktorzy'],
          ]
        );

        acf_register_block(
          [
            'name'            => 'casting-form',
            'title'           => __('Formularz castingowy'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['casting', 'formularz', 'form casting'],
            'post_types'      => ['page', 'post', 'teams', 'events', 'instruktorzy'],
          ]
        );

        acf_register_block(
          [
            'name'            => 'thankyou-page',
            'title'           => __('Thank You page'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['thank', 'thankyou', 'thankyoupage', 'dziekujemy'],
            'post_types'      => ['page', 'post', 'teams', 'events', 'instruktorzy'],
          ]
        );

        acf_register_block(
          [
            'name'            => 'contact-coop',
            'title'           => __('Kontakt w sprawach współpracy'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['kontakt', 'współpraca', 'patronat', 'reklama'],
            'post_types'      => ['page', 'post', 'teams', 'events', 'instruktorzy'],
          ]
        );

        acf_register_block(
          [
            'name'            => 'document-download',
            'title'           => __('Dokumenty do pobrania'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['dokumenty', 'pobieranie', 'załączniki',],
            'post_types'      => ['page', 'post', 'teams', 'events', 'instruktorzy'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'quote-eds',
            'title'           => __('Cytat EDS'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['cytat', 'eds'],
            'post_types'      => ['page', 'post', 'teams', 'events', 'instruktorzy'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'looking-for-idea',
            'title'           => __('Szukasz pomysłu na wakacje dla swojego dziecka'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['szukasz', 'pomysłu', 'na', 'wakacje', 'dla', 'swojeg', 'dziecka'],
            'post_types'      => ['page', 'post', 'teams', 'events', 'instruktorzy'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'small-advantages-single',
            'title'           => __('Przykładowe koszyści - wpis'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['przykładowe', 'korzyści'],
            'post_types'      => ['page', 'post', 'teams', 'events', 'instruktorzy'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'dancing-styles-in-our-school',
            'title'           => __('Style tańca dostępne w naszej szkole'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['style', 'tańca', 'dostępne', 'w', 'naszej', 'szkole'],
            'post_types'      => ['page', 'post', 'teams', 'events', 'instruktorzy'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'why-choose-us',
            'title'           => __('Dlaczego warto z nami jechać'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['dlaczego', 'warto', 'z', 'nami', 'jechać'],
            'post_types'      => ['page', 'post', 'teams', 'events', 'instruktorzy'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'testimonials',
            'title'           => __('Opinie kursantów'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['opinie', 'kursantów'],
            'post_types'      => ['page', 'post', 'teams', 'events', 'instruktorzy'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'pricing',
            'title'           => __('Cennik'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['cennik'],
            'post_types'      => ['page', 'post', 'teams', 'events', 'instruktorzy'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'important',
            'title'           => __('Ważne informacje'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['ważne', 'informacje'],
            'post_types'      => ['page', 'post', 'teams', 'events', 'instruktorzy'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'lessons',
            'title'           => __('Lekcje indywidualne'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['lekcje', 'indywidualne'],
            'post_types'      => ['page', 'post', 'teams', 'events', 'instruktorzy'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'why-choose-us',
            'title'           => __('Dlaczego warto z nami jechać'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['dlaczego', 'warto', 'z', 'nami', 'jechać'],
            'post_types'      => ['page', 'post', 'teams', 'events', 'instruktorzy'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'only-one-school-in-poland',
            'title'           => __('Jedyna taka szkoła w polsce'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['jedyna', 'taka', 'szkoła', 'w', 'Polsce'],
            'post_types'      => ['page', 'post', 'teams', 'events', 'instruktorzy'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'history-of-our-school',
            'title'           => __('Poznaj historię naszej szkoły'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['poznaj', 'historię', 'naszej', 'szkoły'],
            'post_types'      => ['page', 'post', 'teams', 'events', 'instruktorzy'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'partners',
            'title'           => __('Poznaj naszych partnerów'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['poznaj', 'naszych', 'partnerów'],
            'post_types'      => ['page', 'post', 'teams', 'events', 'instruktorzy'],
          ]
        );
        acf_register_block(
          [
            'name'            => 'opinions',
            'title'           => __('Opinie naszych partnerów'),
            'render_callback' => 'my_acf_block_render_callback',
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'align'           => 'full',
            'keywords'        => ['opinie', 'naszych', 'partnerów'],
            'post_types'      => ['page', 'post', 'teams', 'events', 'instruktorzy'],
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
