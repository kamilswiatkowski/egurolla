<?php

namespace Like;

function dance_style_box($style)
{
    $post_thumb = get_the_post_thumbnail_url($style);

    ?>
    <a href="<?php echo get_the_permalink($style); ?>" class="dance-style-box"
       style="background-image: url(<?php echo $post_thumb; ?>);">
        <span class="dance-style-box__name"><?php echo $style->post_title; ?></span>
    </a>

<?php }