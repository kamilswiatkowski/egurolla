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

    <div class="see-also">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="section__title">zobacz także</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="see-also__slider">
                        <?php Like\article_box($post->ID); ?>
                        <?php Like\article_box($post->ID); ?>
                        <?php Like\article_box($post->ID); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();