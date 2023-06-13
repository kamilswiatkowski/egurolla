<?php

namespace Like;

function get_section_header(string $label, string $title, string $description): string
{
    $output = '';
    if ($label != '') {
        $output .= '<span class="section__label">' . $label . '</span>';
    }
    if ($title != '') {
        $output .= '<h3 class="section__title">' . $title . '</h3>';
    }
    if ($description != '') {
        $output .= '<p class="section__description">' . $description . '</p>';
    }

    return $output;
}