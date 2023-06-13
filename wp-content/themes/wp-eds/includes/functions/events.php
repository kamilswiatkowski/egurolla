<?php

namespace Like;

function get_event_box(): string
{
    $output = '<div class="event-box">';

    $output .= '<div class="event-box__thumb" style="background-image: url(http://egurolla/wp-content/themes/wp-eds/dist/images/image26.jpg);"></div>';
    $output .= '<div class="event-box__data">';
    $output .= '<a href="#" class="event-box__link"><h3 class="event-box__name">Disco dance workshop</h3></a>';
    $output .= '<ul class="event-box__list"><li><a href="">Disco dance</a></li><li><a href="">Disco dance</a></li><li><a href="">Disco dance</a></li></ul>  ';
    $output .= '<div class="event-box__details">
                <span>' . get_svg('calendar') . '6-15 lipca 2023</span>
                <span>' . get_svg('marker') . 'Kraków</span>
            </div>';
    $output .= '<a href="#" class="btn btn--white btn--red-bg">dowiedz sie więcej</a>';
    $output .= '</div>';
    $output .= '</div>';

    return $output;
}