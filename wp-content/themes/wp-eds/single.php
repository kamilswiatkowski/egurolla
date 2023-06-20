<?php

$post = get_post();
$content = $post->post_content;
get_header();

?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php while (have_posts()) : the_post();
                    echo apply_filters('the_content', $content);
                endwhile; ?>
            </div>
        </div>
    </div>

<?php get_footer();