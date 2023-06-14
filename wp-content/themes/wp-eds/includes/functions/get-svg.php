<?php

namespace Like;

function get_svg($name = false)
{
    if ( ! $name || strlen($name) < 1) {
        return false;
    }
    $name = str_replace('.svg', '', $name);

    $file_path = get_stylesheet_directory() . '/dist/images/' . $name . '.svg';

    if (file_exists($file_path)) {
        return file_get_contents($file_path);
    }

    return false;
}
