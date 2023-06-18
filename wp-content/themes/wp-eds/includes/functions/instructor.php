<?php

namespace Like;

function instructor_box(int $id): string
{
    $instructorName = get_the_title($id);
    $instructorImage = get_field('instructor_image', $id);
    $instructorClass = get_field('instructor_class', $id);
    $instructorStyle = get_field('instructor_style', $id);
    $instructorLink = get_the_permalink($id);

    $output = '<div class="instructor-box">';
    $output .= '<div class="instructor-box__thumb" style="background-image: url(' . $instructorImage . ');"></div>';
    $output .= '<div class="instructor-box__info">';
    $output .= '<a href="' . $instructorLink . '" class="instructor-box__link"><h3 class="instructor-box__name">' . $instructorName . '</h3></a>';
    $output .= '<span class="instructor-box__class">' . $instructorClass . '</span>';
    $output .= '<span class="instructor-box__style">' . $instructorStyle . '</span>';
    $output .= '</div>';
    $output .= '</div>';

    return $output;
}