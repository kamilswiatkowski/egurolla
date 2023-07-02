<?php

namespace Like;

function get_png($name = false)
{
    if ( ! $name || strlen($name) < 1) {
        return false;
    }
    $name = str_replace('.png', '', $name);

    $file_path = get_stylesheet_directory_uri() . '/dist/images/' . $name . '.png';
    $img = '<img src='. $file_path .'>';
    return $img;

}
