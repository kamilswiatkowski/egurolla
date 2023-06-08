<?php

$post    = get_post();
$content = $post->post_content;
get_header();

while ( have_posts() ) : the_post();
	echo apply_filters( 'the_content', $content );
endwhile;

get_footer();