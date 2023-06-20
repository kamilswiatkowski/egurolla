<?php

namespace Like;

function plan_box(array $plan, int $index): string
{
    $thumb = $plan['image'];
    $title = $plan['title'];
    $smallLabel = $plan['small_label'];
    $description = $plan['description'];

    $output = '<div class="plan-box">';
    $output .= '<div class="plan-box__thumb" style="background-image: url(' . $thumb . ');"></div>';
    $output .= '<div class="plan-box__info">';
    $output .= '<div class="plan-box__top">';
    $output .= '<span class="plan-box__index">' . $index . '.</span>';
    $output .= '<div class="plan-box__title"><h4 class="plan-box__title__name">' . $title . '</h4>';
    if ($smallLabel) {
        $output .= '<span class="plan-box__small-label">' . $smallLabel . '</span>';
    }
    $output .= '</div>';
    $output .= '</div>';
    $output .= '<p class="plan-box__description">' . $description . '</p>';
    $output .= '</div>';
    $output .= '</div>';

    return $output;
}