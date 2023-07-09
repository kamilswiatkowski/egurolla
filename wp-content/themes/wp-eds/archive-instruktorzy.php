<?php

$post = get_post();
$content = $post->post_content;
get_header();

$instruktorzy = get_posts(
  [
    'post_type' => 'instruktorzy',
  ]
);

?>

    <section class="home-hero" style="background: url('<?php echo home_url(
    ); ?>/wp-content/themes/wp-eds/dist/images/kariera-bg.png') center center no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="home-hero__wrapper">
                        <div class="home-hero__title">
                            <h1>Poznaj naszych instruktorów</h1>
                        </div>
                        <div class="home-hero__subtitle">
                            instruktorzy
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="post-type-archive-kariera__list">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php echo Like\get_section_header(
                      'Poznaj nasz team',
                      'instruktorzy',
                      'Nasi instruktorzy to osoby, które kochają taniec i uwielbiają dzielić się swoją wiedzą i doświadczeniem z innymi.'
                    ); ?>
                </div>
            </div>
            <div class="row">
                <?php foreach ($instruktorzy as $item) { ?>
                    <div class="col-12 col-md-6 col-lg-3">
                        <?php echo Like\instructor_box($item->ID); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

<?php

get_footer();