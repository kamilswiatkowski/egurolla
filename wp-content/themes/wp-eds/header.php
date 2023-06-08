<!doctype html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '' ); ?></title>
    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/favicon/favicon.ico" rel="shortcut icon">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
    <?php echo get_template_part( 'partials/favicon' ); ?>
    <?php echo get_template_part( 'partials/og' ); ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
<div class="hidden"><?php
    $svg_path = __DIR__ . '/dist/svg/symbols.min.svg';
    if ( file_exists( $svg_path ) ) {
        include( $svg_path );
    }
    ?></div>
<header class="header">
</header>

<main class="main">


